<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LoginController extends Controller
{
    // ✅ API Login - Returns Token
    public function apiLogin(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
            'email' => 'required|email',
        ]);

        $validateUrl = 'https://cmgt.hr.nl/api/validate-sso-token';
        dd($validateUrl);
        $response = Http::withOptions([
            'verify' => false // ✅ Skips SSL verification
        ])->withHeaders([
            'token' => $request->token,
        ])->get($validateUrl);

        if ($response->status() === 401) {
            return response()->json(['error' => 'Token expired or invalid'], 401);
        }

        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'token' => $request->token,
                'last_login_at' => now(),
            ]
        );

        $user->update([
            'last_login_at' => now(),
        ]);

        // ✅ Generate a Sanctum token
        $authToken = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'message' => 'API Login successful',
            'user' => $user,
            'auth_token' => $authToken
        ], 200);
    }



    public function Login(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $validateUrl = 'https://cmgt.hr.nl/api/validate-sso-token';
        $response = Http::withHeaders([
            'token' => $request->token,
        ])->get($validateUrl);

        if ($response->status() === 401) {
            return response()->json(['error' => 'Token expired or invalid'], 401);
        }


        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name'  => $request->name,
                'token' => $request->token,
                'last_login_at' => Carbon::now()->toDateString(),
            ]
        );

        $user->update([
            'last_login_at' => Carbon::now()->toDateString(),
            'token' => $request->token,
        ]);

        $lastLoginDate = Carbon::now()->toDateString();


        $redirectUrl = "http://145.24.222.40/login/?token=" . urlencode($request->token) .
            "&email=" . urlencode($request->email) .
            "&date=" . urlencode($lastLoginDate);

        return redirect()->to($redirectUrl);
    }

}

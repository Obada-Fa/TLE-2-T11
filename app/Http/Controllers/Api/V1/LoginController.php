<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Get token from URL parameters (HR redirects users with this token)
        $token = $request->query('token');
        $name = $request->query('name');
        $email = $request->query('email');

        // Ensure all required parameters are present
        if (!$token || !$email || !$name) {
            return response()->json(['error' => 'Invalid or missing parameters'], 400);
        }

        // Validate the token with HR API
        $response = Http::withOptions([
            'verify' => false // 🚀 Disables SSL verification (TEMPORARY)
        ])->withHeaders([
            'Token' => $token,
        ])->post('https://cmgt.hr.nl/api/validate-sso-token');


        if ($response->status() !== 200) {
            return response()->json(['error' => 'Invalid SSO Token'], 401);
        }

        // Find or create the user in Laravel
        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'token' => $token,
                'last_login_at' => Carbon::now(),
            ]
        );

        // Update last login time
        $user->update([
            'last_login_at' => Carbon::now(),
        ]);

        // Generate a Laravel API token for authenticated requests
        $apiToken = Str::random(60);
        $user->update(['api_token' => $apiToken]);

        // Return the token instead of redirecting to the homepage
        return response()->json([
            'message' => 'Login successful',
            'user' => $user,
            'api_token' => $apiToken,
        ]);
    }
}


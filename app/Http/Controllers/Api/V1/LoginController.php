<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
//            $all = $request->all();
//            $redi = $redirect;
//
//            $formattedUrl = "http://" . $redirect;
//
////        return response()->json([
////            'all' => $all,
////            'redi' => $redi
////        ]);
//            return redirect()->to($formattedUrl);


        $data = $request->validate([
            'token' => 'required',
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

//        $token = $request->token;
//        $name = $request->name;
//        $email = $request->email;

        // Validate token
        $validateUrl = 'https://cmgt.hr.nl/api/validate-sso-token';
        $response = Http::withHeaders([
//            'token' => $request->token,
            'Authorization' => $data['token'],
        ])->get($validateUrl);

        if ($response->status() === 401) {
            return response()->json(['error' => 'Token expired or invalid'], 401);
        } else {
            return response()->json(['Token is valid']);
        }

//        $user = User::firstOrCreate(
//            ['email' => $request->email],
//            ['name' => $request->name]
//        );


        return response()->json([
            'token' => $token,
            'name' => $name,
            'email' => $email
        ]);
    }

}

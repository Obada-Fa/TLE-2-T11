<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

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


        $request->validate([
            'token' => 'required',
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        $validateUrl = 'https://cmgt.hr.nl/api/validate-sso-token';
        $response = Http::withHeaders([
//            'token' => $request->token,
            'Authorization' => 'Bearer ' . $request->token,
        ])->get($validateUrl);

//        $user = Auth::user();
//        dd($user);

        if ($response->status() === 401) {
            return response()->json(['error' => 'Token expired or invalid'], 401);
        } else {

//            $user = User::Create(
//                ['email' => $request->email],
//                ['name' => $request->name]
//            );
            return Redirect::to('https://youtube.com');
        }





        return response()->json([
            'token' => $token,
            'name' => $name,
            'email' => $email
        ]);
    }

}

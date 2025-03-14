<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class ValidateSSOToken
{

    public function handle(Request $request, Closure $next)
    {
        \Log::info('ValidateSSOToken middleware executed');

        // Get the token from the Authorization header
        $token = $request->bearerToken();

        \Log::info('Token received:', ['token' => $token]);

        if (!$token) {
            \Log::error('Token missing');
            return response()->json(['error' => 'Unauthorized: Token missing'], 401);
        }

        // Validate the token with the SSO provider
        $validateUrl = 'https://cmgt.hr.nl/api/validate-sso-token';
        $response = Http::withHeaders([
            'token' => $token,
        ])->get($validateUrl);

        \Log::info('SSO validation response:', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);

        if ($response->status() === 401) {
            \Log::error('Token expired or invalid');
            return response()->json(['error' => 'Token expired or invalid'], 401);
        }

        // Find the user based on the token
        $user = User::where('token', $token)->first();

        if (!$user) {
            \Log::error('User not found for token:', ['token' => $token]);
            return response()->json(['error' => 'User not found'], 404);
        }

        // Log in the user
        Auth::login($user);

        return $next($request);
    }
}

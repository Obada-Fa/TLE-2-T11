<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ApiKey;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-KEY');

        if (!$apiKey) {
            return response()->json(['error' => 'API key required'], 401);
        }

        $hashedKey = hash('sha256', $apiKey);

        $key = ApiKey::where('key', $hashedKey)->first();

        if (!$key || !$key->active) {
            return response()->json(['error' => 'Invalid API key'], 403);
        }

        return $next($request);
    }
}

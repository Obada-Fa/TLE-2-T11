<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiKeyController extends Controller
{
    public function generate(Request $request)
    {
        // ✅ REMOVE API KEY CHECK (Allow users to generate their first API key)

        // Generate a unique API key
        $plainTextKey = Str::random(60);
        $hashedKey = hash('sha256', $plainTextKey);

        // Store in database (Without requiring an existing API key)
        $apiKey = ApiKey::create([
            'user_id' => 1, // ❗ Temporary fix (Replace with actual user logic later)
            'key' => $hashedKey,
            'name' => $request->input('name'),
        ]);

        return response()->json([
            'api_key' => $plainTextKey,
            'message' => 'Save this API key securely. You won’t see it again.'
        ], 201);
    }




    public function list(Request $request)
    {
        // Get API key from headers
        $apiKey = $request->header('X-API-KEY');

        if (!$apiKey) {
            return response()->json(['error' => 'API key required'], 401);
        }

        // Hash API key before checking in database
        $hashedKey = hash('sha256', $apiKey);
        $keyRecord = ApiKey::where('key', $hashedKey)->where('active', true)->first();

        if (!$keyRecord) {
            return response()->json(['error' => 'Invalid API key'], 403);
        }

        // Return all API keys that belong to the authenticated user
        return response()->json(ApiKey::where('user_id', $keyRecord->user_id)->get());
    }


    public function revoke(Request $request, $id)
    {
        $apiKey = ApiKey::where('user_id', $request->user()->id)->where('id', $id)->first();

        if (!$apiKey) {
            return response()->json(['error' => 'API key not found'], 404);
        }

        $apiKey->delete();

        return response()->json(['message' => 'API key revoked.']);
    }
}

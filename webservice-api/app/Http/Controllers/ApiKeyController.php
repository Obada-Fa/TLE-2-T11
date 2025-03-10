<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiKeyController extends Controller
{
    // Generate a new API key
    public function generate(Request $request): \Illuminate\Http\JsonResponse
    {
        $user = $request->user();

        // Create a unique API key
        $plainTextKey = Str::random(60);
        $hashedKey = hash('sha256', $plainTextKey); // Hash before storing

        // Save to database
        $apiKey = ApiKey::create([
            'user_id' => $user->id,
            'key' => $hashedKey,
            'name' => $request->input('name'),
        ]);

        return response()->json([
            'api_key' => $plainTextKey, // Show only once!
            'message' => 'Save this API key securely. You won’t see it again.',
        ], 201);
    }

    // Get user's API keys
    public function list(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json($request->user()->apiKeys);
    }

    // Revoke API key
    public function revoke(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $apiKey = ApiKey::where('user_id', $request->user()->id)->where('id', $id)->first();

        if (!$apiKey) {
            return response()->json(['error' => 'API key not found'], 404);
        }

        $apiKey->delete();

        return response()->json(['message' => 'API key revoked.']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class ApiKeyController extends Controller
{
    public function generate(Request $request)
    {
        $user = Auth::user(); // ✅ Get the authenticated user

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $plainTextKey = Str::random(60);
        $hashedKey = hash('sha256', $plainTextKey);

        // ✅ Store the API key in the database
        $apiKey = ApiKey::create([
            'user_id' => $user->id,
            'key' => $hashedKey,
            'name' => $request->input('name'),
        ]);

        return response()->json([
            'api_key' => $plainTextKey, // ✅ Return the new API key
            'message' => 'Save this API key securely. You won’t see it again.',
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

        // Find the API key that the user wants to delete
        $apiKeyToDelete = ApiKey::where('user_id', $keyRecord->user_id)->where('id', $id)->first();

        if (!$apiKeyToDelete) {
            return response()->json(['error' => 'API key not found'], 404);
        }

        // Delete the API key
        $apiKeyToDelete->delete();

        return response()->json(['message' => 'API key revoked successfully']);
    }

}

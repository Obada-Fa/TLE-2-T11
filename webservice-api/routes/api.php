<?php

use App\Http\Controllers\ApiKeyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/generate-api-key', [ApiKeyController::class, 'generate']);
    Route::get('/api-keys', [ApiKeyController::class, 'list']);
    Route::delete('/api-keys/{id}', [ApiKeyController::class, 'revoke']);
});

Route::middleware('api.key')->get('/protected-resource', function () {
    return response()->json(['message' => 'Access granted']);
});

route::get('/', function (Request $request) {
    return 'api';
});

<?php

use App\Http\Controllers\ApiKeyController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SignsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

//Route::middleware('auth:sanctum')->group(function () {
//    Route::post('/generate-api-key', [ApiKeyController::class, 'generate'])->name('generate-api-key');
//    Route::get('/api-keys', [ApiKeyController::class, 'list'])->name('api-keys');
//    Route::delete('/api-keys/{id}', [ApiKeyController::class, 'revoke'])->name('revoke-api-key');
//});

Route::post('/generate-api-key', [ApiKeyController::class, 'generate'])->name('generate-api-key');
Route::get('/api-keys', [ApiKeyController::class, 'list'])->name('api-keys');
Route::delete('/api-keys/{id}', [ApiKeyController::class, 'revoke'])->name('revoke-api-key');


// the route starts with api/
// To define a route u need to use apiResource see the example below
Route::apiResource('signs',SignsController::class);

Route::apiResource('categories',CategoriesController::class);
//Route::apiResource('lessons',Lesson::class);
Route::middleware('api.key')->get('/protected-resource', function () {
    return response()->json(['message' => 'Access granted']);
});

route::get('/', function (Request $request) {
    return 'api';
});

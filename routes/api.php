<?php

use App\Http\Controllers\Api\V1\CategoriesController;
use App\Http\Controllers\Api\V1\LoginController;
use App\Http\Controllers\Api\V1\SignsController;
use App\Http\Controllers\Api\V1\LessonsController;
use App\Http\Controllers\Api\V1\AssignmentController;
use App\Http\Controllers\Api\V1\FavoritesController;
use App\Http\Controllers\Api\V1\TestController as TestV1Controller;
use App\Http\Controllers\Api\V2\TestController as TestV2Controller;
use App\Http\Controllers\Api\V2\V2CategoriesController;
use App\Http\Controllers\Api\V2\V2SignsController;
use App\Http\Controllers\Api\V2\V2LessonsController;
use App\Http\Controllers\Api\V2\V2AssignmentController;
use App\Http\Controllers\Api\V2\UserController;
use App\Http\Controllers\ApiKeyController;
use App\Http\Middleware\NeutralMiddleware;
use App\Http\Middleware\ValidateSSOToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/generate-api-key', [ApiKeyController::class, 'generate'])->name('generate-api-key');
    Route::get('/api-keys', [ApiKeyController::class, 'list'])->name('api-keys');
    Route::delete('/api-keys/{id}', [ApiKeyController::class, 'revoke'])->name('revoke-api-key');
});

//Route::post('/generate-api-key', [ApiKeyController::class, 'generate'])->name('generate-api-key');
//Route::get('/api-keys', [ApiKeyController::class, 'list'])->name('api-keys');
//Route::delete('/api-keys/{id}', [ApiKeyController::class, 'revoke'])->name('revoke-api-key');


// the route starts with api/
// To define a route u need to use apiResource see the example below



Route::prefix('v1')->middleware(NeutralMiddleware::class)->group(function () {

    Route::get('/test', [TestV1Controller::class, 'index']);

    Route::apiResource('signs',SignsController::class);
    Route::apiResource('categories',CategoriesController::class);
    Route::apiResource('lessons',V2LessonsController::class);
    Route::apiResource('assignments',V2AssignmentController::class);
    Route::middleware(ValidateSSOToken::class)->apiResource('favorites', FavoritesController::class);

});


Route::middleware('api.key')->get('/protected-resource', function () {
    return response()->json(['message' => 'Access granted']);
});

Route::post('/login', [LoginController::class, 'apiLogin']);


//routes group version 2
Route::prefix('v2')->group(function () {
    Route::get('/test', [TestV2Controller::class, 'index']);
    Route::get('/users',[UserController::class, 'index']);
    Route::apiResource('signs',SignsController::class);
    Route::apiResource('categories',CategoriesController::class);
    Route::apiResource('lessons',V2LessonsController::class);
    Route::apiResource('assignments',V2AssignmentController::class);

});

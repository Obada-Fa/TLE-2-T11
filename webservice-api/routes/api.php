<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SignsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TestController as TestV1Controller;
use App\Http\Controllers\Api\V2\TestController as TestV2Controller;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// the route starts with api/
// To define a route u need to use apiResource see the example below
Route::apiResource('signs',SignsController::class);

Route::apiResource('categories',CategoriesController::class);
//Route::apiResource('lessons',Lesson::class);

Route::prefix('v1')->group(function () {
    Route::get('/test', [TestV1Controller::class, 'index']);

});

//routes group version 2
Route::prefix('v2')->group(function () {
    Route::get('/test', [TestV2Controller::class, 'index']);

});

<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SignsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// the route starts with api/
// To define a route u need to use apiResource see the example below
Route::apiResource('signs',SignsController::class);
Route::apiResource('categories',CategoriesController::class);
//Route::apiResource('lessons',Lesson::class);


<?php

use App\Http\Controllers\Api\V1\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/developer', function () {
    return view('developer.index');
});

Route::get('/login', [LoginController::class, 'login']);

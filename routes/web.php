<?php


use App\Http\Controllers\Api\V1\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/developer', function () {
    return view('developer.index');
});

// ✅ Browser Login Route
Route::get('/login', [LoginController::class, 'login']);


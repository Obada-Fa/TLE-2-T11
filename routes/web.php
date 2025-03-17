<?php


use App\Http\Controllers\Api\V2\V2LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/developer', function () {
    return view('developer.index');
});

// ✅ Browser Login Route
Route::get('/login', [V2LoginController::class, 'login']);


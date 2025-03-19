<?php


use App\Http\Controllers\Api\V2\V2LoginController;
use Illuminate\Support\Facades\Route;




// ✅ Browser Login Route
Route::get('/login', [V2LoginController::class, 'login']);


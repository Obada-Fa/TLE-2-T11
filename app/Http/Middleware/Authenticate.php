<?php
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    protected function authenticate($request, array $guards)
    {
        if ($user = Auth::guard('api')->user()) {
            return $user;
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
}


<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NeutralMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $response = $next($request);
        $response->headers->set('Access-Control-Allow-Origin','*');
//        $response->headers->set('Access-Control-Allow-Methods','GET,POST,PUT,DELETE,PATCH,OPTIONS');
        $response->headers->set('Cache-Control',['no-cache','no-store']);
        $response->headers->set('Content-Type','application/json,html,');
        return $response;
    }

    // ->header('Access-Control-Allow-Origin', '*')
    //        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
}

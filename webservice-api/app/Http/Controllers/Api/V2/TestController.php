<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        return response()->json(['Message' => 'Version 2!', 'Message2' => 'Dit is versie 2!']);
    }
}

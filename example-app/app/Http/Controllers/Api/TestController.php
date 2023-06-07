<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Index
     */
    public function index(Request $request)
    {
        return response()->json($request);
    }
}
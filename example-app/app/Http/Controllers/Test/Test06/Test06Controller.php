<?php

namespace App\Http\Controllers\Test06;

use App\Http\Controllers\Controller;

/**
 * regarding loop statement
 */
class Test06Controller extends Controller
{
    public function test()
    {
        $parent = new ParentClass();
        $child_a = new ChildAClass();
        
    }
}
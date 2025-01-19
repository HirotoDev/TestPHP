<?php

namespace App\Http\Controllers\Test\Test01;

use App\Http\Controllers\Controller;

/**
 * regarding variables
 */
class Test01Controller extends Controller
{
    public $global_variable = 10;

    public function _()
    {
        $local_variable = 10;
    }

    public function test()
    {
        return true;

        
    }
}
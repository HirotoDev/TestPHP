<?php

namespace App\Http\Controllers\Test03;

use App\Http\Controllers\Controller;

/**
 * regarding loop statement
 */
class Test03Controller extends Controller
{
    public function test_for(): array
    {
        $array = [
            10,
            49,
            20,
            73,
            10,
            82,
            28
        ];

        $sum = 0;
        $average = 0;
        $min = 0;
        $max = 0;

        // using for statement
        // for()

        return ['sum' => $sum, 'average' => $average, 'max' => $max, 'min' => $min];
    }

    public function test_for_dubble(): array
    {
        for ($i = 1; $i < 10; $i++) {
            for ($j = 1; $j < 10; $j++) {
                
            }
        }

        return [];
    }

    public function test_foreach(): array
    {
        $map = [
            'a' => 10,
            'b' => 20
        ]; 


        return null;
    }

    public function test_while(): array
    {
        while (true) {

        }
    }

    public function test_do_while()
    {
        do {

        } while (true);
    }
}
<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Http\Controllers\Test\Test01\Test01Controller;

class Test01Test extends TestCase
{
    public function test_that_true_is_true(): void
    {
        $test = new Test01Controller();
        $this->assertTrue($test->test());
    }
}
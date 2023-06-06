<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Http\Controllers\My\Test01Controller;

class Test01 extends TestCase
{
    public function test_that_true_is_true(): void
    {
        $test = new Test01Controller();
        $this->assertTrue($test->test());
    }
}
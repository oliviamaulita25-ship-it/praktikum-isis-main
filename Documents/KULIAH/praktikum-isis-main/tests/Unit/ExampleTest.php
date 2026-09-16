<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**@test*/
    public function test_it_can_add_two_numbers()
    {
        $a=5;
        $b=10;
        $result=$a+$b;

        $this->assertEquals(15,$result);
    }
}

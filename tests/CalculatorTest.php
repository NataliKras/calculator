<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            10,
            $this->calc->sum(2, 8),
            'wrong sum'
        );

        $this->assertEquals(
            4,
            $this->calc->min(10, 6),
            'wrong min'
        );

        $this->assertEquals(
            9,
            $this->calc->multiply(3, 3),
            'wrong multiply'
        );
        // $this->assertEquals(
        //     27,
        //     $this->calc->pow(3, 3),
        //     'wrong pow'
        // );
        $this->assertEquals(
            1,
            $this->calc->divide(3, 3),
            'wrong divide'
        );

        $this->assertEquals(
            3,
            $this->calc->percent(3, 10),
            'wrong percent'
        );

        // $this->assertEquals(
        //     10,
        //     $this->calc->equality(10, 10),
        //     'wrong equality'
        // );

        $this->assertEquals(
            1,
            $this->calc->more(10, 5),
            'wrong more'
        );

        $this->assertEquals(
            0,
            $this->calc->smaller(11, 10),
            'wrong smaller'
        );

    }

    protected function tearDown(): void
    {
    }
}

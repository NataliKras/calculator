<?php

namespace App;

class Calculator
{

    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }
    public function min(float $a, float $b): float
    {
        return $a - $b;
    }
    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }
    public function divide(float $a, float $b): float
    {
        return $a / $b;
    }
    public function percent(float $a, float $b): float
    {
        return $a % $b;
    }
    // public function equality(float $a, float $b): float
    // {
    //     return $a == $b;
    // }
    public function more(float $a, float $b): float
    {
        return $a > $b;
    }
    public function smaller(float $a, float $b): float
    {
        return $a < $b;
    }

}

<?php

interface CalculatorInterface {
    public function calculate();
}

abstract class Calculator implements CalculatorInterface
{
    protected $num1;
    protected $num2;

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    abstract public function calculate();
}
<?php
abstract class Calculator
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
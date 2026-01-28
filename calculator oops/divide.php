<?php
require_once 'Calculator.php';

class Divide extends Calculator
{
    public function calculate()
    {
        if ($this->num2 == 0) {
            throw new Exception("Division by zero is not allowed");
        }
        return $this->num1 / $this->num2;
    }
}
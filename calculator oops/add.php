<?php
require_once 'Calculator.php';

class Add extends Calculator
{
    public function calculate()
    {
        return $this->num1 + $this->num2;
    }
}

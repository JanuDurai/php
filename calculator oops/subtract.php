<?php
require_once 'Calculator.php';

class Subtract extends Calculator {
    public function calculate() {
        return $this->num1 - $this->num2;
    }
}

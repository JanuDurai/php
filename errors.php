<?php
// echo "Hello"  syntax error missed semicolon.

class ErrorImplement
{
    public function errorMessage()
    {
        echo '';
    }
}

$obj = new ErrorImplement;
// $obj->errorMessage('err');Fatal Error

// echo "$namespace"; Undefined variable

try {
    if (! file_exists("test.txt")) {
        throw new Exception("File not found");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    echo 10 / 0;
} catch (DivisionByZeroError $e) {
    echo "Error";
} finally {
    echo "Always runs";
}
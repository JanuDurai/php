<?php
$obj = new class {
    public function printHello()
    {
        echo 'Hello!!!';
    }
};

$obj->printHello();

// Ananymous with Logger

interface Logger
{
    public function printLog($name);
}

$logger = new class implements Logger
{
    public function printLog($name)
    {
        echo "Hi $name !!!";
    }
};

$logger->printLog('Janu');



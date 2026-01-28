<?php
//  overloading 

class Shape
{
    public function Area(...$args)
    {
        $count = count($args);
        if ($count === 1 && is_int($args[0]))
            echo $args[0] * $args[0], "\n";
        elseif ($count === 2 && is_int($args[0]) && is_int($args[1]))
            echo $args[0] * $args[1], "\n";
        else {
            echo "Invalid arguments";
        }
    }
}

$obj = new Shape();
$obj->Area(5);
$obj->Area(4, 4);

//  over riding 

class Square extends Shape
{
    public function Area(...$args)
    {
        echo "Area of square ", $args[0] * 2;
    }
}


$child_obj = new Square();
$child_obj->Area(10);

// overriding 
//  parent method extend

class BaseClass
{
    public function log()
    {
        echo "Parent class log method", "\n";
    }
}

class UserController extends BaseClass
{
    public function log()
    {
        parent::log();
        echo "Child Class log method", "\n";
    }
}

$user_obj = new UserController();
$user_obj->log();
$parent_obj = new BaseClass();
$parent_obj->log();

// overriding abstract method

abstract class Payment
{
    abstract public function pay($amount);
}

class UpiPayment extends Payment
{
    public function pay($amount)
    {
        echo "Paid amt using upi is ", $amount, "\n";
    }
}
$payment_obj = new UpiPayment();
$payment_obj->pay(12);

// $obj = new Payment(); cannot instantiate abstract class
// $obj->pay(12);

// overriding interface method

interface Logger
{
    public function write(string $msg): void;
}

class FileLogger implements Logger
{
    public function write(string $msg): void
    {
        echo "File: $msg";
    }
}

// $file_obj = new Logger(); cannot instantiate 
$file_obj = new FileLogger();
$file_obj->write("File is downloaded");
?>
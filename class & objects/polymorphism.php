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
     abstract function pay($amount);
     
     public function send($amount){
        echo "sdfgh";
     }
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
    // public $log;
    const count = 0;
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

// over riding with diff return types

// class A
// {
//     public function getUser(): string
//     {
//         return "";
//     }
// }

// class B extends A
// {
//     public function getUser(): int
//     {
//         return 5;
//     }
// } 
// class  covariance only works for obj type, not for primitive types. 

class Userr
{
}
class AdminUser extends Userr
{
}

class A
{
    public function getUser(): Userr
    {
        return new Userr();
    }
}

class B extends A
{
    public function getUser(): AdminUser
    {
        return new AdminUser();
    }
}
// covariance works for obj type.

// can give union reutrn types

class C
{
    public function getUser(): string|int
    {
        return "abc";
    }
}

class D extends C
{
    public function getUser(): string|int
    {
        return 5;
    }
}
// example for covariance and contravariance

class Animal
{
}
class Dog extends Animal
{
}

class Shapes
{
    public function get(): Animal
    {
    }
    public function set(Dog $d)
    {
    }
}

class Rectangle extends Shapes
{
    public function get(): Dog
    {
    }      // Covariance
    public function set(Animal $a)
    {
    }  // Contravariance
}

// overriding visiblity

class publicMthodClass
{
    public function test()
    {
    }
    protected function get()
    {
    }

    final public function run()
    {
    }
}

class protectedMethodClass extends publicMthodClass
{
    public function get()
    {
    } // valid
    // public function run(){} ERROR can't override final method
    // protected function test() {} // ERROR
}

?>
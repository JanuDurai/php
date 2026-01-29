<?php
// abstract class
abstract class Car
{
    public $speed;
    abstract public function setSpeed();
    public function moveForward()
    {
        echo "Vehicle is moving forward";
    }

    public function breakApply()
    {
        echo "Break is applied";
    }
}

// creating class using abstract class

class Verna extends Car
{
    public $Color;

    public function setSpeed()
    {
        $this->speed = 100;
    }
    public function setColor()
    {
        $this->Color = "Red";
    }
}

// obj creation

$car = new Verna();
$car->setSpeed();
echo "Speed of the vehicle is ", $car->speed, "\n";
$car->moveForward();

// through obj instance can access the abstarct class properties and methods and its own.

abstract class BankAccount
{
    private $account_balance;

    public function __construct($account_balance)
    {
        $this->account_balance = $account_balance;
    }

    abstract protected function withdraw($amount);
    abstract protected function deposit($amount);

    protected function getBalance()
    {
        return $this->account_balance;
    }

    protected function setBalance($amt)
    {
        $this->account_balance = $amt;
    }

}

class SavingsAccount extends BankAccount
{

    public function withdraw($amount)
    {
        if ($this->getBalance() > $amount) {
            $new_balance = $this->getBalance() - $amount;
            $this->setBalance($new_balance);
            echo "Withdraw Amount - $amount, Total Balance - ", $this->getBalance();
        } else {
            echo "Insufficient Balance";
        }
    }

    public function deposit($amount)
    {
        $new_balance = $this->getBalance() + $amount;
        $this->setBalance($new_balance);
        echo "Deposited Amount - $amount, Total Balance - ", $this->getBalance();
    }
}

$obj = new SavingsAccount(20000);
$obj->withdraw(200);
$obj->deposit(500);

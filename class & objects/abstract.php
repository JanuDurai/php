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


?>
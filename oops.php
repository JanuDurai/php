<?php

// Simple Class creation

class firstClass
{
    public $var = "properties";

    public function displayVar()
    {
        echo $this->var, "\n";
    }

    public string $name { set => trim($value); }

}
// object creation
$object = new firstClass();
$object->var = "variable value changed through object";
$object->displayVar();

class SimpleClass
{
    function displayVar()
    {
        echo "Parent class\n";
    }
}

class ExtendClass extends SimpleClass
{
    function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}

$extendedClassObject = new ExtendClass();
$extendedClassObject->displayVar();


// Constructors and destructors
class User
{
    function __construct($name)
    {
        $this->name = $name;
        echo $this->name, "\n";
    }

    function __destruct()
    {
        echo 'Class is destroyed', "\n";
    }
}

$userObject = new User("JAnu");

// static keyword

class Counter
{
    static $count = 0;
    static function inc()
    {
        self::$count++;
        echo "counter is ", self::$count, "\n";

    }

}

$counter = new Counter();

$counter->inc();

// ananymous class

$ananymous_class_obj = new class {
    public function hi(): void
    {
        echo "Hello Ananymous Class", "\n";
    }
}

// object clone

$counter_clone = clone $counter;


    ?>
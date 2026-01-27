<?php

// Simple Class creation

class firstClass
{
    public $var = "properties";

    public function displayVar()
    {
        echo $this->var, "\n";
    }
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
    public $name;
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
};

// object clone
$counter_clone = clone $counter;
?>

<?php
// class creation

class Person
{
    public $name;
    public $age;
    public readonly string $dept; // readonly property
    // constructor

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->dept = "Dev";
        // $this->dept = 12345; Throws error
    }

    // method
    public function displayInfo()
    {
        // $this->dept = "TEst"; can't be modified in its own func
        echo "Name: ", $this->name, "\n", "Age: ", $this->age, "Dept: ", $this->dept,"\n";
    }
}

// Creating instance

$first_person = new Person("Janu", 23);

$first_person->displayInfo();

echo "Readonly property in class person is ", $first_person->dept,"\n";

// $first_person->dept = "Dynamic";  can't change readonly property.

// Creating another instance with another input name

$second_person = new Person("Shree", 23);

$second_person->age = 10;

$second_person->displayInfo();

// Person::displayInfo(); non static method can't be called statically. 
// $second_person::displayInfo(); Error

// $second_person->dept = "EEE"; //can add dynamic properties

// readonly class

readonly class Foo
{
    //   public $name; Error. Readonly must except the type of a variable
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$foo_object = new Foo("Janu");
echo "Read only class variable name ", $foo_object->name, "\n";
var_dump(($foo_object))
// $foo_object->name = "Modify Name"; Readonly class property value can't be changed.
// $foo_object->add_prop = "Dynamic property"; Dynamic property can't be created in readonly class. 


?>
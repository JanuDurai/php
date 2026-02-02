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
    $object      = new firstClass();
    $object->var = "variable value changed through object";
    $object->displayVar();

    class SimpleClass
    {
    public function displayVar()
    {
        echo "Parent class\n";
    }
    }

    class ExtendClass extends SimpleClass
    {
    public function displayVar()
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
    public function __construct($name)
    {
        $this->name = $name;
        echo $this->name, "\n";
    }

    public function __destruct()
    {
        echo 'Class is destroyed', "\n";
    }
    }

    $userObject = new User("JAnu");

    // static keyword

    class Counter
    {
    static $count = 0;
    public static function inc()
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
        $this->age  = $age;
        $this->dept = "Dev";
        // $this->dept = 12345; Throws error
    }

    // method
    public function displayInfo()
    {
        // $this->dept = "TEst"; can't be modified in its own func
        echo "Name: ", $this->name, "\n", "Age: ", $this->age, "Dept: ", $this->dept, "\n";
    }
    }

    // Creating instance

    $first_person = new Person("Janu", 23);

    $first_person->displayInfo();

    echo "Readonly property in class person is ", $first_person->dept, "\n";

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
    var_dump(($foo_object));
    // $foo_object->name = "Modify Name"; Readonly class property value can't be changed.
    // $foo_object->add_prop = "Dynamic property"; Dynamic property can't be created in readonly class.

    // Abstract class
    abstract class Shape
    {
    abstract public function area();
    }

    class Square extends Shape
    {
    public $a;
    public function area()
    {
        return $this->a * $this->a;
    }
    }

    // final class

    final class Bank
    {

    }
    // class SBI extends Bank
    // {

    // }

    // final method

    class Test
    {
    final public function run()
    {
    }
    }

    // const

    class Math
    {
    const PI = 3.14;
    }

    echo Math::PI;

    // traits

    trait TraitA
    {
    public $trait_var = "Say";
    public function sayHello()
    {
        echo "Hello";
    }
    }

    trait TraitB
    {
    public function sayHi()
    {
        echo "Hi";
    }
    }

    class Greet
    {
    use TraitA, TraitB;

    public function greetMethod()
    {
        echo $this->trait_var;
        echo $this->sayHello(), "\n";
        echo $this->sayHi(), "\n";

    }
    }

    $greet_obj = new Greet();
    $greet_obj->greetMethod();
    $greet_obj->sayHello();

    // overloading

    class TestOverloading
    {
    public function __call($name, $args)
    {
        echo "Method $name called";
    }
    }
    $obj = new TestOverloading();
    $obj->add(1, 2);

    // interface

    interface Payment
    {
    // public $method; interface does not have properties
    public function pay();
    }
    class GPay implements Payment
    {
    public function pay()
    {
        echo "Paid using GPay";
    }
    }

    $payment_obj = new GPay();
    $payment_obj->pay();

    // static
    class CounterStatic
    {
    public static $count = 0;

    public static function inc()
    {
        echo "Static counter is ", self::$count;

        self::$count++;
    }
    }

    CounterStatic::inc();

    // interface

    interface Flyable
    {
    public function fly();
    }

    interface Swimmable
    {
    public function swim();
    // public function eat(); a  class which follow interface must have all the methods dec in interface
    }

    class Duck implements Flyable, Swimmable
    {
    public function fly()
    {
        echo "Duck flying";
    }

    public function swim()
    {
        echo "Duck swimming";
    }
    }

    // abstract

    abstract class Animal
    {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function sound();

    public function eat()
    {
        echo "Eating...";
    }
    }

    class Dog extends Animal
    {
    public function sound()
    {
        echo "Bark";
    }
    }

    // polymorphism

    interface PaymentGateway
    {
    public function pay(float $amount): string;
    }

    class Paypal implements PaymentGateway
    {
    public function pay(float $amount): string
    {
        return "Paid $amount using Paypal";
    }
    }

    class Stripe implements PaymentGateway
    {
    public function pay(float $amount): string
    {
        return "Paid $amount using Stripe";
    }
    }

    function processPayment(PaymentGateway $gateway)
    {
    echo $gateway->pay(500);
    }

    processPayment(new Paypal());
    processPayment(new Stripe());

?>
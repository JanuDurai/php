<?php

// Simple Class creation

class firstClass
{
    public $var = "properties";

    public function displayVar()
    {
        echo $this->var,"\n";
    }
}
// object creation
$object = new firstClass();
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



?>
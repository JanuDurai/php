<?php

// factorial

function factorial($num)
{
    if ($num === 1) {
        return 1;
    }

    return $num * factorial($num - 1);
}

echo factorial(5);

// default params

function orderFood($order = "Coffee")
{
    echo "Ordered Food is ", $order, "\n";
}
orderFood("Meals");
orderFood();

// non scalar types

function makingCoffee($types = ["Cappuccino"], $hasCoffeeMaker = null)
{
    $device = is_null($hasCoffeeMaker) ? "hands" : "Coffee Maker";
    echo join(',', $types), " made by ", $device, "\n";
}

makingCoffee();
makingCoffee(['Coffee', 'Cappuccino'], true);
makingCoffee(['Coffee', 'Cappuccino'], true);

// passing obj as default parameter

class defaultCoffeeMaker
{
    public function makeCoffee()
    {
        echo "default coffee maker", "\n";

    }
}

class fancyCoffeeMaker
{
    public function makeCoffee()
    {
        echo "fancy coffee maker", "\n";
    }
}

function makeCoffee($device = new defaultCoffeeMaker())
{
    $device->makeCoffee();
}
makeCoffee();
makeCoffee(new fancyCoffeeMaker());

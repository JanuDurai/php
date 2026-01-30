<?php
class selfClass
{
    public static $x = 10;

    public function selfVar()
    {
        echo self::$x;
    }
}

$obj = new selfClass();
$obj->selfVar();

class Counter
{
    public static $count = 0;
    public $name;
    public function increment()
    {
        self::$count++;
    }
}

$count_obj = new Counter();
$count_obj->increment();
echo "Counter is ",Counter::$count;
$count_obj->name = "Shree";

$data = serialize($count_obj);

$newUser = unserialize($data);

// echo "Serialized data - ", $data, "Unserialised data - ", $newUser;

// cloning

$obj_2 = clone $count_obj;
$obj_2->name = "JAnu";

echo "obj1 name - ", $count_obj->name;
echo "obj2 name - ", $obj_2->name;

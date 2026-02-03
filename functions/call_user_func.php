<?php
function increment(&$number)
{
    ++$number;
}

$number = 0;

call_user_func('increment', $number);

echo "Incremented number is ", $number;

function process($callback, $str)
{
    call_user_func($callback, $str);
}

function printHello($str)
{
    echo $str;
}

process('printHello', 'Hello Callback !!');

// passing class method as callback

class SampleUser
{

    public function greet($name)
    {
        echo 'Hello ', $name;
    }
}

$obj = new SampleUser();
call_user_func([$obj, 'greet'], "Janu");

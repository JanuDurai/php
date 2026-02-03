<?php

function sum()
{
    $nums = func_get_args();
    return array_sum($nums);
}
echo "Sum is ", sum(1, 2, 3, 4, 5);

// spread operators
function findSum(...$num)
{
    return array_sum($nums);
}
echo "Sum is ", sum(1, 2, 3, 4, 5);

// Named parameter

function paramNameMethod($name)
{
    echo "Param name valus is ", $name;
}

paramNameMethod(name : "Janu");

function user($name, $age)
{
    echo "$name is $age years old";
}

user(age: 24, name: "Janu");
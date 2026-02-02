<?php

$a = 10;
$b = $a;

$b = 20;

echo $a; // 10
echo $b; // 20

// pass by value
function increment($num) {
    $num++;
}

$x = 5;
increment($x);
echo $x; // 5

// pass by referrence
function incrementValue(&$num) {
    $num++;
}

$x = 5;
incrementValue($x);
echo $x; // 5
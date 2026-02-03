<?php

$add = fn($num1, $num2) => $num1 + $num2;

echo $add(10, 20),"\n";

// array map
$array = [1, 2, 3, 4, 5];

$squares = array_map(fn($n) => $n * $n, $array);

print_r($squares);


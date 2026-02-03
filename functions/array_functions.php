<?php

$array = [1, 2, 3, 4, 5];

// length
echo count($array), "\n";
echo sizeof($array), "\n";

// find key
echo var_dump(array_key_exists(1, $array));

array_push($array, 10);

print_r($array);

array_pop($array);
print_r($array);

// unshift

array_unshift($array, 10);

print_r($array);

// shift
array_shift($array);

print_r($array);

// slice

print_r(array_slice($array, 1, 4));
// splice
print_r(array_splice($array, 1, 4));

// search

var_dump(in_array(1, $array));
echo array_search(1, $array);

// merge

$a = [1, 2];
$b = [3, 4];

print_r(array_merge($a, $b));

$keys   = ["name", "age"];
$values = ["John", 25];
print_r(array_combine($keys, $values));

// filter

$result = array_filter($a, fn($n) => $n % 2 == 0);

echo "filtered value ";
print_r($result);

// reduce

$sum = array_reduce($array, fn($c, $n) => $c + $n, 0);

echo "reduced sum is ";
print_r($sum);

// sort

$arr = [3, 1, 2];
sort($arr);
print_r($arr);

rsort($arr);
print_r($arr);
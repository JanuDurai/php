<?php
$a_bool = true;
$a_int = 5;
$a_str = "sample str";
// to find variable type.

echo get_debug_type($a_bool), "\n";
echo gettype($a_int), "\n";

if (is_int($a_int)) {
    $a_int += 4;
}

echo "the incremented value is ", $a_int, "\n";

var_dump($a_int);
var_dump($a_str);

if (is_string($a_str)) {
    echo "String is ", $a_str;
}
?>
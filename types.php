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

// int types

$a_int_decimal = 12;
$a_int_octal = 012;
$a_int_hexa = 0x1A;
$a_int_binary = 0b10101;
$a_int_decimal1 = 1_123_1233;

echo "The integer values are ", $a_int_binary, "\n", $a_int_decimal, "\n", $a_int_hexa, "\n", $a_int_decimal1, "\n", $a_int_octal, "\n";

echo "the max number is ", PHP_INT_MAX + 1, "\n";
$a_larger_int = 5000000000000000000000;
var_dump($a_larger_int);


// int division

var_dump((25 / 7));
var_dump((int) (25 / 7));
var_dump(round(25 / 7));

// Converting to float

function convertToInt($value): int
{
    return $value;
}

var_dump((convertToInt((8.7))));
var_dump((convertToInt((8.0))));
var_dump((convertToInt((int) 8.7)));
var_dump((convertToInt(intval(8.7))));

// convert str to int

var_dump(((int) "132"));
var_dump(((int) "dsf"));
var_dump(((int) "1qwe"));
// var_dump(value: round("1qwe")); Error round must expect float or int

echo 'this is a simple string', PHP_EOL;
echo 'this is a simple string', PHP_EOL;

// heredoc --> printing with intendation

echo <<<INDENT
        a
                    b
                c
\n
INDENT;


echo <<<INDENT
    a
 b
      c
\n
INDENT;

// continuing exp aftr ending identifier

$string_heredoc = [<<<END
a
  b
    c
END,
    'd e f'
];

var_dump($string_heredoc);

// nowdoc

$string_nowdoc = <<<'END'
        a       
                b
            c
\n
END;

echo $string_nowdoc;

// concatenation

const string1 = "String 1";
const string2 = "String 2";

echo string1 . string2;

// interpolation

echo "Interpolation ", string1, "\n";

// array

$array_1 = array(
    "index_1" => "value_1",
    "index_2" => "value_2"
);

$array_2 = [
    "foo" => "bar",
    "bar" => "foo",
];

var_dump($array_1, $array_2);

$array_3 = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);
var_dump($array_3);

// array without key 

$array_4 = array("foo", "bar", "hello", "world");
var_dump($array_4);

var_dump($array_3[1]);


// object

class foo
{
    function do_foo()
    {
        echo "inside class method";
    }
}

$object = new foo();
$object->do_foo();

$$a = 'world';

echo "{$$a}";

// arithmetic
$int_1 = 10;
$int_2 = 2;

var_dump($int_1 + $int_2);
var_dump($int_1 - $int_2);
var_dump($int_1 * $int_2);
var_dump($int_1 / $int_2);
var_dump($int_1 % $int_2);
var_dump($int_1 ** $int_2);

// increment & decrement

var_dump($int_1++);
var_dump(++$int_1);
var_dump(--$int_1);
var_dump($int_1--);

$a = 5;

$a += 5;

var_dump(($a));

// referrence by address;

echo "referrence by address";
$b = &$a;

var_dump(($b));

// Bitwise operator
echo "Bitwise";
var_dump($int_1 & $int_2);
var_dump($int_1 | $int_2);
var_dump($int_1 ^ $int_2);
var_dump($int_1 << $int_2);
var_dump($int_1 >> $int_2);

// comparison

echo "Comparison";

var_dump($int_1 == $int_2);
var_dump($int_1 === $int_2);
var_dump($int_1 != $int_2);
var_dump($int_1 !== $int_2);
var_dump($int_1 <> $int_2); //not equal
var_dump($int_1 < $int_2);
var_dump($int_1 <= $int_2);
var_dump($int_1 > $int_2);
var_dump($int_1 >= $int_2);

$backtick_string = `ls -al`;

echo "<pre>$backtick_string</pre>";

// logical

echo "Logical\n";

var_dump(($int_1 and $int_2));
var_dump(($int_1 or $int_2));
var_dump(($int_1 xor $int_2));
var_dump(($int_1 && $int_2));
var_dump(($int_1 || $int_2));

// Conditional operators

echo "Conditional operators\n";

echo "If \n";

if ($int_1 > $int_2)
    echo "int_ 1 is greater than int_2\n";

echo "If else \n";

if ($int_1 > $int_2) {
    echo "int_ 1 is greater than int_2\n";
} else {
    echo "int_ 1 is greater than int_2\n";
}

echo "else if \n";

if ($int_1 > $int_2) {
    echo "int_ 1 is greater than int_2\n";
} else if ($int_1 === $int_2) {
    echo "int_ 1 is equal to int_2\n";
} else {
    echo "int_ 1 is less than int_2\n";

}

echo "sum using while loop\n";

$number = 0;
$sum = 0;
// approach 1

// while ($number <= 10) {
//     $sum += $number;
//     $number++;
// }

// approach 2

while ($number <= 10):
    $sum += $number;
    $number++;
endwhile;

echo "Sum of first 10 numbers using while loop ", $sum, "\n";

$sum = 0;
$number = 0;
do {
    $sum += $number;
    $number++;
} while ($number <= 10);


echo "Sum of first 10 numbers using do while loop ", $sum, "\n";

echo "for loop to find sum\n";
$sum = 0;

for ($i = 0; $i <= 10; $i++) {
    $sum += $i;
}

echo "Sum of first 10 numbers using for loop ", $sum, "\n";

echo "ForEach\n";

$array = [1, 2, 3, 17];

foreach ($array as $value) {
    echo "Current element of \$array: $value.\n";
}

echo "match \n";

$food = "cake";
$return_value = match ($food) {
    'cake' => 'value is cake',
    'apple' => 'value is apple'
};

echo "match result is ", var_dump(($return_value)), "\n";

echo "Goto\n";

goto a;
echo "first statment";

a:
echo "goto statement";

?>





<?php echo "Alternative syntax for if" ?>; <?php if (10 > 2): ?> "10 is greater" <?php endif; ?>;
<?php echo "else if" ?> <?php

    $a = 100;

    if ($a == 100):
        echo "a equals to 100";
        echo "\n";
    elseif ($a == 200):
        echo "a equals to 200";
        echo "\n";
    else:
        echo "a is neither 100 nor 200";
        echo "\n";
    endif;
    ?> <?php echo "switch case" ?>;
<?php switch ($a) {
    case 100:
        echo "a is 100";
        break;
    case 200:
        echo "a is 200";
        break;
    default:
        echo "a is neither 100 nor 200";
}
?>
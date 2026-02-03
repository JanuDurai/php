<?php

$numeric_string = "42";
$integer        = 42;

echo "Check the numeric string has integer ", ctype_digit($numeric_string), "\n";
echo "Check the integer ", ctype_digit($integer), "\n"; // int 42 takes equivallent ascii value '*' as this is str

// alphanum

$string = "abc1234";

echo "String contains either str or digit ", ctype_alnum($string), "\n";

// alpha

$string = "asdf";

echo "String contains str ", ctype_alpha($string), "\n";

// control char

$string = "\n\t\r";

echo "String contains control char ", ctype_cntrl($string), "\n";

// digit

echo "String contains digit ", ctype_digit($numeric_string), "\n";
echo "String contains digit ", ctype_digit($integer), "\n";

// graph

$string = "asdf\n\r\t";
echo "String has printable char ", ctype_graph($string), "\n";

$string = "asdf@#$345./";
echo "String has printable char ", ctype_graph($string), "\n";

$string = "  ";
echo "String has printable char ", ctype_graph($string), "\n";

// lowercase

$string = "asdf";
echo "String has lowercase ", ctype_lower($string), "\n";

// printable

$string = "asd#: 23";

echo "String has printable char ", ctype_print($string), "\n";

$string = "asd#: 23\t\n\r";

echo "String has printable char ", ctype_print($string), "\n";

// punc

$string="(,.;):";

echo "String has punctuation ", ctype_punct($string), "\n";

// space

$string = "\n\t\r";

echo "String has space ", ctype_space($string), "\n";

// uppercase

$string = "SDFGH";
echo "String has uppercase ", ctype_upper($string), "\n";

// hexadecimal

$string = "AEF12345";
echo "String has hexadecimal ", ctype_xdigit($string), "\n";

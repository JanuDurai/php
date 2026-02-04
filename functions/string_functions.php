<?php
$str = "Hello PHP";
echo strlen($str), "\n";
echo strtoupper($str), "\n";
echo strtolower($str), "\n";
echo ucfirst($str), "\n";
echo ucwords("hello php"), "\n";
echo trim("    trim spaces    "),"\n";
echo ltrim("   trim left spaces   "),"\n";
echo rtrim("   trim left spaces   "),"\n";
echo substr("Hello!! this is first project in php", 5,10),"\n";
echo strpos("Hello World!!", "World"),"\n";
echo str_replace("Janu", "Shree","I am Janu"),"\n";
echo strcmp("php","php"),"\n";
echo strcmp("php","Php"),"\n";

$str = "apple,banana,orange";
$arr = explode(",", $str);

print_r($arr);

$array = ["apple","banana","orange"];
$implode_arr = implode(",",$array);

print_r($implode_arr);
echo "\n";

echo strrev("Janu");


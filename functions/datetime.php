<?php
echo date("Y-m-d");
echo date("Y-m-d H:i:s"),"\n";

// default time zone set

date_default_timezone_set("Asia/Kolkata");
echo date("Y-m-d H:i:s"),"\n";

// time

echo time(),"\n";

// timestamp to date

$timestamp = time();
echo date("Y-m-d H:i:s", $timestamp);

// date,day.month
echo date("l"); // Monday
echo date("F"); // February
echo date("Y"); // 2026

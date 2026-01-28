<?php
require 'Admin/user.php';
require 'Customer/user.php';

$adminUser = new Admin\user();
$customerUser = new Customer\user();

echo $adminUser->getName();      // Admin User
echo $customerUser->getName();   // Customer User
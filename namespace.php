<?php
require 'Admin/user.php';
require 'Customer/user.php';

// use Admin\user;
// user Customer
$adminUser = new Admin\user();
$customerUser = new Customer\user();

echo $adminUser->getName();      // Admin User
echo $customerUser->getName();   // Customer User
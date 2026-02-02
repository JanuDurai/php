<?php
require 'Admin/user.php';
require 'Customer/user.php';

// $adminUser = new Admin\user();
// $customerUser = new Customer\user();

use Admin\User as AdminUser;
use Customer\User as CustomerUser;

$adminUser = new AdminUser();

$customerUser = new CustomerUser();

echo $adminUser->getName();    // Admin User
echo $customerUser->getName(); // Customer User

use src\app\service\subNameSpaceClass;

$sub_namespace = new src\app\service\subNameSpaceClass();

$sub_namespace->printlog();

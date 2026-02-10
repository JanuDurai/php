<?php
session_start();
$_SESSION['user'] = 'Janu';

echo $_SESSION['user'];

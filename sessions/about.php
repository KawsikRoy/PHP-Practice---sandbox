<?php

session_start();

echo $_SESSION['username'];

session_destroy();
$_SESSION = [];

print_r($_SESSION);







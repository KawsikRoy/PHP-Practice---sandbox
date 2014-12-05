<?php 
session_start();

session_destroy();
$_SESSION = array();
// delete the cookie. (Next lession)
header('Location: login.php');


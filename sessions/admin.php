<?php

include 'functions.php';

session_start();

if ( !is_logged_in() ) {
	header('location: login.php');
	die();
}


// is_logged_in();

?>
<!doctype html>
<html>
<head>
	<title></title>
	<style> a {width: 100%;background-color: #d1d1d1;border: 2px solid gray;text-align: center;display: block;line-height: 50px;text-decoration: none;font-size: 20px;font-family: Georgia;}</style>
</head>

<body>
	<h1>Hello, <?php echo $_SESSION['username']; ?></h1>
	<a href="logout.php">Logout</a>
</body>
</html>


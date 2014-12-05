<?php
session_start();
	if ( !isset($_SESSION['username']) ) {
	header('Location: login.php');
	die();
}
?>
<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['username']; ?></h1>
</body>
</html>


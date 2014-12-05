<?php

session_start();

define('USERNAME', 'Koushik Roy');
define('PASSWORD', '5678');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// get their values
	$username = $_POST['username'];
	$password = $_POST['password'];

	// validate that against the records
	if ( $username === USERNAME && $password === PASSWORD ) {
		// credentials are correct

		// login + set the session
		$_SESSION['username'] = $username;
		header("Location: admin.php");
	} else {
	$status = "Incorrect login credentials.";
	}
}

// if ( isset($_POST['LoginForm'])) {
// 	echo 'posted';
// }

?>


<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
<div style="background-color:gray; border: 1px solid gray;">
	<h1>Login</h1>
	<form action="login.php" method="post">
		<ul>
			<li>
				<label for="username">Username:</label>
				<input type="text" name="username">
			</li>
			<li>
				<label for="password">Password:</label>
				<input type="text" name="password">
			</li>
			<li>
				<input type="submit" value="Login" name="LoginForm">
			</li>
		</ul>
		<?php if ( isset($status) ) : ?>
		<p><?= $status; ?></p>
		<?php endif; ?>
	</form>
</div>
</body>
</html>
<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Super Globals Head</h1>
	<!-- <?php echo "$name"; ?> -->

	<?php echo htmlspecialchars($_GET['name']); ?>
			<!-- output is      :: Koushik
			     if link-end is : .../about.php?name=Koushik -->

</body>
</html>
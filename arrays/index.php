<?php
$months = array('january', 'february', 'march', 'april', 'may');
var_dump($months)
?>

<?php
$months = array('january', 'february', 'march', 'april', 'may');
echo $months[4];
?>

<?php
// $tuts_sites = array('nettuts+', 'psdtuts+', 'htmltuts+', 'phptuts+', 'csstuts+', 'pythontuts+');
// print_r($tuts_sites);

// $tuts_sites = ['nettuts+', 'psdtuts+', 'htmltuts+', 'phptuts+', 'csstuts+', 'pythontuts+'];

$tuts_sites = array(
	'nettuts' => 'http://net.tutsplus.com',
	'psdtuts' => 'http://net.tutsplus.com',
	'wptuts' => 'http://wp.tutsplus.com',
);


?>




<!doctype heml>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<h1>Arrays</h1>
	<br><hr><br>
	<h1>Tuts+ Sites</h1>
	<ul>
		<?php  
		// foreach ($tuts_sites as $site) {
		// 	echo "<li>$site</li>";
		// }

		// foreach ($tuts_sites as $name => $url) {
		// 	echo "<li><a href='$url'>" . ucwords($name) . "+</a></li>";
		// }

		foreach ($tuts_sites as $name => $url) : ?>
			<li>
				<a href="<?= "$url"; ?>"><?= $name; ?></a>
			</li>
		<?php endforeach ?>	
	</ul>

	
</body>
</html>

<?php 

// $arr = ['AAA', 'BBB', 'CCC', 'DDD', 'EEE', 'FFF', 'GGG'];
$arr = array(
	'ceo'           => 'Koushik',
	'manager'       => 'Tash',
	'instrustor'    => 'Mohon'
);

// foreach ($arr as $name) {
// 	echo $name;
// }

foreach ($arr as $title => $name) {
	echo "<li><strong>$title</strong> - $name</li>";
}

?>
<?php 

$arr = array('Fruit', 'Mango', 'Sweet', 'Juicy'); 

// foreach ($arr as $name) {
// 	echo $name;
// }

// $arr = array(
// 	'Father' 	=>	'Abba',
// 	'Mother' 	=>	'Amma',
// 	'Sister' 	=>	'Bon',
// 	'Brother' 	=>	'Vai'
// );

// foreach ($arr as $title => $name) {
// 	echo  "<li><b>$title</b> - $name</li>";
// }

// for ( $i=0; $i < count($arr); $i++ ) { 
// 	echo "<li>$arr[$i]</li>";
// }  


// ***********************************************************


// for ($i=0; $i < 4; $i++) {
//       echo "$i";
// }

// In this code of PHP :

// How PHP read this code for the first time ?
// for the first time the result should be 1 2 3 .
// because 0 + 1 = 1.
// But the result is 0 1 2 3, why ? How ?
// I know that number start from 0 , 1 , 2 , 3 , 4 .......
// I actually can not usderstand that how PHP read this code for the first time ?

// again for this code ::

// for ($i=1; $i < 4; $i++) {
//       echo "$i";
// }

// here $i = 1 , so the result should be 2 3 .
// because 1 + 1 = 2.
// But the result is 1 2 3, why ? How ?


// *******************************************************

// for the first time when it read $i=1 ,
// it fulfil the condition and so it prints ,
// then it is not reading $i < 4 ; $i++ .
// is that it ?
// and from the second time it reading those and continuing ,
// And  it will NOT read $i++, if $i < 4 succeed .

// ********************************************************

$i = 0;
while ($i < 2) {
	echo "<li>$arr[$i]</li>";
}


?>

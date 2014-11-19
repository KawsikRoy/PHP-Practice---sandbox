<?php
/*
function say_hello()	// () means this function espects some value provided from the outside
*/


/*
function say_hello() {
						// here we execute our code
}
*/


/*
function say_hello() {
	return "Hi, there";	    	// generally for function we are going to return something
}
*/


/*
function say_hello() {
	return "Hi, there";	
}
say_hello(); 						// output 	:: 	(nothing)
*/


/*
function say_hello() {
	return "Hi, there";	
}
echo say_hello(); 					// output 	:: 	Hi, there
*/


/*
function say_hello() {
	return "Hi, there";	
}
$greeting = say_hello();
echo $greeting;						// output 	:: 	Hi, there
*/


/*
function say_hello($name) {
	return "Hi, there $name";	
}
echo say_hello('Koushik'); 			// output 	:: 	Hi, there Koushik
*/


/*
function say_hello($name) {
	return "Hi, there $name";	
}
echo say_hello(); 				// 	output 	:: 	(error)
								// 	because , the function expected something
								// 	but when it was called without passing any value
								// 	it did not find that value 
								// 	so there is an error
*/


/*
function say_hello($name = 'Howdy') {
	return "Hi, there $name.";	
}
echo say_hello(); 				// 	output 	:: 	Hi, there Howdy.
								// 	because , the function expected something
								// 	but when it was called without passing any value
								// 	it did not find that value but only the default value
*/


/*
function say_hello($name = 'Howdy') {
	return "Hi, there $name.";	
}
echo say_hello('Koushik'); 				// 	output 	:: 	Hi, there Koushik.
*/







/*
$arr = array(
	'name'			=>	'Koushik',
	'age'			=>	22,
	'occupation' 	=>	'teacher'
);
print_r ($arr);	
		// 	output 	:: 	Array ( [name] => Koushik [age] => 22 [occupation] => teacher ) 
*/


/*
$arr = array(
	'name'			=>	'Koushik',
	'age'			=>	22,
	'occupation' 	=>	'teacher'
);
echo "<pre>";
print_r ($arr);	
echo "</pre>";
			// 	output 	:: 	Array
						// 	(
						// 	    [name] => Koushik
						// 	    [age] => 22
						// 	    [occupation] => teacher
						// 	)
*/


/*
$arr = array(
	'name'			=>	'Koushik',
	'age'			=>	22,
	'occupation' 	=>	'teacher'
)
echo "<pre>";
print_r ($arr);	
echo "</pre>";
			// 	output 	:: 	Array
						// 	(
						// 	    [name] => Koushik
						// 	    [age] => 22
						// 	    [occupation] => teacher
						// 	)
*/




/* ************************************************************************** */

//	//	//	//	//	//	//	//	//	// 	reusable function

/*
		function pp($value) {
			echo "<pre>";
			print_r ($value);	
			echo "</pre>";
		}

		$arr = array( 'name' => 'Koushik', 'age' => 22, 'occupation' => 'teacher' );

		pp($arr);
*/

// 		// 		output ::
// 						// 		Array
// 						// 		(
// 						// 		    [name] => Koushik
// 						// 		    [age] => 22
// 						// 		    [occupation] => teacher
// 						// 		)
/* ************************************************************************** */



/*

function array_pluck ( $arr_var ){ 		// 	from the calling section, get the $people_var
										// 	$people_var refers to an array
										// 	and from this array get the arrays  
										// 	and now these every arrays are $arr_var

	// // // $ret_var = array();

	foreach ( $arr_var as $item_var ) {	// 	now every $arr_var is $item_var
		$ret_var[] = $item_var['age']; 	// 	now the value of 'age' from every $item_var is $ret_var
	}

	print_r ( $ret_var ); 				// 	take that $ret_var and print it out

}

$people_var = array(
	array( 'name' => 'Koushik', 'age' => 22, 'occupation' => 'Web Developer' ),
	array( 'name' => 'Jenifar', 'age' => 20, 'occupation' => 'SEO' ),
	array( 'name' => 'Roberto', 'age' => 30, 'occupation' => 'Teacher' )
);
			echo "<pre>";
array_pluck( $people_var );
			echo "</pre>";

*/



/*

function array_pluck ($toPluck, $arr_var ){ 
		//				// 	from the calling section, get the $people_var
		//				// 	$people_var refers to an array
		//				// 	and from this array get the arrays  
		//				// 	and now these every arrays are $arr_var 
		//		// 	and 
		//				// 	from the calling section, get the 'age' 
		//				// 	there are many 'age' in same location in an array
		//				// 	and now get all 'age' from the same location 
		//				// 	and now these every 'age' are $toPluck

//		// 	$ret_var = array();
//		// 	I can't understand ,
// 		// 	Is it necessery to combine all $ret_var into an array 

	foreach ( $arr_var as $item_var ) {		// 	now every $arr_var is $item_var
		$ret_var[] = $item_var[$toPluck]; 	// 	now the value of $toPluck from every $item_var is $ret_var
	}

	print_r ( $ret_var ); 					// 	take that $ret_var and print it out

}

$people_var = array(
	array( 'name' => 'Koushik', 'age' => 22, 'occupation' => 'Web Developer' ),
	array( 'name' => 'Jenifar', 'age' => 20, 'occupation' => 'SEO' ),
	array( 'name' => 'Roberto', 'age' => 30, 'occupation' => 'Teacher' )
);
			echo "<pre>";
array_pluck('age', $people_var); 			// 	array_pluck function will work with $people_var and 'age'
			echo "</pre>";				


		//			 OUTPUT

		//			Array
		//			(
		//			    [0] => 22
		//			    [1] => 20
		//			    [2] => 30
		//			)

		//			

*/




function array_pluck($toPluck, $gggg) {

	// 	$ret_var = array(); 

	foreach ($gggg as $item) {
		$ret[] = $item[$toPluck];
	}
	print_r($ret);
}
$students = array(
	array('name' => 'Koushik', 'age' => 22, 'interest' => 'Html'),
	array('name' => 'Sumanta', 'age' => 36, 'interest' => 'Teaching'),
	array('name' => 'Robarto', 'age' => 25, 'interest' => 'Design'),
	array('name' => 'Angeloa', 'age' => 31, 'interest' => 'Cooking'),
	array('name' => 'Marthoa', 'age' => 30, 'interest' => 'WebDev'),
	array('name' => 'Agethan', 'age' => 27, 'interest' => 'Python'),
	array('name' => 'Jonathn', 'age' => 24, 'interest' => 'Wordpress'),
	array('name' => 'Jackass', 'age' => 29, 'interest' => 'CSS')
);
			echo "<pre>";
array_pluck('age', $students);
			echo "</pre>";














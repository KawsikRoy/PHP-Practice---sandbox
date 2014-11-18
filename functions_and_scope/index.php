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





function array_pluck( $toPluck, $arr ){

}

$people = array(
	array( 'name' => 'Koushik', 'age' => 22, 'occupation' => 'Web Developer' ),
	array( 'name' => 'Jenifar', 'age' => 20, 'occupation' => 'SEO' ),
	array( 'name' => 'Roberto', 'age' => 30, 'occupation' => 'Teacher' )
);

array_pluck('name', $people);































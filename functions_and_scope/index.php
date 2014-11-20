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





/*
function array_pluck($toPluck, $arr) {
		// $ret = array(); 
	foreach ($arr as $item) {
		$ret[] = $item[$toPluck];
	}
	return $ret;
	// print_r($ret);
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
$plucked = array_pluck('interest', $students);
			echo "<pre>";
print_r($plucked);
			echo "</pre>";

*/



/*
function array_pluck($toPluck, $arr) {
	// $ret = array();
	foreach ($arr as $item) {
		$ret[] = $item[$toPluck];
	}
	print_r($ret);
}
$meal_routine = array(
	array('day' => 'Saturday',	 'morning' => 7.30, 'noon' => 1.30, 'night' => 10.00, 'sleep' => 11.00),
	array('day' => 'Sunday',	 'morning' => 7.00, 'noon' => 1.00, 'night' => 10.00, 'sleep' => 11.00),
	array('day' => 'Monday',	 'morning' => 8.00, 'noon' => 2.30, 'night' => 10.00, 'sleep' => 11.00),
	array('day' => 'Tuesday',	 'morning' => 7.45, 'noon' => 1.40, 'night' => 10.00, 'sleep' => 11.00),
	array('day' => 'Wednesday',	 'morning' => 9.00, 'noon' => 2.30, 'night' => 10.00, 'sleep' => 11.00),
	array('day' => 'Thursday',	 'morning' => 8.15, 'noon' => 3.00, 'night' => 10.00, 'sleep' => 11.00),
	array('day' => 'Friday',	 'morning' => 7.20, 'noon' => 1.00, 'night' => 10.00, 'sleep' => 11.00)
);
				echo "<pre>";
array_pluck('morning', $meal_routine);
				echo "</pre>";
*/


/* ****************************************************************** */
/* ****************************************************************** */

/* ************************** */
/*
function array_pluck($toPluck, $arr) {
	return array_map(function($item) {
		echo "<pre>";
	print_r($item);
		echo "</pre>";
	}, $arr);
}
$students = array(
	array('name' => 'Koushik', 'age' => 22, 'interest' => 'Html'),		// = $item & print it
	array('name' => 'Sumanta', 'age' => 36, 'interest' => 'Teaching'),	// = $item & print it
	array('name' => 'Robarto', 'age' => 25, 'interest' => 'Design'),	// = $item & print it
	array('name' => 'Angeloa', 'age' => 31, 'interest' => 'Cooking'),	// = $item & print it
	array('name' => 'Marthoa', 'age' => 30, 'interest' => 'WebDev'),	// = $item & print it
	array('name' => 'Agethan', 'age' => 27, 'interest' => 'Python'),	// = $item & print it
	array('name' => 'Jonathn', 'age' => 24, 'interest' => 'Wordpress'),	// = $item & print it
	array('name' => 'Jackass', 'age' => 29, 'interest' => 'CSS')		// = $item & print it
);
array_pluck('interest', $students);
*/
		/*
		output 	::
			Array
			(
			    [name] => Koushik
			    [age] => 22
			    [interest] => Html
			)

			Array
			(
			    [name] => Sumanta
			    [age] => 36
			    [interest] => Teaching
			)

			Array
			(
			    [name] => Robarto
			    [age] => 25
			    [interest] => Design
			)

			Array
			(
			    [name] => Angeloa
			    [age] => 31
			    [interest] => Cooking
			)

			Array
			(
			    [name] => Marthoa
			    [age] => 30
			    [interest] => WebDev
			)

			Array
			(
			    [name] => Agethan
			    [age] => 27
			    [interest] => Python
			)

			Array
			(
			    [name] => Jonathn
			    [age] => 24
			    [interest] => Wordpress
			)

			Array
			(
			    [name] => Jackass
			    [age] => 29
			    [interest] => CSS
			)
		*/
/* ************************** */


/* ************************** */
/*
function array_pluck($toPluck, $arr) {
	return array_map(function($item) {
		return 'Dinosoure';
	}, $arr);
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
$plucked = array_pluck('interest', $students);
echo "<pre>";
print_r($plucked);
echo "</pre>";
*/
		/*
		output 	::
			Array
			(
			    [0] => Dinosoure
			    [1] => Dinosoure
			    [2] => Dinosoure
			    [3] => Dinosoure
			    [4] => Dinosoure
			    [5] => Dinosoure
			    [6] => Dinosoure
			    [7] => Dinosoure
			)
		*/
/* ************************** */


/* ************************** */
/*
function array_pluck($toPluck, $arr) {
	$ret = array_map(function($item) {
		return 'Dinosoure';
	}, $arr);
		echo "<pre>";
	print_r($ret);
		echo "</pre>";
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
array_pluck('interest', $students);
*/
		/*
		output 	::
			Array
			(
			    [0] => Dinosoure
			    [1] => Dinosoure
			    [2] => Dinosoure
			    [3] => Dinosoure
			    [4] => Dinosoure
			    [5] => Dinosoure
			    [6] => Dinosoure
			    [7] => Dinosoure
			)
		*/
/* ************************** */


/* ************************** */
/*
function array_pluck($toPluck, $arr) {
	$ret = array_map(function($item) {
		$item['name'] = 'Now it is changed';
		return $item;
	}, $arr);
		echo "<pre>";
	print_r($ret);
		echo "</pre>";
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
array_pluck('interest', $students);
*/
		/*
		output 	::
			Array
			(
			    [0] => Array
			        (
			            [name] => Now it is changed
			            [age] => 22
			            [interest] => Html
			        )

			    [1] => Array
			        (
			            [name] => Now it is changed
			            [age] => 36
			            [interest] => Teaching
			        )

			    [2] => Array
			        (
			            [name] => Now it is changed
			            [age] => 25
			            [interest] => Design
			        )

			    [3] => Array
			        (
			            [name] => Now it is changed
			            [age] => 31
			            [interest] => Cooking
			        )

			    [4] => Array
			        (
			            [name] => Now it is changed
			            [age] => 30
			            [interest] => WebDev
			        )

			    [5] => Array
			        (
			            [name] => Now it is changed
			            [age] => 27
			            [interest] => Python
			        )

			    [6] => Array
			        (
			            [name] => Now it is changed
			            [age] => 24
			            [interest] => Wordpress
			        )

			    [7] => Array
			        (
			            [name] => Now it is changed
			            [age] => 29
			            [interest] => CSS
			        )

			)
		*/
/* ************************** */


/* ************************** */ 
/*
function array_pluck($toPluck, $arr) {
	$ret = array_map(function($item) {
		return $item[$toPluck];
	}, $arr);
		echo "<pre>";
	print_r($ret);
		echo "</pre>";
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
array_pluck('interest', $students);
*/
		/*
		output 	::
			error , because it can not recognise the $toPluck
		*/
/* ************************** */



/* ************************** */
/*
function array_pluck($toPluck, $arr) {
	echo $toPluck;
	$ret = array_map(function($item) {
	//	// return $item[$toPluck];
	}, $arr);
		echo "<pre>";
	print_r($ret);
		echo "</pre>";
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
array_pluck('interest', $students);
*/
		/*
		output 	::
			interest

			Array
			(
			    [0] => 
			    [1] => 
			    [2] => 
			    [3] => 
			    [4] => 
			    [5] => 
			    [6] => 
			    [7] => 
			)

		*/
/*
this is happening because
every function has its own local scope
now we did not create any $toPluck var
for the array-map function
but
we created that for array_pluck function
so this is happening.
but we can create a local version of $toPluck var of the array_pluck function
for the array-map function.
*/
/* ************************** */



/* ************************** */
/*
function array_pluck($toPluck, $arr) {
	$ret = array_map(function($item) use($toPluck) { 	// let the function to use $toPluck var
		return $item[$toPluck];
	}, $arr);
		echo "<pre>";
	print_r($ret);
		echo "</pre>";
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
array_pluck('interest', $students);
*/
		/*
		output 	::
			Array
			(
			    [0] => Html
			    [1] => Teaching
			    [2] => Design
			    [3] => Cooking
			    [4] => WebDev
			    [5] => Python
			    [6] => Wordpress
			    [7] => CSS
			)
		*/
/* ************************** */



/* ************************** */
/*
function array_pluck($toPluck, $arr) {
	return array_map(function($item) use($toPluck) { 
		return $item[$toPluck];
	}, $arr);
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
$plucked = array_pluck('interest', $students);
	echo "<pre>";
print_r($plucked);
	echo "</pre>";
*/
		/*
		output 	::
			Array
			(
			    [0] => Html
			    [1] => Teaching
			    [2] => Design
			    [3] => Cooking
			    [4] => WebDev
			    [5] => Python
			    [6] => Wordpress
			    [7] => CSS
			)
		*/
/* ************************** */



/* ************************** */
function array_pluck($toPluck, $arr) {
	return array_map(function($item) use($toPluck) { 
		return $item[$toPluck];
	}, $arr);
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
$names = array_pluck('name', $students);
foreach ($names as $name) {
  // 	echo "$name";
			/*	output 	::
					KoushikSumantaRobartoAngeloaMarthoaAgethanJonathnJackass
			*/
  // 	echo "$name<br>";
			/*	output 	::
					Koushik
					Sumanta
					Robarto
					Angeloa
					Marthoa
					Agethan
					Jonathn
					Jackass		
			*/
 	echo "So who is the father of that Dinosoure. <br>";
 	echo "Is he $name ?<br>";
 			/* 	output 	::
					So who is the father of that Dinosoure.
					Is he Koushik ?
					So who is the father of that Dinosoure.
					Is he Sumanta ?
					So who is the father of that Dinosoure.
					Is he Robarto ?
					So who is the father of that Dinosoure.
					Is he Angeloa ?
					So who is the father of that Dinosoure.
					Is he Marthoa ?
					So who is the father of that Dinosoure.
					Is he Agethan ?
					So who is the father of that Dinosoure.
					Is he Jonathn ?
					So who is the father of that Dinosoure.
					Is he Jackass ?
			*/
}
/* ************************** */
/* ****************************************************************** */
/* ****************************************************************** */
/* ****************************************************************** */


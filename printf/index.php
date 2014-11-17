<?php

// $greeting = "my name is Koushik.";
// echo $greeting;


// $name = "Koushik";
// $greeting = "Hello, my name is $name."; // must be double quote " " in here
// echo $greeting;


// $name 	= 	"Koushik";
// $age 	=	22;
// $greeting = "Hello, my name is $name and I am $age years old.";
// echo $greeting;


// $name 	= 	"Koushik";
// $age 	=	22;
// $greeting = "Hello, my name is $name and I am {$_GET['age']} years old.";
// //				// I am not undestanding this {$_GET['age']} // <<<<<<<<< :(
// echo $greeting;


// $name 	= 	"Koushik";
// $age 	=	22;
// printf("My name is %s and I am %d.", $name, $age); 
// 					//	output 	:: 	My name is Koushik and I am 22.


// $name 	= 	"Koushik";
// $age 	=	22;
// $greeting = printf("My name is %s and I am %d.", $name, $age); 
// 					//	output 	:: 	My name is Koushik and I am 22.


// $name 	= 	"Koushik";
// $age 	=	22;
// $greeting = printf("My name is %s and I am %d.", $name, $age); 
// echo $greeting;
// 					//	output 	:: 	My name is Koushik and I am 22.31
// 					// 	here	at last 31 represents the number of characters 


// $name 	= 	"Koushik";
// $age 	=	22;
// $greeting = sprintf("My name is %s and I am %d.", $name, $age);	 	// with sprintf
// echo $greeting;
// 					//	output 	:: 	My name is Koushik and I am 22.
// 					// 	now the function of representing the number of characters has been stopped


// so

	// $name 	= 	"Koushik";
	// $age 	=	22;
	// printf("My name is %s and I am %d.", $name, $age);	 	// with printf and without var $greeting
	// 					// 	without echo $greeting;
	// 					//	output 	:: 	My name is Koushik and I am 22.


	// $name 	= 	"Koushik";
	// $age 	=	22;
	// $greeting = printf("My name is %s and I am %d.", $name, $age);	 	// with printf and with var $greeting
	// 					// 	without echo $greeting;
	// 					//	output 	:: 	My name is Koushik and I am 22.


	// $name 	= 	"Koushik";
	// $age 	=	22;
	// $greeting = sprintf("My name is %s and I am %d.", $name, $age); 		// with sprintf
	// echo $greeting; 	// 	with echo $greeting;
	// 					//	output 	:: 	My name is Koushik and I am 22.







// printf("Today is %s %s, %d", 'November', '7th', '2014');
// 					//	output 	:: 	Today is November 7th, 2014


// $posted = sprintf("This article was posted on %s %s, %d", 'November', '7th', '2014');
// echo $posted;
// 					//	output 	:: 	This article was posted on November 7th, 2014





// sscanf("This article was posted on November 7th, 2014", "%s");
// 				// 	output 	:: 	nothing


// $results = sscanf("This article was posted on November 7th, 2014", "%s");
// print_r($results);
// 				//	output 	:: 	Array ( [0] => This )
// 				// 	ok, now it is creating an array and putting the first word into this array !!


// $results = sscanf("This article was posted on November 7th, 2014", "");
// print_r($results);
// 				//	output 	:: 	Array ()


// $results = sscanf("November 7th, 2014", "%s");
// print_r($results);
// 				//	output 	:: 	Array ( [0] => November ) 


// $results = sscanf("November 7th, 2014", "%s %s");
// print_r($results);
// 				//	output 	:: 	Array ( [0] => November [1] => 7th, ) 
// 				// 	now 2 items here !! but wait there is a comma after 7th>>>,<<< !!!!!!!


// $results = sscanf("November 7th, 2014", "%s %[^,]"); // I don't want a comma , so I should stop just before the comma
// print_r($results);
// 				//	output 	:: 	Array ( [0] => November [1] => 7th ) 
// 				// 	getting rid from comma


// $results = sscanf("November 7th, 2014", "%s %[^,], %d");
// print_r($results);
// 				//	output 	:: 	Array (	[0] => November 
// 							// 			[1] => 7th 
// 							// 			[2] => 2014 ) 



// list($month, $day, $year) = sscanf("November 7th, 2014", "%s %[^,], %d");
// echo $month; 	// 	output 	::	November
// echo $day; 		// 	output 	::	7th
// echo $year;		// 	output 	::	2014


// list($name, $age) = array('Koushik', 22);
// echo $name;		// 	output 	::	Koushik
// echo $age; 		// 	output 	::	22


sscanf("November 7th, 2014", "%s %[^,], %d", $month, $day, $year);
echo $month; 	// 	output 	::	November
echo $day; 		// 	output 	::	7th
echo $year;		// 	output 	::	2014



					/* that's all about 

					printf
					sprintf
					sscanf

					*/ // thanks.














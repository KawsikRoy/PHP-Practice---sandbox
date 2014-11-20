<?php

/* ******************************
$person = array(
	'first'	=> 	'Paramita',
	'last' 	=> 	'Chatarjee',
	'job' 	=> 	'Artiest'
);

var_dump($person);
*/

/* ********************************
class Person {
	public $name;
	public $job;

	public function __construct($name, $job)
	{
		$this->name = $name;
		$this->job = $job;
	}

	public function communicate($style = 'voice')
	{
		return 'communicating with ' . $style;
	}
}

$p = new Person('Robart', 'Developer');

// var_dump($p);

// echo $p->communicate();
echo $p->communicate('telepathy');

*/



/* ******************************
$person = new stdClass;
$person->first 	= 	"Senioritta";
$person->last 	= 	"Margaretta";
$person->job 	= 	"Dance Teacher";

var_dump($person);

echo $person->first . ' ' . $person->last;
*/


/* ******************************
	// class name {
	// 	public function __call()
	// 	{

	// 	}
	// }


$person = new stdClass;
$person->first 	= 	"Senioritta";
$person->last 	= 	"Margaretta";
$person->job 	= 	"Dance Teacher";
$person->communicate = function() {
	return 'communicating';
};

echo $person->communicate();
*/


// echo gettype((int)'5'); 		// this says integer
// echo gettype((string)'5'); 	// this says string
// echo gettype('5'); 			// this says string

/*
$person = array(
	'first' => 'Mac',
	'last' => 'Millan'
);

var_dump($person);

var_dump((object)$person);
*/
		/*	// 	output 	::
					array (size=2)
					  'first' => string 'Mac' (length=3)
					  'last' => string 'Millan' (length=6)

					object(stdClass)[1]
					  public 'first' => string 'Mac' (length=3)
					  public 'last' => string 'Millan' (length=6)
		*/




$person = array(
	'first' => 'Mac',
	'last' => 'Millan'
);

var_dump($person);

echo $person['first'];

$o = (object) $person;

echo $o->first;

		/*	// 	output 	::
					array (size=2)
					  'first' => string 'Mac' (length=3)
					  'last' => string 'Millan' (length=6)

					MacMac
		*/





























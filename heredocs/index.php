<?php


// *********************************
/*
$post = array(
	'author' 		=> 'Koushik Roy',
	'title'			=> 'My super body',
	'body' 			=> 'Here is the live body. Still alive it is!',
	'publishDate' 	=> '30-12-2014'
);

$email = "	<h1>{$post['title']}</h1>
			<p>By: {$post['author']}</p>
			<div>{$post['body']}</div>
			<p>Posted on: <span>{$post['publishDate']}</span></p>
		";

echo $email;
*/




// *********************************
/*
$post = array(
	'author' 		=> 'Koushik Roy',
	'title'			=> 'My super body',
	'body' 			=> 'Here is the live body. Still alive it is! Just Kidding!!',
	'publishDate' 	=> '30-12-2014'
);

$email = 	"<h1>{$post['title']}</h1>";
$email .=	"<p>By: {$post['author']}</p>";
$email .=	"<div>{$post['body']}</div>";
$email .=	"<p>Posted on: <span>{$post['publishDate']}</span></p>";

echo $email;
*/




// *********************************
/*
$post = array(
	'author' 		=> 'Koushik Roy',
	'title'			=> 'My super body',
	'body' 			=> 'Here is the live body. Still alive it is! Just Kidding!!',
	'publishDate' 	=> '30-12-2014'
);

$email = sprintf("
			<h1>%s</h1>
			<p>By: %s</p>
			<div>%s</div>
			<p>Posted on: <span>%s</span></p>
				",
			$post['title'],
			$post['author'],
			$post['body'],
			$post['publishDate']
				);
echo $email;
*/




// *********************************
/*
$post = array(
	'author' 		=> 'Koushik Roy',
	'title'			=> 'My super body',
	'body' 			=> 'Here is the live body. Still alive it is! Just Kidding!!',
	'publishDate' 	=> '30-12-2014'
);

$email = <<<EOT
	<h1>{$post['title']}</h1>
	<p>
		By: {$post['author']}
	</p>
	<div>
		{$post['body']}
	</div>
	<p>
		Posted on: <span>{$post['publishDate']}</span>
	</p>
EOT;

echo $email;
*/





// *********************************
/*
$post = array(
	'author' 		=> 'Koushik Roy',
	'title'			=> 'My super body',
	'body' 			=> 'Here is the live body. Still alive it is! Just Kidding!!',
	'publishDate' 	=> '30-12-2014'
);

extract($post);

echo $author;
*/
	/* output is Koushik Roy
	   because now we have 4 var 
	   they are: $author, $title, $body, $publishDate */





// ***************now*it's*clean****************

$post = array(
	'author' 		=> 'Koushik Roy',
	'title'			=> 'My super body',
	'body' 			=> 'Here is the live body. Still alive it is! Just Kidding!!',
	'publishDate' 	=> '30-12-2014',
	'category'		=> 'Fun-post'
);

extract($post);

$email = <<<ABC
	<h1>$title</h1>
	<p>By: $author within the $category category.</p>
	<div>
		$body
	</div>
	<p>Posted on: <span>$publishDate</span></p>
ABC;

echo $email; 	// COOL... WOW !!!!!!!!!

/* caution ::
  any space on the left of ABC; can cause error
  if ABC; is up at the end of html insted of right there ,
  it also can cause error */


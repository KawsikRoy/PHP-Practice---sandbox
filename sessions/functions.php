<?php

function is_logged_in(){
	return isset($_SESSION['username']);
}

// validate that against the records
function validate_user_creds($username, $password) {
	return ( $username === USERNAME && $password === PASSWORD );
}





// function is_logged_in(){
// 	if ( !isset($_SESSION['username']) ) {
// 		return false;
// 		// header('Location: login.php');
// 		// die();
// 	}

// 	return true;
// }













<?php

// print_r($_POST);

// if ( !empty($_POST) ) {
// 	print_r($_POST);
// }

// echo $_SERVER['REQUEST_METHOD']; // with this 1st time load with GET
                                 // and 2nd time load with POST

// if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
// 	print_r($_POST);
// }

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	// if (mail('koushikroy@yahoo.com', 'New web Message', $_POST['message'])) {
	if (mail('koushikroy@yahoo.com', 'New web Message', htmlspecialchars($_POST['message']))) {
		$status = "Thank you for your message.";
	}

}

?>

<!doctype html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>

<!--
 	<h3>Contact Form</h3>
	<form action="" method="get">
		<ul>
			<li>
				<label for="name">Name:</label>
				<input type="text" name="name">
			</li>

			<li>
				<input type="submit" value="Go!">
			</li>
		</ul>
	</form>
-->

 <div class="container">

  	<h3>Enter your detail in the Contact Form:</h3>

	<form class="form-horizontal" role="form" action="" method="post">

	  <div class="form-group">
	    <label for="inputName3" class="col-sm-2 control-label">Name:</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="inputName3" placeholder="Name" name="name">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="message" class="col-sm-2 control-label">Message:</label>
	    <div class="col-sm-10">
	  	  <textarea class="form-control" rows="1" id="message" placeholder="Say something" name="nassage"></textarea>
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Go</button>
	    </div>
	  </div>

	</form>

</div>


<?php if (isset($status)) echo $status; ?>

<!-- PROBLEM . SHOWING ERROR ON TOP . -->
<!-- PROBLEM . SHOWING ERROR ON TOP . -->
<!-- PROBLEM . SHOWING ERROR ON TOP . -->
<!-- PROBLEM . SHOWING ERROR ON TOP . -->
<!-- PROBLEM . SHOWING ERROR ON TOP . -->
<!-- PROBLEM . SHOWING ERROR ON TOP . -->



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</body>
</html>


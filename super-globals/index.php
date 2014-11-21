<!--
<?php

// var_dump($_GET);
	/* the link is ::
	   	.../index.php?name=Koushik&job=Teacher
	   the output is ::
		   array (size=2)
		  'name' => string 'Koushik' (length=7)
		  'job' => string 'Teacher' (length=7)
	*/



// echo $_GET['name'];
	/* output :: Koushik
	   when link-end is :: .../index.php?name=Koushik
	*/
 


// echo $_GET['job'];
	/* output :: Teacher
	   when link-end is :: .../index.php?job=Teacher
	and output :: Developer
	   when link-end is :: .../index.php?job=Developer
	*/
 
// so depending on what's provided on the link we can get the data
// but need to be careful to use it


?> 
-->


<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
    <h1>Super Globals Head</h1>


    <?php 
   // echo $_GET['job']; 
        /* here output is       :: Teacher,
           if link-end is       :: .../index.php?job=Teacher */
        /* but output could be  :: error, 
           if link-end is       :: .../index.php */
        /* so if is not defined in the link , 
           the 'job' causes an error */



     // if ( isset($_GET['job']) ) {
     // 	echo $_GET['job'];
     // } else {
     // 	echo 'Is not set.';
     // }
        /* here output is       :: Teacher,
           if link-end is       :: .../index.php?job=Teacher */
        /* and if link-end is   :: .../index.php
                                   or job is not defined in the link
           output is            :: Is not set. */




     // if ( isset($_GET['id']) ) {
     // 	echo $_GET['id'];
     // } else {
     // 	echo 'Redirect somewhere.';
     // }
        /* output is      :: Redirect somewhere.
           if link-end is : .../index.php?job=Teacher */

        /* output is      :: 7
           if link-end is : .../index.php?id=7 */

        /* output is      :: 1246464321654
           if link-end is : .../index.php?id=1246464321654 */

        /* output is      :: abcd
           if link-end is : .../index.php?id=abcd */

        /* output is      :: changed and turned into my command
           if link-end is : .../index.php?id=<h1>changed and turned into my command</h1>
           here it printing html also ,
           so the page source code is : <h1>changed and turned into my command</h1> */

        /* '''''''''''''''''THIS IS DANGEROUS''''''''''''''''' */




     // if ( isset($_GET['id']) ) {
     // 	echo htmlspecialchars($_GET['id']);
     // } else {
     // 	echo 'Redirect somewhere.';
     // }
        /* output is      :: <h1>changed and turned into my command</h1> 
           if link-end is : .../index.php?id=<h1>changed and turned into my command</h1> */
        /* *************** much better this *************** */
?>
	
	<p>This is &lt;header> tag</p>    <!-- output :: This is <header> tag -->
                                   <!-- source :: <p>This is &lt;header> tag</p> -->
	
	<p>This is &lt;header&gt; tag</p> <!-- output :: This is <header> tag -->
                                   <!-- source :: <p>This is &lt;header&gt; tag</p> -->
	
	<p>This is <?php echo htmlspecialchars('<header>'); ?> tag</p>
	                               <!-- output :: This is <header> tag -->
                                   <!-- source :: <p>This is &lt;header&gt; tag</p> -->

	<!-- more here :: http://lt.php.net/htmlspecialchars
        The translations performed are:
            (ampersand)    & = &amp;
            (double quote) " = &quot; when ENT_NOQUOTES is not set.
            (single quote) ' = &#039; (or &apos;) only when ENT_QUOTES is set.
            (less than)    < = &lt;
            (greater than) > = &gt; 
      -->


    <a href="about.php?name=Koushik">About</a>
          <!-- after clicking About
	          link of about.php bocoming : .../about.php?name=Koushik -->


	<h2>This is Sub Section</h2>

</body>
</html>
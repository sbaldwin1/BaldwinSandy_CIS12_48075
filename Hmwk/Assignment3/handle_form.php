<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Feedback</title>
<style type= "text/css" title="text/css" media="all"> 
.error {
	font-weight:bold;
	color:#C00;
	}
	</style>
</head>
<body>
<?php # Script 2.2, 2.3 2.4, 2.5 - handle_form.php





// Print the submitted information:
if( !empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])){
	echo "<p>Thank you, <b>{$_POST['name']}</b>, for the following comments:<br />
	<tt>{$_POST['comments']}</tt></p>
	<p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
} else {//MIssing form value.
	echo '<p class="error">Please go back and fill out the form again.</p>';
}



//Validate the name:
if (!empty($_REQUEST['name'])) {
	$name = $_REQUEST['name'];
} else {
	$name = NULL;
	echo '<p class="error">Youforgot to enter your name!</p>';
}

//Validate the email:
if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else {
	$email = NULL;
	echo '<p class="error">Youforgot to enter your email address!</p>';
}

//Validate the comments:
if (!empty($_REQUEST['comments'])) {
	$comments = $_REQUEST['comments'];
} else {
	$comments = NULL;
	echo '<p class="error">Youforgot to enter your comments!</p>';
}

//Validate the gender:
if (isset($_REQUEST['gender'])){
	
	$gender = $_REQUEST['gender'];
	
	if ($gender == 'M') {
	echo '<p><b>Good day, Sir!</b></p>';
} else if ($gender == 'F') {
	echo '<p><b>Good day, Madam!</b></p>';
}else { //unacceptable value.
	$gender = NULL;
	echo '<p class="error">Gender should be either "M" or "F"!</p>';
}
} else { // $_REQUEST['gender'] is not set.
	$gender = NULL;
	echo'<p class="error">You forgot to select your gender</p>';
}

//IF everything is OK, print the messeage:
if ($name && $email && $gender && $comments) {
	echo "<p>Thank you, <b>$name</b>, for the following comments:<br /> 
<tt>$comments</tt></p>
<p>We will reply to you at <i>$email</i>.</p>\n";
} else {//MIssing form value.
	echo '<p class="error">Please go back and fill out the form again.</p>';
}






//Create a shorthand for the form data:
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

//Create the $gender variable:
if (isset($_REQUEST['gender'])) {
	$gender = $_REQUEST['gender'];
} else {
	$gender = NULL;
}

/* Not Used:
$_REQUEST['age']
$_REQUEST['gender']
$_REQUEST['submit']
*/

//Print the submitted information:
echo "<p>Thank you, <b>$name</b>, for the following comments:<br /> 
<tt>$comments</tt></p>
<p>We will reply to you at <i>$email</i>.</p>\n";

//Print a message based upon the Gender value:
if ($gender == 'M') {
	echo '<p><b>Good day, Sir!</b></p>';
} else if ($gender == 'F') {
	echo '<p><b>Good day, Madam!</b></p>';
}else { //No gender selected.
	echo '<p><b>You forgot to enter your gender!</b></p>';
}

?>
</body>
</html>
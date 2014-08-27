<?php

// Include the Autoloader (see "Libraries" for install instructions)
require_once '../../../vendor/autoload.php';
use Mailgun\Mailgun;

// Instantiate the client.
$mgClient = new Mailgun('key-d01b6d0615061c7b4548d2feaa874ea5');
$domain = "sandboxd0f6cb698a59404ab912146e1111eb38.mailgun.org";

//Retrieve form data.
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$name = (isset($_GET['name'])) ? $_GET['name'] : $_POST['name'];
$email = (isset($_GET['email'])) ?$_GET['email'] : $_POST['email'];
$comment = (isset($_GET['comment'])) ?$_GET['comment'] : $_POST['comment'];

//flag to indicate which method it uses. If POST set it to 1

if ($_POST) $post=1;

//Simple server side validation for POST data, of course, you should validate the email
if (!$name) $errors[count($errors)] = 'Please enter your name.';
if (!$email) $errors[count($errors)] = 'Please enter your email.';
if (!$comment) $errors[count($errors)] = 'Please enter your comment.';

$errors = '';

//if the errors array is empty, send the mail
if (!$errors) {

	//recipient - replace your email here
	$to = 'jonbrobinson@gmail.com';
	//sender - from the form
	$from = $name . ' <' . $email . '>';

	//subject and the html message
	$subject = '[Jonbrobinson Comment] ' . $name;
	$message = "Message: " . "\n" . $comment . "\n\n";

	//send the mail
	$result = sendmail($to, $subject, $message, $from);

	//if POST was used, display the message straight away
	if ($_POST) {
		if ($result) echo 'Thank you! We have received your message.' . "<br>" . '<a href="/">Back</a>';
		else echo 'Sorry, unexpected error. Please try again later';

	//else if GET was used, return the boolean value so that
	//ajax script can react accordingly
	//1 means success, 0 means failed
	} else {
		echo $result;
	}

//if the errors array has values
} else {
	//display the errors message
	for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
	echo '<a href="/">Back</a>';
	exit;
}


//Simple mail function with HTML header
function sendmail($to, $subject, $message, $from) {

	$mgClient = new Mailgun('key-d01b6d0615061c7b4548d2feaa874ea5');
	$domain = "sandboxd0f6cb698a59404ab912146e1111eb38.mailgun.org";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";

	// $result = mail($to,$subject,$message,$headers);

	$result = $mgClient->sendMessage($domain, array(
	    'from'    => $from,
	    'to'      => $to,
	    'subject' => $subject,
	    'text'    => $message . $headers
	));

	if ($result) return 1;
	else return 0;
}
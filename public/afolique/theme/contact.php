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
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

//recipient - replace your email here
$to = 'jonbrobinson@gmail.com';
//sender - from the form
$from = $name . ' <' . $email . '>';

//subject and the html message
$subject = 'Message from ' . $name;
$message = 'Name: ' . $name . '<br/><br/>
	       Email: ' . $email . '<br/><br/>
	       Message: ' . nl2br($comment) . '<br/>';

//send the mail
$result = $mgClient->sendMessage($domain, array(
    'from'    => $from,
    'to'      => $to,
    'subject' => 'Jonbrobinson Comment Form',
    'text'    => $comment
));

//if POST was used, display the message straight away
if ($_POST) {
	if ($result) echo 'Thank you! We have received your message.';
	else echo 'Sorry, unexpected error. Please try again later';

//else if GET was used, return the boolean value so that
//ajax script can react accordingly
//1 means success, 0 means failed
} else {
	echo $result;
}

?>
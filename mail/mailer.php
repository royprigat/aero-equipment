<?php


if ($_POST) {
  echo 'problem';
} else {
  echo 'problem';
}


/* Set e-mail recipient */
// $myemail = "royprigat@gmail.com";

// $values = array();
// parse_str($_POST['str'], $values);
// echo $values['name']; //Outputs 'meeting'


/* Check all form inputs using check_input function */
// $name = check_input($_POST['name'], "Enter your name");
// $subject = check_input($_POST['subject'], "Enter a subject");
// $email = check_input($_POST['email']);
// $message = check_input($_POST['message'], "Write your message");

/* If e-mail is not valid show error message */
// if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
// {
// show_error("E-mail address not valid");
// }

/* Let's prepare the message for the e-mail */
// $message = "

// Name: $name
// E-mail: $email
// Subject: $subject

// Message:
// $message

// ";



/* Send the message using mail() function */
// mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
// header('Location: index.html');
// exit();


?>
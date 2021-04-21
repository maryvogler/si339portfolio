<?php $fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $firstname $lastname \n Message: $message";
$recipient = "mvogler@umich.edu";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
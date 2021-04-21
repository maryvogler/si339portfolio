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

<?php
$conn = mysqli_connect("localhost", "root", "test", "blog_samples") or die("Connection Error: " . mysqli_error($conn));
mysqli_query($conn, "INSERT INTO tblcontact (firstname, lastname, email, message) VALUES ('" . $firstname. "', '" . $lastname. "','" . $email. "','" . $message. "')");
$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
$message = "Your contact information is saved successfully";
?>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent ="From: $name \n Message: $message";
$recipient = "chelseymachin@gmail.com";
$subject = "Contact Form Submission";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html'> Return Home</a>";
?>
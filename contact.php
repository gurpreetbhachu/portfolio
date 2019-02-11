<?php

$name = $_POST['name'];
$v_email = $_POST['email'];
$msg = $_POST['message'];

$email_to = 'gsb@rstt.ca';

$email_subject = 'Contact Us Message';

$email_body = "Name: $name\n". 
"Email: $v_email\n". 
"Message: $msg\n";

$headers = "From: ".$v_email;
$txt = "Message Received from ".$name.".\n\n".$msg;

mail($email_to,$email_subject,$txt,$headers);

header("Location: index.html");
?>
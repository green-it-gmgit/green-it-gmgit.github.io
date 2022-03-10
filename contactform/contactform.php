<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$EmailTo = "JoseDavid.Paton@gmail.com";
$Subject = "GMGIT Message Received";

$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From:".$email);

if ($success) echo "OK";
else echo "ERROR";

?>

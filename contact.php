<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];



$email_from = 'SudipPortf.com';


$email_subject = "New form submission";

$email_body = "User Name: $name.\n".
             
                "User Email: $visitor_email.\n".

                "User Message: $message.\n".


$to = "Sudip100898@gmail.com";
$headers = "From: $emailfrom \r\n";
$headers = "Rply-To: $visitor_email\r\n";
mail($to,$email,$email_subject,$email_body,$headers);


headers("Location: index.html");







?>
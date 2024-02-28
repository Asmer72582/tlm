<?php 


// refference 
$userName = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['msg'];


// mail direction
$to = "contact@tlmcreatives.com";
$body = "";
$title = "Mail from TLM Creatives";


// mail format
$body .= "From: ".$userName. "\r\n";
$body .= "Email: ".$email. "\r\n";
$body .= "Phone: ".$phone. "\r\n";
$body .= "Message: ".$message. "\r\n";

// mailing section
mail($to, $title, $body);


// redirect the page
echo "<script>window.location.href = 'index.html';</script>";


?>
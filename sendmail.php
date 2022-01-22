<?php

function sanitize($ez){
    $ez = trim($ez); 
    $ez = htmlspecialchars($ez); 
}


$nev = sanitize($_POST["nev"]); 
$phone = sanitize($_POST["phone"]);
$email = sanitize($_POST["email"]);
$subject = sanitize($_POST["subject"]);
$info = sanitize($_POST["info"]);


$to      = 'zaxxalexx@gmail.com';
$subject = 'Levél weboldalról';
$message = ""; 

$message .= "Név: ". $nev."<br><br>"  ;
$message .= "Telefon: ".$phone."<br><br>"  ;
$message .= "Email: ".$email."<br><br>"  ;
$message .= "Tárgy: ".$subject."<br><br>"  ;
$message .= "Szöveg:<br><br>".$info."<br><br>"  ;

$headers = 'From: info@zaxtax.hu' . "\r\n" .
    'Reply-To: info@zaxtax.hu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


header("location: thankyou.html"); 
?>
<?php

 //get data from form  
$name = $_POST['chambre'];
$email= $_POST['email'];
$message= $_POST['autre'];
$to = "lspcmaroc@gmail.com";
$subject = "Nouvelle Demmande";
$txt ="Nambre de chambre = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: formulaire@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:welcome.html");
?>
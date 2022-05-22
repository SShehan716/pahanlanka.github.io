<?php
//get data from form  
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$number = $_POST['number'];
$adate = $_POST['adate'];
$ddate = $_POST['ddate'];
$noOfRooms = $_POST['noOfRooms'];

$to = "contactus@pahanlanka.com";
$subject = "Mail From website";
$txt ="First Name = ". $first . "\r\nLast Name = ". $last . "\r\nE-mail = " . $email . "\r\nMobile Number =" . $number."\r\n Arrival-Date =" . $adate."\r\n Departure Date =" .$ddate."\r\n Rooms Count =" . $noOfRooms ;
$headers = "From: noreply@pahanlanka.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:room.html");
?>
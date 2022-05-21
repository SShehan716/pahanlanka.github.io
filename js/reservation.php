<?php

$fname = $_POST['First Name'];
$lname = $_POST['Last Name'];
$email = $_POST['Email'];
$Pnum = $_POST['Phone Number'];
$Adate = $_POST['Arrival Date'];
$Ddate = $_POST['Depature Date'];
$rooms = $_POST['No. of Rooms'];

$mailheader = "From :".$fname."<""noreply@pahanlanka.com"">\r\n";
$recipient = "web221solution@gmail.com";

$body = "";

$body .= "Name :".$fname." ".$lname."\r\n";
$body .= "Email :".$email."\r\n";
$body .= "Phone Number :".$Pnum."\r\n";
$body .= "Arrival Date :".$Adate."\r\n";
$body .= "Depature Date :".$Ddate."\r\n";
$body .= "Number of rooms :".$rooms."\r\n";

mail($recipient,"Room Resevation Inquery",$body,$mailheader)
or die("Error!")
?>
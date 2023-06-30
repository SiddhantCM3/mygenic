<?php
//get data from form
$name = $_POST['fname'];
$email= $_POST['email'];
$number=$_POST['phone'];
$subject=$_POST['subject'];
$message= $_POST['message'];
$to = "developer.creativemarque@gmail.com";
$subject = "Mail From Mygenic";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Number = " . $number . "\r\n Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.php");
?>
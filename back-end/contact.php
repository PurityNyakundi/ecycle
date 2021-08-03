<?php
//get data from form  
$name = $_POST['Username'];
$email= $_POST['Useremail'];
$message= $_POST['message'];
$to = "puritynyakundi00@gmail.com";
$subject = "Mail From Ecycle website";

//  \r \n is line break
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: eCycle.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    //php ftn
    mail($to,$subject,$txt,$headers);
}

//redirect user to contact page
header("location:../front-end/landing-shop/contact.html");

?>
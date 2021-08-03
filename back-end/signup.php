<!-- Paminus Murungi CIT-223-032/2018
purity nyakundi -CIT-227-028/2018
Alois Mutharimi - CIT-227-001/2018
Collins Kipkorir - CIT-227-006/2018
Tom Ngunyi King'ori - CIT-227-029/2018
Brian Nyagwansa Nyagwansa - CIT-227-032/2018
BruceFelix Macharia CIT-223-015/2018 -->




<?php
//create db connection
require 'connection.php';


//sanitizing user input
$username = mysqli_escape_string($connection,$_POST["username"]);
$email = mysqli_escape_string($connection,$_POST["email"]);
$dob = mysqli_escape_string($connection,$_POST["dob"]);
$postalCode = mysqli_escape_string($connection,$_POST["code"]);

//hashing a password

$pass = mysqli_escape_string($connection,password_hash($_POST['password'], PASSWORD_BCRYPT));

$insertor = "INSERT INTO userdetails(username,email,dob,code, password) VALUES('$username','$email','$dob','$postalCode','$pass')";

//checking if user email already exists
$getRecords = "SELECT email FROM userdetails WHERE email ='$email'";

$receivedEmail = mysqli_query($connection,$getRecords);
if(mysqli_num_rows($receivedEmail)>0)
{
    echo "<h3 style='color:red'>This email is used by someone else. Try a different email kindly.</h3>";
}
else{
    if(mysqli_query($connection,$insertor)){

        echo "<h3 style='color:green'>User added successfully</h3>";
        header("location:../front-end/login-page/login.html");

    }
    else{
        echo "<h3 style='color:red'>User not added</h3>".mysqli_error($connection);
    }
}


?>
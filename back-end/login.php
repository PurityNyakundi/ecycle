<!-- Paminus Murungi CIT-223-032/2018
purity nyakundi -CIT-227-028/2018
Alois Mutharimi - CIT-227-001/2018
Collins Kipkorir - CIT-227-006/2018
Tom Ngunyi King'ori - CIT-227-029/2018
Brian Nyagwansa Nyagwansa - CIT-227-032/2018
BruceFelix Macharia CIT-223-015/2018 -->



<?php
//create db connection
session_start();
require 'connection.php';

if(!isset($_SESSION['errorNumber'])){
    $_SESSION['errorNumber'] = 0;
}
if(!isset($_SESSION['attempts'])){
    $_SESSION['attempts'] = 0;
}

if(isset($_POST['username']) && isset($_POST['password'])){
    
$username = mysqli_escape_string($connection,$_POST['username']);
$pass = mysqli_escape_string($connection,$_POST['password']);

//the username entered should match with the password
$selectUser = "SELECT * FROM userdetails  WHERE username='$username' ";
$received = mysqli_query($connection,$selectUser);

//checking number of rows received
if(!$received){
    echo "msqli error" .mysqli_error($connection);
}
else{
    $row =mysqli_num_rows($received);
    $received = mysqli_fetch_assoc($received);
    if($row>0)
    {
        
        if($_SESSION['attempts']<3){

            //php ftn for checking hashed passwords
                if(password_verify($pass,$received['password']))
                {

                    $_SESSION['username'] = $username;
                    // echo $_SESSION['username'] ."welcome";
                   //delay the code below for 5 seconds
                    // sleep(5);

                    //if its the admin logging in, take him to admin page
                    if($username == 'admin'){
                        header("location: ../front-end/admin-page/admin.php");
                    }
                    //go to landing page
                    else{
                        header("location: ../front-end/landing-shop/landing.php");
                    }
                     
                }
                else{
                    $_SESSION['errorNumber'] = 1;
                   $checkPassword = "<div style = 'color:red'> <strong>Check Your password </strong></div>";
                 
                    $_SESSION['attempts']++;
                
                    // header("location: ../front-end/login-page/login.html");

                    $attemptsLeft = "<div style = 'color:red'> <strong>You have " .(3-$_SESSION['attempts']) ." attempts left. </strong></div>";
                    // sleep(5);
                    header("location:../front-end/login-page/loginNew.php");

                }
            }
        else{
            // when there are more than 3
            $_SESSION['errorNumber'] = 2;
            $endOfAttempts = "<div style = 'color:red'> <strong>You can only make 3 attempts at a login. <br> Please contact your website admin. </strong></div>";
            // sleep(5);
            // header("location:../front-end/login.html");
            header("location:../front-end/login-page/loginNew.php");


        }
        
        }
    else
         {
            $_SESSION['errorNumber'] = 3;
             $noUser = "<h1 style= 'color:red;'>User not registered</h1> <br> ";
           
            
            echo  $_SESSION['attempts'];
            header("location:../front-end/login-page/loginNew.php");

            }
                    }


}
        



// //Check to see if our countdown session
// //variable has been initialized.
// if(!isset($_SESSION['countdown'])){
//     //Set the countdown to 120 seconds.
//     $_SESSION['countdown'] = 120;
//     //Store the timestamp of when the countdown began.
//     $_SESSION['time_started'] = time();
// }

// //Get the current timestamp.
// $now = time();

// //Calculate how many seconds have passed since
// //the countdown began.
// $timeSince = $now - $_SESSION['time_started'];

// //How many seconds are remaining?
// $remainingSeconds = abs($_SESSION['countdown'] - $timeSince);

// //Print out the countdown.
// // echo "There are $remainingSeconds seconds remaining.";

// //Check if the countdown has finished.
// if($remainingSeconds < 1){
//    //Finished! Do something.
// //    echo "<h1> It is done</h1>";
// }


?>
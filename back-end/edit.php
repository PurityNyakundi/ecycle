<?php require 'connection.php';
session_start();

//getting the variables
$postalCode = mysqli_escape_string($connection,$_POST["code"]);
$oldPass = mysqli_escape_string($connection,$_POST["OLDpassword"]);
$newPass = mysqli_escape_string($connection,password_hash($_POST['NEWpassword'], PASSWORD_BCRYPT));

//checks if user is logged in
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];

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
}
if($row>0)
    {
          if(password_verify($oldPass,$received['password']))
                {
                    $changeDetails = "UPDATE userdetails SET code = '$postalCode', password ='$newPass' WHERE username='$username'";
                    if(mysqli_query($connection,$changeDetails)){
                        // echo "Successful";
                        header('location:../front-end/landing-shop/landing.php');
                    }
                    else{
                        echo "Error";
                    }
                }
                else{
                  
                  echo "<div style = 'color:red'> <strong>Check Your password </strong></div>";
                
                }
            }
        

 }

?>

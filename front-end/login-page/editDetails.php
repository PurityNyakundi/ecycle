
<?php include '../../back-end/connection.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>

    <link rel="stylesheet" href="../../styles/landing.css">
    <link rel="stylesheet" href="../../styles/shop.css">

    <link rel="stylesheet" href="../../styles/style.css">

</head>
<body>
 
<nav>
      <img src="../../icons/logo.PNG" alt="logo" class="logo">

      <p class="menu-bar flex-p"> <img src="../../icons/menu.svg" class="icon">Menu</p>


      <div class="search-bar" >
          <input type="text" name="search" id="search" placeholder="search bicycle..">
          <img src="../../icons/search.svg" alt="search" class="icon">
      </div>



      <div class="flex-class links">
          <a href="../landing-shop/shop.php">Shop</a>
          <a href="contact.html">Contact Us</a>
          
          <?php
          if(!isset($_SESSION['username'])){
           echo "<a href='../login-page/login.html'>Log in</a>";
            echo "<a href='../signup-page/signup.html' class='sign-up-btn'>Sign up</a>";
          }
          else{
            echo "<p class='sign-up-btn'> Hi ".$_SESSION['username']. "</p>";
          }

          ?>

      </div>
  </nav>

 

    <form action="../../back-end/edit.php" method="POST">
      
        <!-- <label for="username">Username</label> -->

      <?php 
      if(isset($_SESSION['username'])){
      echo "<strong class='username'> ".$_SESSION['username']. "</strong>";
      }
      else{
          echo "<strong class='username'>Please log in </strong>";
      }
      ?>
        <br>

        <label for="password">Edit postal code</label>
        <input type="text"  required name="code" placeholder="01000-Nairobi"> <br> 

        <label for="password">Enter old password</label>
        <input type="password"  required name="OLDpassword" autocomplete="off" placeholder="******" id="pass"> <br> 


        <label for="password">New password</label>
        <input type="password"  required name="NEWpassword" autocomplete="off" placeholder="******" id="pass"> <br> 

        <label for="password">Confirm password</label>
        <input type="password" required  name="con-pass" autocomplete="off" placeholder="******" id="con-pass"> <br>

        <div class="sect">
            <input type="submit" value="Save Details" class="submit">
        <input type="reset" value="Cancel">
        </div>

    
    </form>

  <script src="../js/menu.js"></script>

    <script type="text/javascript" src="../js/inactivity.js"></script>
</body>
</html>
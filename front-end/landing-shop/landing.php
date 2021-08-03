<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ecycle | Landing page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/shop.css">
    <link rel="stylesheet" href="../../styles/landing.css">

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
          <a href="shop.php">Shop</a>
          <a href="contact.html">Contact Us</a>
          
          <?php
          if(!isset($_SESSION['username'])){
           echo "<a href='../login-page/login.html'>Log in</a>";
            echo "<div class='sign-holder'>
            <a href='../signup-page/signup.html' class='sign-up-btn'>Sign up</a>
            <p class='hoverText'>
              15% off on first order!!
            </p>
          </div>";
          }
          else{
            echo "<p class='sign-up-btn'> Hi ".$_SESSION['username']. "</p>";

            echo "
          <a href='../login-page/editDetails.php'>Edit Profile</a>

            <form action='../../back-end/destroy.php' method='post' class='logout-Form'>
                <input type='submit' value='Log out' id='log-out-btn'>
            </form>";
          }

          ?>

      </div>
  </nav>

  <div class="dark-overlay"></div>

    <section class="slider">
      <div class="circle">

        <script type="text/javascript">
            function imgslider(anything){
              document.querySelector('.bike').src= anything;
            }
            function changeCircleColor(color){
              const circle=document.querySelector('.circle');
              circle.style.background= color;
            }
        </script>
      </div>
      <div class="content">
        <div class="textBox">
          <h2 class="company-title">E-Cycle</h2>
          <p>Enjoy a variety of electric bicycles that comes in different sizes and variety.
          The Bike Shop has a service department, that offers standard servicing + repairs, fitting of accessories + spare parts. </p>
          <a href="shop.html">SHOP</a>
        </div>
          <div class="imgBox">
            <img src="../../images/bike3.png" class="bike">
          </div>
          <ul class="thumb">
            <li><img src="../../images/thumb6-removebg.png" onclick="imgslider('../../images/bike1-removebg.png');changeCircleColor(' #808080')"></li>
            <li><img src="../../images/thumb2-removebg.png" onclick="imgslider('../../images/bike3.png');changeCircleColor('#95EB74')"></li>
            <li><img src="../../images/thumb7.png" onclick="imgslider('../../images/bike2-removebg.png');changeCircleColor('#FFA500')"></li>
            <li><img src="../../images/thumb8-removebg.png" onclick="imgslider('../../images/bike4-removebg.png');changeCircleColor('#00FFFF')"></li>
          </ul>
    
      </div>

</section>

<div class="testimonials" >
  <div class="inner">
    <h1><center>Testimonials</center></h1>
    <div class="border"></div>
    <div class="row">
      <div class="col">
        <div class="testimonial">
          <img src="../../images/p1.jpg" alt="">
          <div class="name">Paul Rudd</div>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        </div>

      </div>
      <div class="col">
        <div class="testimonial">
          <img src="../../images/p2.jpg" alt="">
          <div class="name">Ariana Grande</div>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        </div>

      </div>
      <div class="col">
        <div class="testimonial">
          <img src="../../images/p3.jpg" alt="">
          <div class="name">Omondi Timon</div>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        </div>

      </div>
    </div>
  </div>

</div>

<footer class="foot">
  <div class="vision">
      <h2>Vision</h2>
      <p>To reduce global warming caused by emmision of carbon(iv) oxide.</p>
      <h2>Mission</h2>
      <p>Offer an eco-friendly alternative for transport compared to use of fuel.</p>
  </div>
  <div class="footer-links">
      <h2>Useful links</h2>
      <ul>
          <li><a href="#">Home</a></li>
          <li><a href="../login-page/login.html">Log in</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="#search">Search</a></li>
      </ul>
  </div>
  <div class="footer-partners">
      <h2>Our Partners</h2>
      <img src="../../icons/tlc-logo 1.svg" alt="">
      <img src="../../icons/cycle_logo-removebg-preview 1.svg" alt="">
  </div>
  <div class="footer-social-media">
      <h2>Follow us on:</h2>
      <ul>
          <li><a href="#" class="flex-p"> <img class="icon" src="../../icons/facebook-svgrepo-com.svg" alt=""> @eCycle_Kenya</a></li>
          <li><a href="#" class="flex-p"> <img class="icon" src="../../icons/twitter-svgrepo-com.svg" alt=""> eCycle_Kenya</a></li>
          <li><a href="#" class="flex-p"> <img class="icon" src="../../icons/youtube-svgrepo-com.svg" alt=""> eCcyle Kenya </a></li>
      </ul>
  </div>
</footer>
  </body>

  <script src="../js/menu.js"></script>
  <script type="text/javascript" src="../js/inactivity.js"></script>


</html>

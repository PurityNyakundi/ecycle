<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCycle |Contact page</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="../../styles/shop.css">

    <link rel="stylesheet" href="../../styles/contact.css">
    <link rel="shortcut icon" href="../../icons/logo.PNG" type="image/x-icon">


</head>
<body>
    <nav>
        <img src="../../icons/logo.PNG" alt="logo" class="logo">
        <p class="menu-bar flex-p"> <img src="../../icons/menu.svg" class="icon">Menu</p>
        <div class="flex-class links">
            <a href="landing.php">Home</a>
          <a href="shop.php">Shop</a>

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
            <form action='../../back-end/destroy.php' method='post' class='logout-Form'>
                <input type='submit' value='Log out' id='log-out-btn'>
            </form>";
          }

          ?>
        </div>
    </nav>

    <div class="dark-overlay"></div>

    <section  class="contact">
        <div  class="content">
            <h2 >Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae excepturi unde
                voluptates velit rem magnam laudantium beatae quo.</p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><img src="../../icons/map.png" alt="map icon" width="20px" height="20px"></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>5537 Masai Lodge<br>Ongata Rongai<br>88060</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><img src="../../icons/phone.png" alt="phone icon" width="20px" height="20px"></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+254701234567</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><img src="../../icons/email.png" alt="email icon" width="20px" height="20px"></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>eCycle_Kenya@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form method="POST" action="../../back-end/contact.php">
                    <h2>Send us a Message</h2>
                    <div class="inputBox">
                        <input type="text" name="Username" required="required">
                        <span>Full name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Useremail" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="message"></textarea>
                        <span>Type your message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <h2>Frequently Asked Questions(FAQs)</h2>
        <div class="accordion">
            <div class="icon"></div>
                <h5>What is Lorem Ipsum?</h5>
        </div>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos id omnis velit vitae quidem
                    laudantium optio magnam animi totam. Quod nesciunt magni dolores laboriosam expedita aliquam
                    atque laborum numquam itaque!</p>
        </div>

        <div class="accordion">
            <div class="icon"></div>
                <h5>Why do we use it?</h5>
        </div>
        <div class="panel">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos id omnis velit vitae quidem
                    laudantium optio magnam animi totam. Quod nesciunt magni dolores laboriosam expedita aliquam
                    atque laborum numquam itaque!</p>
        </div>

        <div class="accordion">
            <div class="icon"></div>
                <h5>Where does it come from?</h5>
        </div>
        <div class="panel">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos id omnis velit vitae quidem
                    laudantium optio magnam animi totam. Quod nesciunt magni dolores laboriosam expedita aliquam
                    atque laborum numquam itaque!</p>
        </div>

        <div class="accordion">
            <div class="icon"></div>
                <h5>What is the meaning of all this?</h5>
        </div>
        <div class="panel">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos id omnis velit vitae quidem
                    laudantium optio magnam animi totam. Quod nesciunt magni dolores laboriosam expedita aliquam
                    atque laborum numquam itaque!</p>
        </div>

    </section>

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
                    <li><a href="landing.html">Home</a></li>
                    <li><a href="../../front-end/login-page/login.html">Log in</a></li>
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

    <script src="../js/menu.js"></script>


<script>
    var acc = document.getElementsByClassName('accordion');
    var i;
    var len = acc.length;
    for (i = 0; i < len; i++) {
        acc[i].addEventListener('click', function(){
            this.classList.toggle('active');
            var panel = this.nextElementSibling;
            if(panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else{
                panel.style.maxHeight = panel.scrollHeight + 'px'
            }
        })
    }
</script>
</body>
</html>
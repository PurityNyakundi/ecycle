<?php 
    mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);

session_start(); 
require '../../back-end/connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="eCycle electric bikes purchase | City cycle | Road bike | Electric assisted
    cycle | Cross-bike | Mountain bike | Mini Velo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCycle | Shopping page</title>


    <!-- slider links  -->
    <link rel="stylesheet" href="../../styles/swiper.min.css">
    <script src="../../front-end/js/swiper.min.js"></script>


    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="../../styles/shop.css">
    <link rel="shortcut icon" href="../../icons/logo.PNG" type="image/x-icon">
</head>
<body>
    <nav>
        <img src="../../icons/logo.PNG" alt="logo" class="logo">

        <p class="menu-bar flex-p"> <img src="../../icons/menu.svg" class="icon">Menu</p>


        <div class="search-bar">
            <input type="text" name="search" id="search" placeholder="search bicycle..">
            <img src="../../icons/search.svg" alt="search" class="icon">
        </div>



        <div class="flex-class links">
            <a href="landing.php">Home</a>
            <p style="color: black;" class="flex-class filter">Filter <img src="../../icons/arrow.svg" alt="down" class="arrow-down">
                <form style="color: black;" action="#" class="form-filter">
                    <h3 style="justify-self: left;" >Condition</h3>

                    <div class="radio-buttons">
                        <input type="radio" name="new" id="old"> New
                        <input type="radio" name="old" id="secondhand"> Secondhand
                    </div>


                    <select name="types" id="type">
                        <option value="defualt">Types</option>
                        <option value="City Cycle">City Cycle</option>
                        <option value="Road Bike">Road bike</option>
                        <option value="Electric Assisted Cycle">Electric Assisted Cycle</option>
                        <option value="Cross bike">Cross bike</option>
                        <option value="Mountain bike">Mountain Bike</option>
                        <option value="Mini Velo">Mini Velo</option>
                    </select>
                    <h3 style="justify-self: left;" >Price</h3>
                    <div class="prices flex-class">
                        <input type="text" placeholder="min"> -
                        <input type="text" placeholder="max">
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </p>
            <a href="contact.php">Contact Us</a>
           
            <?php
          if(!isset($_SESSION['username'])){
           echo "<a href='../login-page/login.html'>Log in</a>";
            echo "<a href='../signup-page/signup.html' class='sign-up-btn'>Sign up</a>";
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
    <!-- swiperjs effect  -->
    <section class="swiper-container welcome-slider">
        <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <article class="flex-class first-slide ">

                          <img src="../../images/ebike-removebg-preview.png" alt="twin bicycle" class="slide-bike">

                      <div class="slide-text">
                          <h2>
                              Twin turbo <br>
                              21 gears <br>
                              Electric rechargable motor
                          </h2>

                          <button class="buy-btn">
                              Buy now!!
                          </button>
                      </div>
                  </article>
                </div>

                <div class="swiper-slide">
                  <article class="flex-class first-slide">

                      <img src="../../images/ebike2-removebg-preview.png" alt="twin bicycle" class="slide-bike">

                  <div class="slide-text">
                      <h2>
                          Bi-turbo <br>
                          21 gears <br>

                      </h2>

                      <button class="buy-btn">
                          Buy now!!
                      </button>
                  </div>
              </article>
                </div>
         </div>

         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div>

          <!-- Add Pagination -->
          <div class="swiper-pagination swiper-pagination-2"></div>

          <div class="swiper-button-prev"> </div>
          <div class="swiper-button-next"></div>
    </section>
    <section class="products-container">
        <h1>Our Products</h1>
        <div class="products flex-class">

            <!-- fetching from db  -->
            <?php
    
    
    $selectproduct = 'SELECT * FROM bikedetails';
    $fetchfromdb = $connection->query($selectproduct);
    $imageprods = array();
    $productnames = array();
    
    $counter = 0;
    if($fetchfromdb){
        if($fetchfromdb->num_rows > 0){
            while($row = $fetchfromdb->fetch_assoc()){
                $productimage =$row['picture'];
                $productname =$row['prodname'];
                $prodPrice = $row['price'];
                $bikeType = $row['biketype'];
                $condition = $row['bikecondition'];
                $imageprods[$counter] = $productimage; 
                $productnames[$counter] = $productnames; 
                $counter+=1;
              echo "

              <div class='prod-card'>
                <img class='product-img' src='../../back-end/pictures/$productimage' alt=''>
                <p class='prod-title' >" .$productname."</p>
                <p class='flex-p' > <img class='icon' src='../../icons/dollar-sign-bag-svgrepo-com.svg' alt=''> Kshs " .$prodPrice."</p>
                <p class='flex-p' > <img class='icon' src='../../icons/bike-svgrepo-com.svg' alt=''> ".$bikeType."</p>
               <div class='buy-btns flex-class'>
                <button class='buy'>Buy now</button>
                <button class='flex-p wish' > <img class='icon icon-small' src='../../icons/like-svgrepo-com.svg' alt=''> Add to wishlist</button>
               </div>
            </div>";

            }
        }
        else{
            // echo "There are no product images";
        }
        
        }
    ?>

            <div class="prod-card">
                <img class="product-img" src="../../images/ebike2-removebg-preview.png" alt="">
                <p class="prod-title" >Grande Electric bike</p>
                <p class="flex-p" > <img class="icon" src="../../icons/dollar-sign-bag-svgrepo-com.svg" alt=""> Kshs 20000</p>
                <p class="flex-p" > <img class="icon" src="../../icons/bike-svgrepo-com.svg" alt=""> Mini Velo</p>
               <div class="buy-btns flex-class">
                <button class="buy">Buy now</button>
                <button class="flex-p wish" > <img class="icon icon-small" src="../../icons/like-svgrepo-com.svg" alt=""> Add to wishlist</button>
               </div>
            </div>

            <div class="prod-card">
                <img class="product-img" src="../../images/ebike2-removebg-preview.png" alt="">
                <p class="prod-title" >Grande Electric bike</p>
                <p class="flex-p" > <img class="icon" src="../../icons/dollar-sign-bag-svgrepo-com.svg" alt=""> Kshs 20000</p>
                <p class="flex-p" > <img class="icon" src="../../icons/bike-svgrepo-com.svg" alt=""> Mini Velo</p>
               <div class="buy-btns flex-class">
                <button class="buy">Buy now</button>
                <button class="flex-p wish" > <img class="icon icon-small" src="../../icons/like-svgrepo-com.svg" alt=""> Add to wishlist</button>
               </div>
            </div>

            <div class="prod-card">
                <img class="product-img" src="../../images/ebike2-removebg-preview.png" alt="">
                <p class="prod-title" >Grande Electric bike</p>
                <p class="flex-p" > <img class="icon" src="../../icons/dollar-sign-bag-svgrepo-com.svg" alt=""> Kshs 20000</p>
                <p class="flex-p" > <img class="icon" src="../../icons/bike-svgrepo-com.svg" alt=""> Mini Velo</p>
               <div class="buy-btns flex-class">
                <button class="buy">Buy now</button>
                <button class="flex-p wish" > <img class="icon icon-small" src="../../icons/like-svgrepo-com.svg" alt=""> Add to wishlist</button>
               </div>
            </div>
            <div class="prod-card">
                <img class="product-img" src="../../images/ebike2-removebg-preview.png" alt="">
                <p class="prod-title" >Grande Electric bike</p>
                <p class="flex-p" > <img class="icon" src="../../icons/dollar-sign-bag-svgrepo-com.svg" alt=""> Kshs 20000</p>
                <p class="flex-p" > <img class="icon" src="../../icons/bike-svgrepo-com.svg" alt=""> Mini Velo</p>
               <div class="buy-btns flex-class">
                <button class="buy">Buy now</button>
                <button class="flex-p wish" > <img class="icon icon-small" src="../../icons/like-svgrepo-com.svg" alt=""> Add to wishlist</button>
               </div>
            </div>
            <div class="prod-card">
                <img class="product-img" src="../../images/ebike2-removebg-preview.png" alt="">
                <p class="prod-title" >Grande Electric bike</p>
                <p class="flex-p" > <img class="icon" src="../../icons/dollar-sign-bag-svgrepo-com.svg" alt=""> Kshs 20000</p>
                <p class="flex-p" > <img class="icon" src="../../icons/bike-svgrepo-com.svg" alt=""> Mini Velo</p>
               <div class="buy-btns flex-class">
                <button class="buy">Buy now</button>
                <button class="flex-p wish" > <img class="icon icon-small" src="../../icons/like-svgrepo-com.svg" alt=""> Add to wishlist</button>
               </div>
            </div>
            <div class="prod-card">
                <img class="product-img" src="../../images/ebike2-removebg-preview.png" alt="">
                <p class="prod-title" >Grande Electric bike</p>
                <p class="flex-p" > <img class="icon" src="../../icons/dollar-sign-bag-svgrepo-com.svg" alt=""> Kshs 20000</p>
                <p class="flex-p" > <img class="icon" src="../../icons/bike-svgrepo-com.svg" alt=""> Mini Velo</p>
               <div class="buy-btns flex-class">
                <button class="buy">Buy now</button>
                <button class="flex-p wish" > <img class="icon icon-small" src="../../icons/like-svgrepo-com.svg" alt=""> Add to wishlist</button>
               </div>
            </div>
            <div class="prod-card">
                <img class="product-img" src="../../images/ebike2-removebg-preview.png" alt="">
                <p class="prod-title" >Grande Electric bike</p>
                <p class="flex-p" > <img class="icon" src="../../icons/dollar-sign-bag-svgrepo-com.svg" alt=""> Kshs 20000</p>
                <p class="flex-p" > <img class="icon" src="../../icons/bike-svgrepo-com.svg" alt=""> Mini Velo</p>
               <div class="buy-btns flex-class">
                <button class="buy">Buy now</button>
                <button class="flex-p wish" > <img class="icon icon-small" src="../../icons/like-svgrepo-com.svg" alt=""> Add to wishlist</button>
               </div>
            </div>
            <div class="prod-card">
                <img class="product-img" src="../../images/ebike2-removebg-preview.png" alt="">
                <p class="prod-title" >Grande Electric bike</p>
                <p class="flex-p" > <img class="icon" src="../../icons/dollar-sign-bag-svgrepo-com.svg" alt=""> Kshs 20000</p>
                <p class="flex-p" > <img class="icon" src="../../icons/bike-svgrepo-com.svg" alt=""> Mini Velo</p>
               <div class="buy-btns flex-class">
                <button class="buy">Buy now</button>
                <button class="flex-p wish" > <img class="icon icon-small" src="../../icons/like-svgrepo-com.svg" alt=""> Add to wishlist</button>
               </div>
            </div>

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
                    <li><a href="../login-page/login.html">Log in</a></li>
                    <li><a href="../landing-shop/contact.html">Contact Us</a></li>
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



            <!-- Initialize Swiper -->
            <script>
                let swiper = new Swiper('.swiper-container', {
                // slidesPerView: 'auto',
                spaceBetween:30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                freeMode: false,
                  // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                });

                //menu dropdown
                let menuBtn = document.querySelector(".menu-bar");
                let searchBar = document.querySelector(".search-bar");
                let links = document.querySelector(".links");
                let overlay = document.querySelector(".dark-overlay");

                menuBtn.addEventListener("click",()=>{
                    searchBar.classList.toggle("show-flex");
                    links.classList.toggle("show-links");
                    overlay.classList.toggle("show-overlay");
                })

                overlay.addEventListener("click",()=>{
                    searchBar.classList.toggle("show-flex");
                    links.classList.toggle("show-links");
                    overlay.classList.toggle("show-overlay");

                })
                let filter_icon = document.querySelector(".filter")
                let form_filter = document.querySelector(".form-filter")

                filter_icon.addEventListener("click",function(){
                    form_filter.classList.toggle("show-grid")
                })
            </script>
    <script type="text/javascript" src="../js/inactivity.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- swiper css link -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.4/swiper-bundle.css"
     integrity="sha512-KBVE5XtR1mD+xG5KJdK4mNAvbqLXeD6fbzeSNGLWRQcOdD6sStIZJIUUIN+ng8glwOzQ2x2uRCWkYkqSQSbGvg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />"

     <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.4/swiper-bundle.min.js" 
     integrity="sha512-hNnjFWCqifslGhuZJVHjXdBund00oDV71mBacLyZYVwmuf+Lx+MGgoG04wehsvhp6FvLYfycrES+b1yh24yvhg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.css"> -->

   

</head>
<body>
    <!-- header section -->
    <section class="header">
        <a href="home.php" class="logo">Trek & Glide</a>
        
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="packages.php">Travel Packages</a>
            <a href="checkIn.php">Check In</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- HOME SECTION -->
    <section class="home">
        <div class="swiper home-slider">
             <div class="swiper-wrapper">
                
                <div class="swiper-slide slide swiper-slide-active" style="background: url(images/background-imag2.jpeg) no-repeat;">
                        <div class="content">
                            <span>Explore, Discover, Wander</span>
                            <h3>To Travel is to Live</h3>
                            <a href="packages.php" class="btn" style="background: #ff828f;">Discover more</a>
                        </div>
                </div>

                <div class="swiper-slide slide swiper-slide-active" style="background: url(images/background-image3.jpeg) no-repeat;">
                    <div class="content">
                        <span>Explore, Discover, Wander</span>
                        <h3>Discover the new places</h3>
                        <a href="packages.php" class="btn" style="background: #540b0e;">Discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide swiper-slide-active" style="background: url(images/background-image1.jpg) no-repeat;">
                    <div class="content">
                        <span style="color: #5a189a;">Explore, Discover, Wander</span>
                        <h3>Seas the day</h3>
                        <a href="packages.php" class="btn">Discover more</a>
                    
                    </div>
                </div>

        </div>

             <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>
             <div class="swiper-pagination"></div>
        </div>
    
    </section>
    
    <!-- SERVICEs SECTION -->
    <section class="services">
        <h1 class="heading-title">Available/On-hand Services</h1>

        <div class="container">
            <div class="box">
                <img src="images/adventures.png" alt="">
                <h3>Adventures</h3>
            </div>

            <div class="box">
                <img src="images/guide.png" alt="">
                <h3>Tourist Guides</h3>
            </div>

            <div class="box">
                <img src="images/hike.jpg" alt="">
                <h3>Hiking</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>Off roading</h3>
            </div>

            <div class="box">
                <img src="images/camping.png" alt="">
                <h3>Camping</h3>
            </div>

            <div class="box">
                <img src="images/accomodation.png" alt="">
                <h3>Accomodation & Catering</h3>
            </div>
            
            
        </div>
    </section>

    <!-- HOME ABOUT SECTION -->
    <div class="home-about">
        <div class="image">
            <img src="images/about-img.jpg">
        </div>

        <div class="content">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                 labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                 laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                  in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                  cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="about.php" class="btn">Read more</a>
        </div>
    </div>

    <!-- home PACKAGES SECTION -->
    <section class="home-packages">
        <div class="heading-title">Our Packages</div>

        <div class="box-container">

            <div class="box">

                <div class="image">
                    <img src="images/img-1.jpg">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                        et dolore magna aliqua.</p>
                    <a href="checkIn.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">

                <div class="image">
                    <img src="images/img-2.jpg">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                        et dolore magna aliqua.</p>
                    <a href="checkIn.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                        et dolore magna aliqua.</p>
                    <a href="checkIn.php" class="btn">Book now</a>
                </div>
            </div>
        </div>

            <div class="load-more">
                <a href="packages.php" class="btn">Load more</a>


            </div>
 </section>

 <!-- OFFER SECTION -->
    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                et dolore magna aliqua.</p>
            <a href = "checkIn.php" class="btn">Book Now</a>

        </div>
    </section>

    <!-- FOOTER SECTION -->
    <section class="footer">
        <div class="box-container">
         
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"><i class = "fas fa-angle-right"> </i> Home</a>
                <a href="about.php"><i class = "fas fa-angle-right"> </i> About</a>
                <a href="packages.php"><i class = "fas fa-angle-right"> </i> Travel Packages</a>
                <a href="checkIn.php"><i class = "fas fa-angle-right"> </i> Check In</a>

            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class = "fas fa-angle-right "> </i> Ask questions</a>
                <a href="about.php"><i class = "fas fa-angle-right "> </i> About us</a>
                <a href="packages.php"><i class = "fas fa-angle-right"> </i> Privacy Policy</a>
                <a href="checkIn.php"><i class = "fas fa-angle-right"> </i> Terms & Conditions</a>

            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#"><i class = "fas fa-phone"> </i> +123-456-7890</a>
                <a href="about.php"><i class = "fas fa-phone"> </i> +111-222-3331</a>
                <a href="packages.php"><i class = "fas fa-envelope"> </i>  anisha.amcse@gmail.com</a>
                <a href="checkIn.php"><i class = "fas fa-map"> </i>  Mumbai - India 00000</a>

            </div>

            <div class="box">
                <h3>Follow us at</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linked in</a>
            </div>
        </div>

        <div class="credit">Created by <span>Anisha Mahajan</span> | All rights reserved</div>
    </section>

    

    <!-- custom JavaScript file link -->
    <script src="javaScript/script.js"></script>
    
</script>
    <!-- swiper js link -->
    
    <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <!-- <script src="//cdn.shopify.com/s/files/1/0659/4529/t/75/assets/swiper.min.js?10728068994914913511"></script> -->


</body>
</html>

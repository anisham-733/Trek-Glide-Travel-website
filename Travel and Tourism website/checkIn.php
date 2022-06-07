
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- swiper css link -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.4/swiper-bundle.css"
     integrity="sha512-KBVE5XtR1mD+xG5KJdK4mNAvbqLXeD6fbzeSNGLWRQcOdD6sStIZJIUUIN+ng8glwOzQ2x2uRCWkYkqSQSbGvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />"

     <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.4/swiper-bundle.min.js" integrity="sha512-hNnjFWCqifslGhuZJVHjXdBund00oDV71mBacLyZYVwmuf+Lx+MGgoG04wehsvhp6FvLYfycrES+b1yh24yvhg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

    <div class="heading" style="background: url(images/header-bg-2.png) no-repeat;">
    <h1>Book Now</h1>
    </div>

    <section class="booking">
        <h1 class="heading-title">
            Book your Trip !!
        </h1>
        <form action="booking-form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name : </span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>Email : </span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>

                <div class="inputBox">
                    <span>Contact no : </span>
                    <input type="number" placeholder="Enter your number" name="number">
                </div>

                <div class="inputBox">
                    <span>Address : </span>
                    <input type="text" placeholder="Enter your Address" name="address">
                </div>

                <div class="inputBox">
                    <span>Location : </span>
                    <input type="text" placeholder="Enter the location you want to visit" name="location">
                </div>

                <div class="inputBox">
                    <span>Number of travellers : </span>
                    <input type="number" placeholder="Enter number of guests" name="guests">
                </div>

                <div class="inputBox">
                    <span>Check-in date : </span>
                    <input type="date" name="checkin">
                </div>

                <div class="inputBox">
                    <span>Check-out date: </span>
                    <input type="date" name="checkout">
                </div>

            </div>
            <input type="submit" value="Submit" class="btn" name="submit">
        </form>
    </section>

    <!-- FOOTER SECTION -->
    <section class="footer">
        <div class="box-container">
         
            <div class="box">
                <h3>Quick links</h3>
                <a href="index.php"><i class = "fas fa-angle-right"> </i> Home</a>
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

   </body>
   </html>
    
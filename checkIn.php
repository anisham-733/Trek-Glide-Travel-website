
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
    <script>
        function validateForm()
        {
            let name = document.forms["form"]["name"].value;
            let email = document.forms["form"]["email"].value;
            let number = document.forms["form"]["number"].value;
           
            let address = document.forms["form"]["address"].value;
            let location = document.forms["form"]["location"].value;
            let guests = document.forms["form"]["guests"].value;
            let date = document.forms["form"]["date"].value;
            let checkout = document.forms["form"]["checkout"].value;
            if (name == "" || name ==null){
                alert("Please enter your name");
                return false;
            }
            else if (email == "" || email ==null){
                alert("Please enter your email");
                return false;
            }
            else if (number == "" || number ==null){
                alert("Please enter your contact number");
                return false;
                }
            else if (address == "" || address ==null) {
                alert("Please enter your address");
                return false;
                }
            else if (location == "" || location ==null){
                alert("Please enter your location");
                return false;
            }
            else if (guests == "" || guests ==null){
                alert("Please enter number of guests");
                return false;
            }
            else if (date == "" || date ==null) {
                alert("Please select check-in date");
                return false;
                }
            else if (checkout == "" || checkout ==null) {
                alert("Please select checkout date");
                return false;}
            
            else
                return true;

        }
        </script>


</head>
<body>
    <!-- header section -->
    <section class="header">
        <a href="index.php" class="logo">Trek & Glide</a>
        
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
        <form action="booking-form.php" method="post" name = "form" class="book-form" onsubmit = "">
            <div class="flex">
                <div class="inputBox" name = "name">
                    <span>Name : </span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>

                <div class="inputBox" name = "email">
                    <span>Email : </span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>

                <div class="inputBox" name = "number">
                    <span>Contact no : </span>
                    <input type="number" placeholder="Enter your number" name="number">
                </div>

                <div class="inputBox" name = "address">
                    <span>Address : </span>
                    <input type="text" placeholder="Enter your Address" name="address">
                </div>

                <div class="inputBox" name = "location">
                    <span>Location : </span>
                    <input type="text" placeholder="Enter the location you want to visit" name="location">
                </div>

                <div class="inputBox" name = "guests">
                    <span>Number of travellers : </span>
                    <input type="number" placeholder="Enter number of guests" name="guests">
                </div>

                <div class="inputBox" name = "date">
                    <span>Check-in date : </span>
                    <input type="date" name="checkin">
                </div>

                <div class="inputBox" name = "checkout">
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
    

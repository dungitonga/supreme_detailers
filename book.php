<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Book</title>

        <!--font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

        <!--Swiper css link-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        
        <!--Favicon link-->
        <link rel="icon" href="favicon_io/favicon.ico"/>

        <!--Custom css link-->
        <link rel="stylesheet" href="css/style.css"/>
        
    </head>
    <body>

        <!--header section start-->
          <section class="header">

                <a href="home.php" class="logo">Supreme Detailers</a>

                <nav class="navbar">
                    <a href="home.php" class="logo">home</a>
                    <a href="about.php" class="logo">about us</a>
                    <a href="packages.php" class="logo">package</a>
                    <a href="book.php" class="logo">book</a>
                </nav>

                <div id="menu-btn" class="fas fa-bars"></div>

          </section>
        <!--header section ends-->
        
        <div class="heading" style="background: url(images/c.jpg) no-repeat">
            <h1>book now</h1>
        </div>

        <!--booking section starts-->
            <section class="booking">
                <h1 class="heading-title"></h1>
                <form action="book_form.php" method="post" class="book-form">
                    <div class="flex">
                        <div class="InputBox">
                            <span>name:</span>
                            <input type="text" placeholder="enter your name" name="name">
                        </div>
                        <div class="InputBox">
                            <span>email:</span>
                            <input type="email" placeholder="enter your email" name="email">
                        </div>
                        <div class="InputBox">
                            <span>phone number:</span>
                            <input type="number" placeholder="enter your number" name="phone">
                        </div>
                        <div class="InputBox">
                            <span>date:</span>
                            <input type="date" name="date">
                        </div>
                        <div class="InputBox">
                            <span>service:</span>
                            <input type="text" name="service">
                        </div>
                    </div>
                    <input type="submit" value="submit" class="btn" name="send">  
                </form>
            </section>
        <!--booking section ends-->

        <!--footer section starts-->
        <section class="footer">

            <div class="box-container">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.4606485424865!2d36.884248838710235!3d-1.2149853996933528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3e1e670601f9%3A0xadd0791288ca8afe!2sRoyal%20Suburb%20Ventures%20Cas%20Wash!5e0!3m2!1sen!2ske!4v1710794360233!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <div class="box"> 
                    <h3>contacts</h3>
                    <a href="#"><i class="fas fa-phone"></i>+254 718 948 292</a>
                    <a href="mailto:detailerssupreme@gmail.com"><i class="fas fa-envelope"></i>detailerssupreme@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i>Lumumba Drive, Roysambu, Nairobi</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="https://www.facebook.com/p/Supreme-Detailers-100092490883138/"><i class="fab fa-facebook"></i>supreme_detailers</a>
                    <a href="https://www.instagram.com/supreme_detailers_/"><i class="fab fa-instagram"></i>supreme_detailers</a>
                </div>

            </div>

            <div class="credit"> created by <span><a href="https://www.linkedin.com/in/ian-gitonga-627714261/">Ian Gitonga</a></span> | all rights reserved</div>

        </section>
        <!--footer section ends-->

          <!--Swiper js script-->
          <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

          <!--Custom js script-->
          <script src="js/main.js"></script>
    </body>
</html>
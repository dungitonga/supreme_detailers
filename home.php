<?php
session_start();
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

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

        <!--home section starts-->
            <section class="home">

                <div class="swiper homeSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide" style="background: url(images/b.jpg) no-repeat;">
                            <div class="content">
                                <span></span>
                                <h3>supreme car detailers and ceramic coating</h3>
                                <a href="packages.php" class="btn">nano ceramic coating</a>
                            </div>
                        </div>
                        <div class="swiper-slide slide" style="background: url(images/d.png) no-repeat;">
                            <div class="content">
                            <h3>Revitalize your ride with the ultimate in car detailing and ceramic coating excellence</h3>
                            <a href="packages.php" class="btn">Nairobi Detailers</a>
                            </div>
                        </div>
                        <div class="swiper-slide slide" style="background: url(images/n.jpg) no-repeat;">
                            <div class="content">
                                <span>for all your exterior needs</span>
                                <h3>drive with unmatched shine and ceramic protection</h3>
                                <a href="packages.php" class="btn">discover more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </section>
        <!--home section ends-->

        <!--home-service section starts-->
            <section class="services">

                <h1 class="heading-title">Our Services</h1>

                <div class="gallery">
                    <img src="images/d.png" alt="car after applying ceramic" width="600" height="400">
                    <div class="desc">
                        <?php

                        $sql = "SELECT * FROM home_info;";
                        $result = mysqli_query($connection, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['ceramic'];
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="gallery">
                        <img src="images/h.jpg" alt="car after applying tinting" width="600" height="400">
                    <div class="desc">                        
                        <?php
                            $sql = "SELECT * FROM home_info;";
                            $result = mysqli_query($connection, $sql);
                            $resultCheck = mysqli_num_rows($result);

                            if($resultCheck > 0) {
                                while($row = mysqli_fetch_assoc($result)){
                                    echo $row['tint'];
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="gallery">                   
                    <img src="images/e.jpg" alt="before and after buffing" width="600" height="400">
                    <div class="desc">
                    <?php

                        $sql = "SELECT * FROM home_info;";
                        $result = mysqli_query($connection, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['buffing'];
                            }
                        }
                    ?>
                    </div>
                </div>

                <div class="gallery">
                        <img src="images/j.jpg" alt="car with lights film" width="600" height="400">
                    <div class="desc">
                    <?php

                        $sql = "SELECT * FROM home_info;";
                        $result = mysqli_query($connection, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['headlights'];
                            }
                        }
                    ?>
                    </div>
                </div>

            </section>
        <!--home-service section ends-->

        <!--home-about section starts-->
            <section class="home-about">
                
                <div class="content">
                    <h3>about-us</h3>
                    <p>
                    <?php

                        $sql = "SELECT * FROM home_info;";
                        $result = mysqli_query($connection, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                echo $row['about-us'];
                            }
                        }
                    ?>
                    </p>
                    <a href="about.php" class="btn">read more</a>
                </div>

            </section>
        <!--home-about section ends-->

        <!--home-packages section starts-->
            <section class="home-packages">

                <h1 class="heading-title">our packages</h1>
                <div class="box-container">
                    <div class="box">
                        <div class="image">
                            <img src="images/n.jpg" alt="red car">
                        </div>
                        <div class="content">
                            <h3 class="adventure">Ceramic</h3>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="images/g.png" alt="red car">
                        </div>
                        <div class="content">
                            <h3 class="adventure">Buffing</h3>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="images/f.jpg" alt="red car">
                        </div>
                        <div class="content">
                            <h3 class="adventure">Tinting and headlight film</h3>
                            <a href="book.php" class="btn">book now</a>
                        </div>
                    </div>
                </div>
                <div class="load-more"><a href="packages.php" class="btn">load more</a></div>
            </section>
        <!--home-packages section ends-->

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

        <!--Instagram js script-->
        <script async src="//www.instagram.com/embed.js"></script>
        
        <!--Swiper js script-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!--Custom js script-->
        <script src="js/main.js"></script>
          
    </body>
</html>

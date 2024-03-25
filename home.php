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
    
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/C4yMxivo2u4/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                    <div style="padding:16px;"> 
                        <a href="https://www.instagram.com/reel/C4yMxivo2u4/?utm_source=ig_embed&amp;utm_campaign=loading" 
                            style="background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" 
                            target="_blank"> 
                            <div style=" display: flex; flex-direction: row; align-items: center;"> 
                                <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> 
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> 
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> 
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                </div>
                            </div>
                            <div style="padding: 19% 0;"></div> 
                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" 
                                    xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                            <g>
                                                <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,
                                                37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 
                                                C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,
                                                44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,
                                                50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,
                                                33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,
                                                71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,
                                                74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,
                                                73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,
                                                67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,
                                                42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,
                                                29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,
                                                25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,
                                                25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,
                                                30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,
                                                50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,
                                                30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,
                                                20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,
                                                20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,
                                                26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,
                                                50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,
                                                73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,
                                                79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,
                                                79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,
                                                71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,
                                                41.851 570.966,40.831 570.82,37.631">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div style="padding-top: 8px;"> 
                                <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; 
                                    font-weight:550; line-height:18px;">View this post on Instagram</div>
                            </div>
                            <div style="padding: 12.5% 0;"></div> 
                            <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                <div> 
                                    <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; 
                                        transform: translateX(0px) translateY(7px);">
                                    </div> 
                                    <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) 
                                        translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; 
                                        margin-left: 2px;">
                                    </div> 
                                    <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; 
                                        transform: translateX(9px) translateY(-18px);">
                                    </div>
                                </div>
                                <div style="margin-left: 8px;"> 
                                    <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; 
                                        width: 20px;">
                                    </div>
                                    <div style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4;
                                        border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                    </div>
                                </div>
                                <div style="margin-left: auto;">
                                    <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> 
                                    <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> 
                                    <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                </div>
                            </div> 
                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                            </div>
                        </a>
                        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; 
                            padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                            <a href="https://www.instagram.com/reel/C4yMxivo2u4/?utm_source=ig_embed&amp;utm_campaign=loading" 
                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; 
                                line-height:17px; text-decoration:none;" target="_blank">A post shared by Ian Gitonga (@ianjecinta)
                            </a>
                        </p>
                    </div>
                </blockquote>
                
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

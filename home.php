<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/like_post.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouthStory</title>
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="assets/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!--================= Bootstrap V5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--================= Font Awesome 5 CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!--================= Magnific popup Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!--================= Swiper Slider Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
    <!--================= Mobile Menu Plugin =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/metisMenu.css">
    <!--================= Main Menu CSS =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/rtsmenu.css">
    <!--================= Main Stylesheet =================-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  
  <style>
    .glowing-circle {
      width: 100px;
      height: 100px;
      background-color: #C51F16;
      border-radius: 50%;
      box-shadow: 0 0 30px rgba(197, 31, 22, 0.8); /* Enhanced glow effect */
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-size: 38px; /* Adjust the font size as needed */
      font-weight: bold;
      text-transform: lowercase;
      font-family: 'Montserrat', sans-serif;
      animation: bounceUpDown 2s infinite ease-in-out; /* Slower and more realistic animation */
    }
    
    .link {
      text-decoration: none; /* Remove underline from link */
      color: inherit; /* Inherit text color from parent */
    }

    .pannel{
        height: 100px;
  position: relative;

    }
    .loginpannel {
  height: 50px;
  width: 150px;
  top: 40%;
  left: 30%;
  position: relative;
  text-align: center;
  border: 5px solid #ce182a;
  border-radius: 12px;

}

.loginsystem{
margin-top: 6px;
}

.loginpannel1 {
  height: 50px;
  width: 200px;
  top: 40%;
  left: 25%;
  position: relative;
  text-align: center;
 
}

    </style>
  
  
    <script src="https://kit.fontawesome.com/adafcc40c4.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--================= Preloader Section Start Here =================-->
    
    

    <div id="rts__preloader">
        <div class="glowing-circle">
            d2d
          </div>
     
    </div>
    <!--================= Preloader End Here =================-->

    <!--================= Header Section Start Here =================-->
    <div class="anywere"></div>
    <header id="rtsHeader">
        <div class="topbar-area">
            <div class="container">
                <div class="topbar-inner">
                    <div class="right-part">
                        <div class="quick-weather">
                            <span class="weather-tempreture"><img src="assets/images/icons/weather.svg"
                                    alt="weather-icon"> 30 <span>C</span>
                            </span>
                            <span class="weather-location">India</span>
                        </div>
                        
                    </div>
                    <ul class="social-links">
                        <li> <a href="#" class="platform"><i class="fa-brands fa-youtube"></i></a></li>
                        <li> <a href="#" class="platform"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li><a href="#" class="platform"><i class="fab fa-linkedin-in"></i></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-sticky">
            <div class="navbar-part navbar-part2">
                <div class="container">
                    <div class="navbar-inner">
                        <a href="index.html" class="logo">
                            <img class="logo-default" src="assets/images/icons/logodark.png" alt="Logo" >
                            <img class="logo-dark" src="assets/images/icons/logowhite.png" alt="Logo" >
                                
                            </a>
                        <div class="rts-menu rts-menu1 m-0">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="dropdown"><a class="menu-item item-1 item-2 active" href="#">Home</a>
                                        <ul class="drop scnd-lvl">
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1"
                                                    href="index.html">Homepage 1</a></li>
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1"
                                                    href="index-two.html">Homepage 2</a></li>
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1"
                                                    href="index-three.html">Homepage 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="menu-item item-2" href="#">Recents</a>
                                        <ul>
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1"
                                                    href="news-details.html">News Style 1</a></li>
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1"
                                                    href="news-details2.html">News Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="menu-item item-2" href="#">Pages</a>
                                        <ul class="dropdown-sub">
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1" href="author.html">Author</a></li>
                                            <li class="flyout-right1 flyout"><a class="flyout-link-1" href="team.html">Team</a></li>
                                            <li class="flyout-right1 dropdown"><a class="flyout-link-1" href="#">Catagory Details</a>
                                                <ul class="sub-flyout">
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            href="catagory-details.html">Catagory Style 1</a>
                                                    </li>
                                                    <li class="flyout1 flyout2"><a class="flyout-sub-link1"
                                                            hresf="catagory-details2.html">Catagory Style 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item item-2" href="fashion.html">Fashion</a></li>
                                    <li><a class="menu-item item-2" href="lifestyle.html">Feature yourself</a></li>
                                    <li><a class="menu-item item-2" href="sports.html">Join Us</a></li>
                                    <li><a class="menu-item item-2" href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-action-items header-action-items-2 header-action-items-first">
                            <div class="search-part-2 d-flex">
                                
                            </div>
                        </div>
                        <div class="header-action-items header-action-items-2 header-action-items-last">
                            <div class="search-part m-0">

                            <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
               $count_user_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
               $count_user_comments->execute([$user_id]);
               $total_user_comments = $count_user_comments->rowCount();
               $count_user_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
               $count_user_likes->execute([$user_id]);
               $total_user_likes = $count_user_likes->rowCount();
         ?>
                                <div class="search-icon"><a href="update.php"><i class="fa-solid fa-user"></i></a></div>
                                <?php
            }else{
         ?>


<div class="search-icon"><a href="login.php"><i class="fa-solid fa-user"></i></a></div>

<?php
          }
         ?>
                            </div>
                        </div>
                        <a class="hamburger m-0" href="#"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="offset-sidebar">
                <a class="hamburger mobile-hamburger ml--30" href="#"><span></span></a>
                <div class="offset-widget offset-logo mb-30">
                    <a href="index.html">
                        <img src="assets/images/icons/logodark.png" alt="logo">
                    </a>
                </div>
            </div>
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
          
                <ul id="mobile-menu-active">
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home </a></li>
                            <li><a href="index-two.html">Home </a></li>
                            <li><a href="index-three.html">Home </a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="news-details.html">News</a>
                        <ul class="sub-menu">
                            <li><a href="news-details.html">News </a></li>
                            <li><a href="news-details2.html">News </a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="index.html">Join Us</a>
                        <ul class="sub-menu">
                            <li><a href="author.html">Author</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li class="has-dropdown thirdlvl">
                                <a class="mm-link-3" href="services.html">Catagory </a>
                                <ul class="sub-menu">
                                    <li><a href="catagory-details.html">Catagory </a></li>
                                    <li><a href="catagory-details2.html">Catagory </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                   
                    <li><a class="mm-link" href="update.php"> NEW </a></li>
                   
                    <li><a class="mm-link" href="login.php">Login</a></li>
                    
       
                    <li><a class="mm-link" href="lifestyle.html">Feature yourself</a></li>
                    <li><a class="mm-link" href="sports.html">Meet Our Team</a></li>
                    <li><a class="mm-link" href="contact.html">Contact Us</a></li>
                
                </ul>
              
                </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
        <!-- slide-bar end -->
        <div class="banner-2">
            <div class="swiper bannerSlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-single">
                            <div class="container">
                                <div class="banner-content">
                                  
                                   <!------ <div class="contents">
                                        <div class="content-title"><a href="news-details.html">Welcome to the YouthStory</a></div>
                                       
                                    </div>-->
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-navigation">
                <div class="swiper-button-prev nav-btn"><i class="fal
                            fa-angle-left"></i></div>
                <div class="swiper-button-next nav-btn"><i class="fal
                            fa-angle-right"></i></div>
            </div>
        </div>
    </header>












    <div class="topics">
        <div class="container">
            <div class="topics-inner">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3">
                        <div class="action">
                            <h2 class="topics-title">On Trending </h2>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="slider-area">
                            <div class="swiper noGapSlide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/images/topics/1.png"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">IT
                                                    News</h3>
                                                <p>7 Posts</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/images/topics/2.png"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Fashion</h3>
                                                <p>6 Posts</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/images/topics/3.png"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Technology</h3>
                                                <p>3 Posts</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/images/topics/4.png"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Magazine</h3>
                                                <p>5 Posts</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/images/topics/5.png"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Sports</h3>
                                                <p>4 Posts</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Header Section End Here =================-->


    <!--================= Trending Section Start Here =================-->
    <div class="rts-trending-section section-gap-2 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Trending Stories</h2>
                <div class="wide-border"></div>
                <div class="filter-buttons">
                    <div class="filter-btn filter-navigation-btn active" data-show=".technology">Technology</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".action">Institutional</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".racing">Startups</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".music">Inspiring</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".itnews">Music</div>
                </div>
            </div>
            <div class="rts-post-area technology">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large ">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/images/trending/1.png" alt="main-post-image"></a></div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                    mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/4.png" alt="main-post-image"></a></div>
                                  
                                </div>
                            </div>
                         <!----   <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                   ">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/5.png" alt="main-post-image"></a></div>
                                    
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="rts-post-area action hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large ">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/images/trending/3.png" alt="main-post-image"></a></div>
                           
                        </div>
                    </div>
                    <!-----
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/3.png" alt="main-post-image"></a></div>
                                  
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/1.png" alt="main-post-image"></a></div>
                                   
                                </div>
                            </div>
                        </div>
                    </div> --->
                </div>
            </div>
            <div class="rts-post-area racing hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large ">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/images/trending/5.png" alt="main-post-image"></a></div>
                           
                        </div>
                    </div>
                   <!---- <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Technology</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                item"><img src="assets/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January 16, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                item"><img src="assets/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January 16, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="rts-post-area music hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large ">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/images/trending/2.png" alt="main-post-image"></a></div>
                            
                        </div>
                    </div>
                  <!-------- <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Technology</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                item"><img src="assets/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January 16, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                item"><img src="assets/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January 16, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>------>
                </div>
            </div>
            <div class="rts-post-area itnews hide">
                <div class="row">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!----<div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/images/trending/1.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Games</a>
                                <div class="post-title"><a href="news-details.html">Kanye west
                                        on why he bought house
                                        across from kim kardashian</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html" class="post-author
                                            item"><img src="assets/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/images/date.svg"
                                            alt="date-icon">January 16, 2022</span>
                                    <span class="post-date item"><img src="assets/images/share.svg" alt="date-icon">16
                                        Shares</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Technology</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                item"><img src="assets/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January 16, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                item"><img src="assets/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January 16, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Trending Section End Here =================-->


    <!--================= Updates Section Start Here =================-->
    <div class="rts-updates-section section-gap-2 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="col-xl-9">
                <div class="news-topbar news-topbar-2">
                    <h2 class="section-title">Latest Updates</h2>
                   
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-md-7">
                    <div class="rts-post-2 mb--30">
                        <div class="post-picture"><a href="news-details.html"><img src="assets/images/trending/1.png"
                                    alt="main-post-image"></a></div>
                        <div class="contents">
                            <a href="#0" class="news-catagory-tag-2">Programming</a>
                            <div class="post-title"><a href="news-details.html">Ayush Singh: Teen Coding Prodigy's Rise from Financial Struggles to Dual Start-Up Success, Mastering Data Science Challenges </a></div>
                            <div class="post-bottom-info">
                                <a href="author.html" class="post-author
                                        item"><img src="assets/images/user.svg" alt="user-icon">Aditi Shree</a>
                                <span class="post-date item"><img src="assets/images/date.svg" alt="date-icon">February
                                    1, 2024</span>
                                
                            </div>
                            <p>Meet Ayush Singh is a remarkable individual whose coding journey began during the COVID-19 lockdown. Driven by a dual passion for programming and a desire to support his family, Ayush delved into the world of code, overcoming challenges and turning them into stepping stones toward success in both programming and entrepreneurship</p>
                            <a href="#0" class="read-more-btn">Read more</a>
                        </div>
                    </div>
                   


                <div class="col-xl-4 col-md-5 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                            <div class="rts-post-2 rts-post-medium rts-post-2-medium mb--30">
                                <div class="post-picture"><a href="news-details.html"><img
                                            src="assets/images/trending/2.png" alt="main-post-image"></a></div>
                                <div class="contents">
                                    <a href="#0" class="news-catagory-tag-2">Community</a>
                                    <div class="post-title"><a href="news-details.html">Bihar Youth for Child Rights: Meet Priyaswara Bharti who empowers Youth through awareness & films.</a></div>
                                    <div class="post-bottom-info">
                                        <a href="author.html" class="post-author
                                                item"><img src="assets/images/user.svg" alt="user-icon">Priyanshi</a>
                                        <span class="post-date item"><img src="assets/images/date.svg"
                                                alt="date-icon">January
                                            1, 2024</span>
                                       
                                    </div>
                                    <p>Meet Priyaswara Bharti, a young girl from Gopalganj, Bihar, who is making a big difference in the world. Her journey began with a simple desire to help others, and it has taken her from advocating for child rights in her local community to creating impactful documentaries that are changing mindsets around the globe.</p>
                                    <a href="#0" class="read-more-btn">Read more</a>
                                </div>
                            </div>
                        </div>

<!----
                        
                <div class="col-xl-4 col-md-5 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                            <div class="rts-post-2 rts-post-medium rts-post-2-medium mb--30">
                                <div class="post-picture"><a href="news-details.html"><img
                                            src="assets/images/trending/3.png" alt="main-post-image"></a></div>
                                <div class="contents">
                                    <a href="#0" class="news-catagory-tag-2">Learning</a>
                                    <div class="post-title"><a href="news-details.html">100% scholarship, International Impact Award winner: Meet Ariba Khan, who defied odds and soared to success!  Her journey from Noida to ...</a></div>
                                    <div class="post-bottom-info">
                                        <a href="author.html" class="post-author
                                                item"><img src="assets/images/user.svg" alt="user-icon">Aditi Shree</a>
                                        <span class="post-date item"><img src="assets/images/date.svg"
                                                alt="date-icon">December
                                            29, 2023</span>
                                       
                                    </div>
                                    <p>Meet Ariba Khan's, her journey from Noida to the University of British Columbia (UBC) is a perfect example of how determined young people can achieve great things. Ariba is a freshman at UBC, and her story is all about being strong, never giving up, and following her passions. In a special interview, she tells us about the ups and downs of her incredible journey and shares valuable advice for students who want to study abroad.</p>
                                    <a href="#0" class="read-more-btn">Read more</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                            <div class="rts-post-2 rts-post-medium rts-post-2-medium">
                                <div class="post-picture"><a href="news-details.html"><img
                                            src="assets/images/trending/4.png" alt="main-post-image"></a></div>
                                <div class="contents">
                                    <a href="#0" class="news-catagory-tag-2">Personality</a>
                                    <div class="post-title"><a href="news-details.html">Meet Manishka Dubey, 10 y/o Child Prodigy Invented a Safety Band for Kids which also get recognisation by National...</a></div>
                                    <div class="post-bottom-info">
                                        <a href="author.html" class="post-author
                                                item"><img src="assets/images/user.svg" alt="user-icon">Aditi Shree</a>
                                        <span class="post-date item"><img src="assets/images/date.svg"
                                                alt="date-icon">December
                                            23, 2023</span>
                                       
                                    </div>
                                    <p>Meet Manishka Dubey, 1O-year old innovator from Dehradun. Her innovation “The Children’s Safety Band” has received sesveral appreciation and awards. Many Children’s Magazine have talked about her. Let’s know about her innovations, inspiration and interests in breif. </p>
                                    <a href="#0" class="read-more-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div></div>
                    --> </div>
                </div>
                </div>
                <div class="col-xl-3">
                    <div class="side-content sticky-content">
                        <div class="row">

                            <div class="col-xl-12 col-md-6">
                                <div class="popular-stories mb--50">
                                    <h3 class="side-content-title">Popular Stories</h3>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/images/popular/1.png" alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Fashion</div>
                                            <div class="post-title"><a href="news-details.html">Modern
                                                    construction latest
                                                    luxury model</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/images/date.svg" alt="date-icon">
                                                    October 16, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/images/popular/2.png" alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Audio
                                                music</div>
                                            <div class="post-title"><a href="news-details.html">Modern
                                                    construction latest
                                                    luxury model</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/images/date.svg" alt="date-icon">
                                                    November 16, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/images/popular/3.png" alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Audio
                                                music</div>
                                            <div class="post-title"><a href="news-details.html">Modern
                                                    construction latest
                                                    luxury model</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/images/date.svg" alt="date-icon">
                                                    January 16, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/images/popular/4.png" alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Audio
                                                music</div>
                                            <div class="post-title"><a href="news-details.html">Modern
                                                    construction latest
                                                    luxury model</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/images/date.svg" alt="date-icon">
                                                    January 16, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <ul class="social-popularity mb--50">
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-facebook-f facebook"></i>
                                            <span>347 Fans</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-twitter twitter"></i>
                                            <span>174 Followers</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-linkedin-in linkedin"></i>
                                            <span>126 Linkedin</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-dribbble dribbble"></i>
                                            <span>403 Followers</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-youtube youtube"></i>
                                            <span>214 Subscribers</span>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="rts-tags">
                                    <h3 class="side-content-title">Tags</h3>
                                    <ul>
                                        <li><a class="tag-item" href="#0">Techology</a></li>
                                        <li><a class="tag-item" href="#0">Travel</a></li>
                                        <li><a class="tag-item" href="#0">Community</a></li>
                                        <li><a class="tag-item" href="#0">Canada</a></li>
                                        <li><a class="tag-item" href="#0">Accessories</a></li>
                                        <li><a class="tag-item" href="#0">Beauty</a></li>
                                        <li><a class="tag-item" href="#0">Chemical</a></li>
                                        <li><a class="tag-item" href="#0">Business</a></li>
                                        <li><a class="tag-item" href="#0">IT Solution</a></li>
                                        <li><a class="tag-item" href="#0">Food</a></li>
                                        <li><a class="tag-item" href="#0">Painting</a></li>
                                        <li><a class="tag-item" href="#0">Personality</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <a class="view-more-news" href="#0">View More News<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--================= Updates Section End Here =================-->


    <!--================= Ad Section Start Here =================-->
    <div class="rts-ad-section wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="ad"><img src="assets/images/items/ad-banner1.png" alt="ad-banner"></div>
        </div>
    </div>
    <!--================= Ad Section End Here =================-->


    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Past Events</h2>
                <div class="wide-border"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="fa-solid fa-caret-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="fa-solid fa-caret-right"></i></div>
                </div>
            </div>
            <div class="swiper rts-cmmnSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="assets/images/videos/1.png" alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="https://www.youtube.com/live/8O-j-fbRL2U?si=0IbGUKG6DtoPEj_N&themeRefresh=1"
                                    target="_blank" class="video-tag red-tag">Music</a>
                                   
                                </div>
                            </div>
                            <div class="play-btn "><a 
                                    href="https://www.youtube.com/live/8O-j-fbRL2U?si=0IbGUKG6DtoPEj_N&themeRefresh=1"
                                target="_blank"><img src="assets/images/play-btn-2.svg"
                                        alt="play-btn"></a></div>

                            <div class="contents">
                                <div class="post-info">
                                    <div class="item"><span><img class="span-icon" src="assets/images/date.svg"
                                                alt="date-icon">7th January, 2024</span></div>
                                </div>
                                <a href="https://www.youtube.com/live/8O-j-fbRL2U?si=0IbGUKG6DtoPEj_N&themeRefresh=1" class="card-title" target="_blank" >Live SUFI Session: Embark on a soulful journey with Sufi sensation Tariq Faiz! Join our interactive online session filled with mesmerizing melodies, insightful talks, and surprises.</a>
                            </div>
                          
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="assets/images/videos/2.png" alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="https://youtu.be/vLuSDo-RYL0?si=yUlapFh6scuRFdIU" target="_blank"  class="video-tag red-tag">Music</a>
                                
                                </div>
                            </div>
                            <div class="play-btn "><a class="popup-video"
                                href="https://youtu.be/vLuSDo-RYL0?si=yUlapFh6scuRFdIU" target="_blank" ><img src="assets/images/play-btn-2.svg"
                                        alt="play-btn"></a></div>

                            <div class="contents">
                                <div class="post-info">
                                    <div class="item"><span><img class="span-icon" src="assets/images/date.svg"
                                                alt="date-icon">16th December, 2023</span></div>
                                </div>
                                <a href="https://youtu.be/vLuSDo-RYL0?si=yUlapFh6scuRFdIU" target="_blank" class="card-title">Live Music Session: Immerse yourself in the enchanting tunes that Harsh and Shreya have curated for you.</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="assets/images/videos/3.png" alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="#0" class="video-tag red-tag">Entrepreneurship</a>

                                </div>
                            </div>
                            <div class="play-btn "><a class="popup-video"
                                    href="https://www.youtube.com/live/MPrchJXOZkM?si=d6XzPXgFX3vywngD" target="_blank"
                                    data-effect="mfp-move-horizontal"><img src="assets/images/play-btn-2.svg"
                                        alt="play-btn"></a></div>

                            <div class="contents">
                                <div class="post-info">
                                    <div class="item"><span><img class="span-icon" src="assets/images/date.svg"
                                                alt="date-icon"> 15th November, 2023</span></div>
                                </div>
                                <a  href="https://www.youtube.com/live/MPrchJXOZkM?si=d6XzPXgFX3vywngD" target="_blank"class="card-title">Live Entrepreneurship Session: A game-changing session featuring Jogadu Kamlesh, the founder of KG Agritech, as seen on Shark Tank India Season 1. Meet our young speaker, Manishka Dubey, an innovative mind and the inventor of the Child Safety Band. </a>
                            </div>
                        </div>
                    </div>

                    <!---
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="assets/images/videos/8.jpg" alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="#0" class="video-tag red-tag">Animal</a>
                                    <a href="#0" class="video-tag red-tag">Life History</a>
                                </div>
                            </div>
                            <div class="play-btn play-video"><a class="popup-video"
                                    href="https://www.youtube.com/watch?v=hJHgxH7VSp4"
                                    data-effect="mfp-move-horizontal"><img src="assets/images/play-btn-2.svg"
                                        alt="play-btn"></a></div>

                            <div class="contents">
                                <div class="post-info">
                                    <div class="item"><span><img class="span-icon" src="assets/images/date.svg"
                                                alt="date-icon">June
                                            16,
                                            2022</span></div>
                                </div>
                                <a href="#0" class="card-title">According to eyewitness elephants ran for higher ground
                                    ahead.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="assets/images/comment.svg"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="assets/images/heart.svg"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="assets/images/share.svg" alt="date-icon">16
                                    Shares</span>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
             
            </div>
        </div>
    </div>
    <!--================= Featured video Section End Here =================-->


    <!--================= News Section Start Here =================-->
    <div class="rts-news-two-section section-gap-2 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Latest News</h2>
                <div class="wide-border"></div>
                <div class="filter-buttons">
                    <div class="filter-btn filter-navigation-btn active" data-show=".trendingnews">Trending News</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".recentsnews">Recents News</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-md-12 col-sm-12">
                    <div class="rts-post-area trendingnews">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="rts-post-2 rts-post-2-wide mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/latest/7.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">5 Personal Finance Tips
                                                Every
                                                Freelancer Should Know</a></div>
                                        <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet
                                            sagittis
                                            bibendum quisque turpis placerat.</p>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                            item"><img src="assets/images/user.svg" alt="user-icon">By
                                                Jenny
                                                Wilson</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January
                                                16, 2022</span>
                                        </div>
                                        <a href="#0" class="read-more-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="rts-post-2 rts-post-2-wide mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/latest/8.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">5 Personal Finance Tips
                                                Every
                                                Freelancer Should Know</a></div>
                                        <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet
                                            sagittis
                                            bibendum quisque turpis placerat.</p>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                            item"><img src="assets/images/user.svg" alt="user-icon">By
                                                Jenny
                                                Wilson</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January
                                                16, 2022</span>
                                        </div>
                                        <a href="#0" class="read-more-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="rts-post-2 rts-post-2-wide mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/latest/9.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">5 Personal Finance Tips
                                                Every
                                                Freelancer Should Know</a></div>
                                        <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet
                                            sagittis
                                            bibendum quisque turpis placerat.</p>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                            item"><img src="assets/images/user.svg" alt="user-icon">By
                                                Jenny
                                                Wilson</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January
                                                16, 2022</span>
                                        </div>
                                        <a href="#0" class="read-more-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="rts-post-2 rts-post-2-wide">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/images/latest/10.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">5 Personal Finance Tips
                                                Every
                                                Freelancer Should Know</a></div>
                                        <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet
                                            sagittis
                                            bibendum quisque turpis placerat.</p>
                                        <div class="post-bottom-info">
                                            <a href="author.html" class="post-author
                                                            item"><img src="assets/images/user.svg" alt="user-icon">By
                                                Jenny
                                                Wilson</a>
                                            <span class="post-date item"><img src="assets/images/date.svg"
                                                    alt="date-icon">January
                                                16, 2022</span>
                                        </div>
                                        <a href="#0" class="read-more-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-post-area recentsnews hide">
                        <div class="rts-post-2 rts-post-2-wide mb--20">
                            <div class="post-picture"><a href="news-details.html"><img src="assets/images/latest/7.jpg"
                                        alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html" class="post-author
                                                    item"><img src="assets/images/user.svg" alt="user-icon">By Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/images/date.svg"
                                            alt="date-icon">January
                                        16, 2022</span>
                                </div>
                                <a href="#0" class="read-more-btn">Read more</a>
                            </div>
                        </div>
                        <div class="rts-post-2 rts-post-2-wide mb--20">
                            <div class="post-picture"><a href="news-details.html"><img src="assets/images/latest/8.jpg"
                                        alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html" class="post-author
                                                    item"><img src="assets/images/user.svg" alt="user-icon">By Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/images/date.svg"
                                            alt="date-icon">January
                                        16, 2022</span>
                                </div>
                                <a href="#0" class="read-more-btn">Read more</a>
                            </div>
                        </div>
                        <div class="rts-post-2 rts-post-2-wide mb--20">
                            <div class="post-picture"><a href="news-details.html"><img src="assets/images/latest/9.png"
                                        alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html" class="post-author
                                                    item"><img src="assets/images/user.svg" alt="user-icon">By Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/images/date.svg"
                                            alt="date-icon">January
                                        16, 2022</span>
                                </div>
                                <a href="#0" class="read-more-btn">Read more</a>
                            </div>
                        </div>
                        <div class="rts-post-2 rts-post-2-wide">
                            <div class="post-picture"><a href="news-details.html"><img src="assets/images/latest/10.jpg"
                                        alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html" class="post-author
                                                    item"><img src="assets/images/user.svg" alt="user-icon">By Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/images/date.svg"
                                            alt="date-icon">January
                                        16, 2022</span>
                                </div>
                                <a href="#0" class="read-more-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="rts-post-2 rts-post-2-small rts-post-2-inside">
                                <div class="post-picture"><img src="assets/images/latest/11.jpg" alt="post-picture">
                                </div>
                                <div class="contents">
                                    <div class="news-catagory-tag-2">Fashion</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon" src="assets/images/date.svg"
                                                alt="date-icon">
                                            October 16, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-post-2 rts-post-2-small">
                                <div class="contents">
                                    <div class="news-catagory-tag-2-2">Travel</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a><a href="#" class="go-icon"><i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon" src="assets/images/date.svg"
                                                alt="date-icon">
                                            October 16, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-post-2 rts-post-2-small">
                                <div class="contents">
                                    <div class="news-catagory-tag-2-2">Technology</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a><a href="#" class="go-icon"><i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon" src="assets/images/date.svg"
                                                alt="date-icon">
                                            October 16, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-post-2 rts-post-2-small mb--20">
                                <div class="contents">
                                    <div class="news-catagory-tag-2-2">Robot</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a><a href="#" class="go-icon"><i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon" src="assets/images/date.svg"
                                                alt="date-icon">
                                            October 16, 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6">
                            <div class="newsletter">
                                <h2 class="newsletter-title">Get Newsletter</h2>
                                <p>Notification products, updates.</p>
                                <form class="form">
                                    <div class="input-div">
                                        <input type="email" placeholder="Enter email...">
                                    </div>
                                    <button class="subscribe-btn">Subscribe</button>
                                </form>
                                <div class="foating-elements">
                                    <div class="item1"><img src="assets/images/icons/floating-dots.svg"
                                            alt="floating-element">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <a class="view-more-news" href="#0">Read More Stories<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--================= News Section End Here =================-->


    <!--================= Gallery Section Start Here =================-->
    <div class="rts-gallery-section wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/images/gallery/popup/1.jpg" title="1.jpg">
                            <img src="assets/images/gallery/1.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/images/gallery/popup/2.jpg" title="2.jpg">
                            <img src="assets/images/gallery/2.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/images/gallery/popup/3.jpg" title="3.jpg">
                            <img src="assets/images/gallery/3.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/images/gallery/popup/4.jpg" title="4.jpg">
                            <img src="assets/images/gallery//4.png" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/images/gallery/popup/5.jpg" title="5.jpg">
                            <img src="assets/images/gallery/5.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/images/gallery/popup/6.jpg" title="6.jpg">
                            <img src="assets/images/gallery/6.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--================= Footer Start Here =================-->
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-logo"><img class="logo-default" src="assets/images/icons/logowhite.png" alt="logo">
                                <img class="logo-dark" src="assets/images/icons/logowhite.png"
                                    alt="logo">
                            </div>
                            <p class="text">Your Inspiring Story, Our Global Connection.</p>
                            <a href="sign-up.html" class="find-us">Find us here <i
                                    class="far fa-long-arrow-right"></i></a>
                            <ul class="social-links">
                                <li> <a href="#" class="platform platform-2"><i class="fa-brands fa-instagram"></i></a></li>
                                <li> <a href="#" class="platform platform-2"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li><a href="#" class="platform platform-2"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Categories</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item item-2"><a href="catagory-details.html">Fashion</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details2.html">Design</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details.html">Technology</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details2.html">Robot</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details.html">Racing</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details2.html">Music</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details.html">Travel</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details2.html">Politics</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details.html">Food</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details2.html">Health</a></li>
                                <li class="widget-list-item item-2"><a href="catagory-details.html">Sports</a></li>
                            </ul>
                        </div>
                    </div>
                    <!----<div class="col-xl-3 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">Entertainment</h3>
                        <ul class="footer-widget">
                            <li class="widget-list-item item-2"><a href="catagory-details2.html">Celebrity News</a></li>
                            <li class="widget-list-item item-2"><a href="catagory-details.html">Movies</a></li>
                            <li class="widget-list-item item-2"><a href="catagory-details2.html">Music News</a></li>
                            <li class="widget-list-item item-2"><a href="catagory-details.html">TV News</a></li>
                            <li class="widget-list-item item-2"><a href="catagory-details2.html">Entertainment Video</a></li>
                            <li class="widget-list-item item-2"><a href="catagory-details.html">Style News</a></li>
                        </ul>
                    </div>-->
                    <div class="col-xl-3 col-md-6 col-sm-6">
                       
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <span class="copyright">© 2024 All rights reserved <span class="separator">|</span> YouthStory</span>
            </div>
        </div>
    </div>
    <!--================= Footer End Here =================-->

        <!-- 
       Color switcher
    -->
    <div class="modal-sidebar-scroll rts-dark-light">
        <ul>
            <li><span>Dark</span><i class="rts-go-dark fa-regular fa-moon"></i></li>
            <li><span>Light</span><i class="rts-go-light far fa-sun"></i></li>
        </ul>
    </div>

    <!--================= Scroll to Top Start =================-->
    <div class="scroll-top-btn"><i class="fas fa-angle-up arrow-up"></i><i class="fas fa-circle-notch"></i></div>
    <!--================= Scroll to Top End =================-->

    <!--================= Jquery latest version =================-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <!--================= Bootstrap latest version =================-->
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <!--================= Wow.js =================-->
    <script src="assets/js/vendors/wow.min.js"></script>
    <!--================= Swiper Slider =================-->
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <!--================= Mobile Menu Plugin =================-->
    <script src="assets/js/vendors/metisMenu.min.js"></script>
    <!--================= Main Menu Plugin =================-->
    <script src="assets/js/vendors/rtsmenu.js"></script>
    <!--================= Magnefic Popup Plugin =================-->
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <!--================= Main Script =================-->
    <script src="assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    


<?php include 'components/footer.php'; ?>
</body>
</html>
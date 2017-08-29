<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>
        <?php 
            bloginfo('roooof');
        ?>
    </title>

    <!-- Style Sheet-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/fonts.css'; ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/meanmenu.css'; ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/owl.carousel.css'; ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/animate.css'; ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/swipebox.css'; ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/bootstrap.css'; ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/main.css'; ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-responsive.css'; ?>"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome.min.css'; ?>"/>


    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
 <!--   <link rel="shortcut icon" href="images/favicon.png" >-->

</head>
<header id="header" class="site-header" role="banner">
    <div class="header-responsive text-center"><i class="glyphicon glyphicon-chevron-down"></i></div>
    <div class="top-contact-info text-center clearfix">
        <div class="container">
            <div class="row">
                <div class="common col-lg-offset-1">
                    <span class="tel""><i class=" glyphicon glyphicon-earphone" style="margin-right: 10px; top:0px;"></i>+91 7736626820</span>
                </div>
                <div class="common">
                    <span class="email"><i class="glyphicon glyphicon-envelope" style="margin-right: 10px; top:0px;"></i><a href="mailto:info@alight.com">www.roofindia.com</a></span>
                </div>
               <!--- <div class="common">
                    <span class="schedule"><i class="fa fa-facebook" style="color:green;"></i>Mon-Fri 8am-6pm</span>
                </div>-->
				<!--<div class="common" style="float:right;"><i class="fa fa-facebook" style="color:#fff;"></i> </div>-->
				<div style="float:right;"> 
				        <ul class="social-nav clearfix">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google"></i></a></li>
                        </ul></div>
               <!--- <div class="search-wrap">
                    <div id="search" class="widget close-search clearfix" >
                        <form method="get" id="searchform" class="searchform clearfix" action="#">
                            <div class="clearfix">
                                <input type="text" value="" name="s" id="s" placeholder="Search" />
                                <input type="submit" class="icon-search2" id="searchsubmit" value="" />
                            </div>
                        </form>
                    </div>
                </div>-->
            </div>
        </div>
    </div>



    <div class="main-slider clearfix">
        <div class="slides">
            <div class="item">
                <img class="bg-image" src="<?php echo get_template_directory_uri() . '/images/sl01.png'; ?>" alt="Image">
                <div class="slider-content clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="right-area clearfix">
								<img class="slider-image" src="<?php echo get_template_directory_uri() . '/images/s02.png'; ?>" alt="Slider Image" height=""/>
                                    <!--<h1>GAIN<br class="hidden-xs"><span>BEAUTIFUL</span><br class="hidden-xs"><span>RESULTS</span></h1>
                                    <p>Alight is best solution for your business</p>
                                    <a class="al-btn black-border al-md-btn" href="#">KNOW MORE</a>
                                    <a class="al-btn white-border al-md-btn" href="#">BUY NOW</a>-->
                                </div>
								
                               <!-- <div class="right-area clearfix">
                                    <img class="slider-image" src="images/slider-mobile-img.png" alt="Slider Image"/>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="item">
                <img class="bg-image" src="<?php echo get_template_directory_uri() . '/images/sl05.jpg'; ?>" alt="Image">
                <div class="slider-content clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="right-area clearfix">
								<img class="slider-image" src="<?php echo get_template_directory_uri() . '/images/s04.png'; ?>" alt="Slider Image" height=""/>
                                    <!--<h1>GAIN<br class="hidden-xs"><span>BEAUTIFUL</span><br class="hidden-xs"><span>RESULTS</span></h1>
                                    <p>Alight is best solution for your business</p>
                                    <a class="al-btn black-border al-md-btn" href="#">KNOW MORE</a>
                                    <a class="al-btn white-border al-md-btn" href="#">BUY NOW</a>-->
                                </div>
								
                               <!-- <div class="right-area clearfix">
                                    <img class="slider-image" src="images/slider-mobile-img.png" alt="Slider Image"/>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="item">
                <img class="bg-image" src="<?php echo get_template_directory_uri() . '/images/sl06.jpg'; ?>" alt="Image">
                <div class="slider-content clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="right-area clearfix">
								
                                  <h1><br class="hidden-xs"><span>UNDERSTANDING</span></h1><br>
								  <h1 style="font-size:20px;"><br class="hidden-xs"><span>CREATIVE PEOPLE BUILDING VALUE</span></h1>
                                  <!-- <p>Alight is best solution for your business</p>
                                    <a class="al-btn black-border al-md-btn" href="#">KNOW MORE</a>
                                    <a class="al-btn white-border al-md-btn" href="#">BUY NOW</a>-->
                                </div>
								
                               <!-- <div class="right-area clearfix">
                                    <img class="slider-image" src="images/slider-mobile-img.png" alt="Slider Image"/>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--  <div class="item">
                <img class="bg-image" src="images/sl02.jpg" alt="Image">
                <div class="slider-content clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="left-area no-image clearfix">
                                    <h1>BE CREATIVE<br class="hidden-xs"><span class="blue">THINK UNIQUE</span><br class="hidden-xs"><span class="blue">BE UNIQUE</span></h1>
                                    <p>Alight is best solution for your business</p>
                                    <a class="al-btn black-border al-md-btn" href="#">KNOW MORE</a>
                                    <a class="al-btn white-border al-md-btn" href="#">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
			
 <div class="item">
                <img class="bg-image" src="<?php echo get_template_directory_uri() . '/images/sl07.jpg'; ?>" alt="Image">
                <div class="slider-content clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="left-area clearfix">
                                    <h1><br class="hidden-xs"><span>BUILDING</span> 
								<br class="hidden-xs"><span>THE NEW WORLD</span></h1>
                                    <!--<p>Alight is best solution for your business</p>
                                    <a class="al-btn black-border al-md-btn" href="#">KNOW MORE</a>
                                    <a class="al-btn white-border al-md-btn" href="#">BUY NOW</a>-->
                                </div>
                                <div class="right-area clearfix">
                                   <!-- <img class="slider-image-two" src="images/slider-mobile-img2.png" alt="Slider Image"/>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--banner-end-->


    <div id="sticky-header" class="navigation-area clearfix">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 text-center for-big-logo">
                    <div class="logo-wrapper  clearfix">
                        <a class="logo" href="index.html"><img src="<?php echo get_template_directory_uri() . '/images/logo.jpg'; ?>" alt="" style="height: 60px;"/></a>
                        <!--<a class="text-logo" href="index.html">ALIGHT</a>-->
                    </div>
                </div>
                <div class="col-lg-2 for-small-logo">
                    <div class="logo-wrapper big-logo clearfix">
                        <a class="logo" href="index.html"><img src="<?php echo get_template_directory_uri() . '/images/logo.jpg'; ?>" alt="" style="height: 60px;"/></a>
                        <!--<a class="text-logo" href="index.html">ALIGHT</a>-->
                    </div>
                </div>

                <div class="col-lg-10">
                    
                     
    <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
  <!--   <div class="skip-link screen-reader-text">
        <a title="Skip to content" href="#content">Skip to content</a>
    </div> -->
   
    <?php
    wp_nav_menu( array( 'container_class' => 'navigation main-menu clearfix', 'theme_location' => 'roof-india' ) ); 
    ?>
    
<!-- .main -->
                    <!-- <nav class="navigation main-menu clearfix" role="navigation">
                        <ul class="nav nav-justified">
                            <li>
                                <a href="index.html">HOME</a>
                                <ul class="sub-menu">
                                    <li><a href="#">BLUE VARIATION</a></li>
                                    <li><a href="#">RED VARIATION</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">PORTFOLIO</a>
                                <ul class="sub-menu">
                                    <li><a href="#">PORTFOLIO 1</a></li>
                                    <li><a href="#">PORTFOLIO 2</a></li>
                                    <li><a href="#">PORTFOLIO 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">OUR TEAM</a></li>
                            <li>
                                <a href="#">SERVICES</a>
                                <ul class="sub-menu">
                                    <li><a href="#">SINGLE</a></li>

                                </ul>
                            </li>
                            <li><a href="#">CONTACT</a></li>
                           <li>
                                <a href="#">PAGES</a>
                                <ul class="sub-menu">
                                    <li><a href="#">SHORTCODES</a></li>
                                    <li><a href="#">404 PAGE</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav> -->
                </div>
                <!--- <div class="col-lg-2">

                   <div class="social-icons clearfix">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook" style="color: #323232;"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>-->

                </div>
                <div id="main-menu-wrap" class="clearfix"></div>
            </div>
        </div>
    </div>
</header>
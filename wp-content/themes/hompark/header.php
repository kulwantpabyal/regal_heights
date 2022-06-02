<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#282828"/>
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/animate.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/fancybox.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/odometer.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/swiper.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

</head>
<body>
<div class="preloader">
  <div class="layer"></div>

  <div class="inner">
    <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/preloader.gif" alt="Image"></figure>
    <p><span class="text-rotater" data-text="Homepark | Elements | Loading">Loading</span></p>
  </div>
 
</div>
<!-- end prelaoder -->
<div class="transition-overlay">
  <div class="layer"></div>
</div>
<!-- end transition-overlay -->
<div class="side-navigation">
  <div class="menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary') );?>

  </div>
  <!-- end menu -->
  <div class="side-content">
    <figure> <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/05/Artboard-12x.png" alt="Image"> </figure>
    <p>By aiming to take the life quality to an upper level with the whole realized Projects, Regal Heights continues to be the address of luxury.</p>
  
    <address>
   Regal heights, GH-11D, sector 91,JLPL, Mohali
    </address>
    <h6>+91-7710380077</h6>
    <p><a href="#">hello@homepark.com.ua</a></p>
    <ul class="social-media">
      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
      <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
    <small>© <?php echo date("Y");?> Regal Heights | Real Estate & Luxury Homes</small> </div>
  <!-- end side-content --> 
</div>
<!-- end side-navigation -->
<nav class="navbar">
  <div class="container">
    <div class="upper-side">
      <div class="logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/05/Artboard-12x.png" alt="Image"></a> </div>
      <!-- end logo -->
     
         <div class="phone-email"> 
        <h4>+91-7710380077</h4>
        <small><a href="mailto:develop@regalheights91.com">develop@regalheights91.com</a></small> </div>
      <!-- end phone -->
      <div class="language">  <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-phone.png" alt="Image"></div>
      <!-- end language -->
      <div class="hamburger"> <span></span> <span></span> <span></span><span></span> </div>
      <!-- end hamburger --> 
    </div>
    <!-- end upper-side -->
 
          <?php wp_nav_menu( array( 'theme_location' => 'primary') );?>
  
    <!-- end menu --> 
  </div>
  <!-- end container --> 
</nav>

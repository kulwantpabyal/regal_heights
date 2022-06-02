<?php
 //Template name: home
?>

<?php get_header();
   ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/swiper.min.css">
<?php
   $args = array(
    'post_type' => 'slider',
     'post_status' => 'publish', 
        'order' => 'DEsc', 
   
   
   );
   
   $slides = get_posts( $args );
   $wp_query = new WP_Query($args);
   
   ?>
<header class="slider">
   <div class="slider-container">
      <div class="swiper-wrapper">
         <?php
            $c = 0;
            $class = '';
            
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                $c++;
            
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
                $url = $thumb['0'];
            
                $class = ($c == 1) ? 'active' : '';
                    ?>
         <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
         <div class="swiper-slide" data-background="<?php echo $url;?> ">
            <div class="container">
               <h1><?php echo the_title();?></h1>
               <?php echo the_content();?>
            </div>
         </div>
         <?php
            endwhile;endif;
            wp_reset_query();
            ?>
      </div>
      <!-- Add Pagination -->
      <div class="inner-elements">
         <div class="container">
            <div class="pagination"></div>
            <!-- end pagination -->
            <div class="button-prev">PREV</div>
            <!-- end button-prev -->
            <div class="button-next">NEXT</div>
            <!-- end button-next -->
            <div class="social-media">
               <h6>SOCIAL MEDIA</h6>
               <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-google"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
               </ul>
            </div>
            <!-- end social-media --> 
         </div>
         <!-- end container --> 
      </div>
      <!-- end inner-elements --> 
   </div>
   <!-- end slider-container --> 
</header>
<section class="intro">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <figure>
               <div class="pattern-bg" data-stellar-ratio="1.07"></div>
               <!-- end pattern-bg -->
               <div class="holder" data-stellar-ratio="1.10"> <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/05/WhatsApp-Image-2021-12-12-at-5.09.50-PM.jpeg" alt="Image"></div>
               <!-- end holder --> 
            </figure>
         </div>
         <!-- end col-6 -->
         <div class="col-lg-6 wow fadeInUp">
            <div class="content-box">
               <b>01</b>
               <h4><span>Regal Heights</span> Construction LLC</h4>
               <h3>Living spaces for creative peoples</h3>
               <p>The smaller male cones release pollen, 
                  which fertilizes the female 
               </p>
               <a href="<?php echo get_home_url(); ?>/sales-offices/"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-m2.png" alt="Image">See our Offices</a> 
            </div>
            <!-- end content-box --> 
         </div>
         <!-- edn col-6 --> 
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 
</section>
<!-- end intro -->
<!-- <section class="logos">
   <div class="container">
     <div class="row">
       <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0s">
         <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo01.jpg" alt="Image">
           <h6>TABLE</h6>
         </figure>
       </div>
     
       <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.05s">
         <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo02.jpg" alt="Image">
           <h6>PLANE</h6>
         </figure>
       </div>
      
       <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.10s">
         <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo03.jpg" alt="Image">
           <h6>CONNECT</h6>
         </figure>
       </div>
      
       <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.15s">
         <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo04.jpg" alt="Image">
           <h6>GLASSES</h6>
         </figure>
       </div>
      
       <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.20s">
         <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo05.jpg" alt="Image">
           <h6>PIXEL</h6>
         </figure>
       </div>
      
       <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.25s">
         <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo06.jpg" alt="Image">
           <h6>ATTACH</h6>
         </figure>
       </div>
   
     </div>
   
   </div>
   
   </section> -->
<!-- end logos -->
<section class="benefits">
   <div class="container">
      <div class="row">
         <div class="col-12 wow fadeInUp">
            <b>02</b>
            <h4><span>Regal Heights</span> Property</h4>
            <h3>Decorated Flats in Regal Heights </h3>
         </div>
         <!-- end col-12 -->
         <div class="col wow fadeInUp" data-wow-delay="0s">
            <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-benefits01.png" alt="Image"> <b></b> </figure>
            <h6>Near to Subway</h6>
            <span class="odometer" data-count="28" data-status="yes">0</span> <span class="extra">min</span> 
         </div>
         <!-- end col -->
         <div class="col wow fadeInUp" data-wow-delay="0.05s">
            <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-benefits02.png" alt="Image"> <b></b> </figure>
            <h6>Flats in Regal Heights</h6>
            <span class="odometer" data-count="32" data-status="yes">0</span> <span class="extra">+</span> 
         </div>
         <!-- end col -->
         <div class="col wow fadeInUp" data-wow-delay="0.10s">
            <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-benefits03.png" alt="Image"> <b></b> </figure>
            <h6>Spaces in Regal Heights</h6>
            <span class="odometer" data-count="15" data-status="yes">0</span> <span class="extra">%</span> 
         </div>
         <!-- end col -->
         <div class="col wow fadeInUp" data-wow-delay="0.15s">
            <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-benefits04.png" alt="Image"> <b></b> </figure>
            <h6>Working From Last</h6>
            <span class="odometer" data-count="3" data-status="yes">0</span> <span class="extra">years</span> 
         </div>
         <!-- end col -->
         <div class="col wow fadeInUp" data-wow-delay="0.20s">
            <figure> <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-benefits05.png" alt="Image"> <b></b> </figure>
            <h6>Area Per Square Metre</h6>
            <span class="odometer" data-count="79" data-status="yes">0</span> <span class="extra">m²</span> 
         </div>
         <!-- end col --> 
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 
</section>
<!-- end benefits -->
<section class="recent-gallery">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-5 wow fadeInUp">
            <b>03</b>
            <h4><span>Property</span> Inner Gallery</h4>
            <h3>Luxury Living Spaces in Regal Heights </h3>
            <a href="<?php echo get_home_url(); ?>/gallery" class="link">SEE ALL GALLERY <i class="fas fa-caret-right"></i></a> 
         </div>
         <!-- end col-5 -->
         <div class="col-lg-7">
            <div class="row inner">
               <div class="col-md-4 wow fadeInUp" data-wow-delay="0s">
                  <figure data-stellar-ratio="1.07"> <a href="<?php bloginfo('template_directory'); ?>/assets/images/gall3.jpeg" data-fancybox><img src="<?php bloginfo('template_directory'); ?>/assets/images/img/gall3.jpeg" alt="Image"></a> </figure>
               </div>
               <!-- end col-4 -->
               <div class="col-md-4 wow fadeInUp" data-wow-delay="0.05s">
                  <figure data-stellar-ratio="1.15"> <a href="<?php bloginfo('template_directory'); ?>/assets/images/gall2.jpg" data-fancybox><img src="<?php bloginfo('template_directory'); ?>/assets/images/img/gall2.jpeg" alt="Image"></a> </figure>
               </div>
               <!-- end col-4 -->
               <div class="col-md-4 wow fadeInUp" data-wow-delay="0.10s">
                  <figure data-stellar-ratio="1.04"> <a href="<?php bloginfo('template_directory'); ?>/assets/images/img/gall3.jpg" data-fancybox><img src="<?php bloginfo('template_directory'); ?>/assets/images/img/gall3.jpeg" alt="Image"></a> </figure>
               </div>
               <!-- end col-4 --> 
            </div>
            <!-- end row --> 
         </div>
         <!-- end col-7 --> 
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 
</section>
<!-- end recent-gallery -->
<section class="property-calculator">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <figure>
               <div class="pattern-bg" data-stellar-ratio="1.03"></div>
               <!-- end pattern-bg -->
               <div class="holder" data-stellar-ratio="1.07"> <img src="<?php bloginfo('template_directory'); ?>/assets/images/img/row-students-doing-exam.jpg" alt="Image"></div>
               <!-- end holder --> 
            </figure>
         </div>
         <!-- end col-6 -->
         <div class="col-lg-6 wow fadeInUp">
            <div class="content-box">
               <b>04</b>
               <h4><span>Banks</span> Providing Loan</h4>
               <h3>Here are the banks providing Home Loan. </h3>
              
               
                  <ul>
                  <li><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/06/2-Axis-Bank.jpg" alt="Image"></li>
                  <li><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/06/MUFG-Union-Bank-logo.jpg" alt="Image"></li></ul><ul>
                   <li><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/06/HDFC-Bank-Emblem.png" alt="Image"></li>
                    <li><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/06/icici-bank-vector-logo.png" alt="Image"></li>
                  </ul>
              
            </div>
            <!-- end content-box --> 
         </div>
         <!-- end col-6 --> 
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 
</section>
<!-- end property-calculator -->
<?php
   $args = array(
    'post_type' => 'flats',
     'post_status' => 'publish', 
        'order' => 'Desc', 
   
   
   );
   
   $slides = get_posts( $args );
   $wp_query = new WP_Query($args);?>
<section class="property-plans">
   <div class="container">
      <div class="row align-items-center"><b>05</b>
         <!-- end col-6 -->
         <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.05s">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
               <?php
                  $c = 0;
                    $class = '';
                    
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        $c++;
                  
                       
                  
                        $class = ($c == 1) ? 'active' : '';
                            ?>
               <li class="nav-item "> <a class="nav-link <?php echo $class;?>" data-toggle="pill" href="#tab-<?php echo  the_ID();?>">
                  <?php echo  the_title();?>
                  </a> 
               </li>
               <?php
                  endwhile;endif;
                  
                  ?>
            </ul>
            <div class="tab-content">
               <?php
                  $c1 = 0;
                    $class1 = '';
                    
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        $c1++;
                  
                  
                  
                        $class1 = ($c1 == 1) ? 'show active' : '';
                            ?>
               <div class="tab-pane fade <?php echo $class1;?>" id="tab-<?php echo the_ID();?>">
                  <div class="row">
                     <div class="col-lg-6 wow fadeInUp">
                        <?php
                           echo the_content();?>
                     </div>
                     <div class="col-lg-6 wow fadeInUp">
                        <figure>
                           <?php echo the_post_thumbnail(); ?>
                        </figure>
                     </div>
                  </div>
               </div>
               <?php
                  endwhile;endif;
                  wp_reset_query();
                  ?>
            </div>
            <!-- end tab-contnet --> 
         </div>
         <!-- end col-6 --> 
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 
</section>
<!-- property-plans -->
<section class="get-consultation" data-background="<?php bloginfo('template_directory'); ?>/assets/images/img/bg3333.jpg" data-stellar-background-ratio="0.9">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-8 fadeInUp wow">
            <div class="content-box">
               <b>06</b>
               <h4><span>Regal Heights</span> Living Spaces</h4>
               <h3>Are you interested to Regal Heights</h3>
               <p>The sun collectors, shall provide the electricity of the social areas of the site and shall do its part for protecting the environment.</p>
               <a href="<?php echo get_home_url(); ?>/contact-us/">SCHEDULE A VISIT <i class="fas fa-caret-right"></i></a> 
            </div>
            <!-- end content-box --> 
         </div>
         <!-- end col-6 --> 
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 
</section>
<!-- end get-consultation -->


<?php
   $args = array(
    'post_type' => 'testimonials',
     'post_status' => 'publish', 
        'order' => 'ASC', 
   
   
   );
   
   $slides = get_posts( $args );
   $wp_query = new WP_Query($args);?>
<section class="recent-posts">
   <div class="container">
      <div class="row">
         <div class="col-12 wow fadeInUp">
            <b>07</b>
            <h4><span>Regal Heights</span> Testimonials</h4>
          
         </div>
         <!-- end col-12 -->
         <?php     if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class="col-lg-4 wow fadeInUp" data-wow-delay="0s">
            <div class="post-box">
               <figure><?php echo the_post_thumbnail();?></figure>
             
               <h6><?php echo the_title();?> </h6>
               <p><?php echo the_content();?>
               </p>
            </div>
            <!-- end post-box --> 
         </div>
          <?php
                  endwhile;endif;
                  wp_reset_query();
                  ?>
      
         <!-- end col-4 --> 
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 



</section>
<!-- end recent-posts -->
<section class="property-customization">
   <div class="video-bg">
      <video src="<?php bloginfo('template_directory'); ?>/assets/videos/video01.mp4" loop autoplay muted></video>
   </div>
   <!-- end video-bg -->
   <div class="container">
      <div class="row">
         <div class="col-12 wow fadeInUp">
            <b>08</b>
            <h4><span>Regal Heights</span> Brands Associated with</h4>
            
         </div>
      <?php
   $args = array(
    'post_type' => 'brand_logos',
     'post_status' => 'publish', 
        'order' => 'DEsc', 
   
   
   );
   
   $slides = get_posts( $args );
   $wp_query = new WP_Query($args);
      if ( have_posts() ) : while ( have_posts() ) : the_post();?>
       
         <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0s">
        <figure data-toggle="tooltip" data-placement="top" title="The smaller male cones release pollen, which fertilizes">  <?php echo the_post_thumbnail();?>
          <figcaption> <?php echo the_title();?></figcaption>
        </figure>
      </div>
           <?php
            endwhile;endif;
            wp_reset_query();
            ?> 

      <!-- end col-2 -->
      
      </div>
      <!-- end row --> 
   </div>
   <!-- end container --> 
</section>
<?php get_footer();?>
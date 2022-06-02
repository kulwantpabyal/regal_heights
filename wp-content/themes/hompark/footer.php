<section class="footer-bar">
  <div class="container">
    <div class="inner wow fadeIn">
      <div class="row">
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
          <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-icon01.png" alt="Image"></figure>
          <h3>Address Infos</h3>
          <p>Regal heights, GH-11D, <br>Sector 91,JLPL, Mohali</p>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
          <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-icon02.png" alt="Image"></figure>
          <h3>Working Hours</h3>
          <p>Monday to Friday <strong>09:00</strong> to <strong>18:30</strong> <br>
            Saturday we work until <strong>15:30</strong></p>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
          <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/footer-icon03.png" alt="Image"></figure>
          <h3>Sales Office</h3>
          <p>Regal heights, GH-11D, <br>Sector 91,JLPL,Mohali</p>
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end inner --> 
  </div>
  <!-- end container --> 
</section>
<!-- end footer-bar -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s"> <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/05/Artboard-12x.png" alt="Image" class="logo">
        <p>By aiming to take the life quality to an upper level with the whole realized Projects, Regal Heights continues to be the address of luxury.</p>
     
        <!-- end select-box --> 
      </div>
      <!-- end col-4 -->
      <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.10s">
        <div class="footer-menu">
         
        <?php wp_nav_menu( array( 'theme_location' => 'primary') );?>
      </div>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.15s">

        <?php

$string = '
<div class="categories"><ul class="footer-menu" >';
$catlist = get_terms( 'category');
if ( ! empty( $catlist ) ) {

foreach ( $catlist as $key => $item ) {
  if($item->name != 'Uncategorized'){
$string .= '<li><a href="#">'. $item->name . '</a></li>';   
}
}

}
$string .= '</ul></div>';
  echo $string;
        ?>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.20s">
        <div class="contact-box">
          <h5>CALL CENTER</h5>
          <h3>+91-7710380077</h3>
          <p><a href="mailto:develop@regalheights91.com">develop@regalheights91.com</a></p>
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
        <!-- end contact-box --> 
      </div>
      <!-- end col-4 -->
      <div class="col-12"> <span class="copyright">© <?php echo date('Y');?> Regal Heights | Real Estate &amp; Luxury Homes</span> <span class="creation">Site created by <a href="#">Themezinho</a></span> </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>



  <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/swiper.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/fancybox.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/odometer.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/wow.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/text-rotater.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.stellar.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/isotope.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
  <!-- end container --> 
</footer>

</body>
</html>
<?php 
//Template name: about
  get_header();?>
  	 <?php   if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<header class="page-header" data-stellar-background-ratio="1.15">
	<div class="container">
		<h1><?php the_title();?></h1>
		<p>The smaller male cones release pollen, which fertilizes the female</p>
		  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Start</a></li>
    <li class="breadcrumb-item"><a href="#">Regal Heights</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Regal Heights</li>
  </ol>
	</div>
	<!-- end container -->
</header>
<!-- end page-header -->
<section class="about-content">
	<div class="container">
		<div class="row">
		
<?php the_content();?> 
          
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- end about-content -->
<?php
            endwhile;endif;
            wp_reset_query();
            ?>
<?php get_footer();?>
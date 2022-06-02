<?php
 // Template name: contact  
?>

<?php get_header();?>
 <?php   if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<!-- end navbar -->
<header class="page-header"  data-stellar-background-ratio="1.15">
	<div class="container">
		<h1><?php the_title();?></h1>
		<p>The smaller male cones release pollen, which fertilizes the female</p>
		  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Start</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
  </ol>
	</div>
	<!-- end container -->
</header>
<!-- end page-header -->
    
<?php the_content();?> 
          <?php
            endwhile;endif;
            wp_reset_query();
            ?>
<!-- end contact -->
<?php get_footer();?>
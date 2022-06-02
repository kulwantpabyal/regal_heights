<?php get_header()?>
<style>
	img{
    height: 100%;
}
</style>
<header class="page-header" data-stellar-background-ratio="1.15">
	<div class="container">
		<h1><?php the_title();?></h1>
		<p>The smaller male cones release pollen, which fertilizes the female</p>
		  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Start</a></li>
    <li class="breadcrumb-item"><a href="#">Regal Heights</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
  </ol>
	</div>
	<!-- end container -->
</header>
<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
?>
			<section class="top_header_slider1">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="container  ">	
     <h3>
	    <?php echo  the_title();?></h3>
    	<p><?php echo  the_content();?></p>
	    <?php echo  the_post_thumbnail();?>
    </div>

</article>
</section>
	<?php	}
	}

	?>

</main><!-- #site-content -->
<?php get_footer()?>
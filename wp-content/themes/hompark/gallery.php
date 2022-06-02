<?php 
// Template name: gallery
?>
<?php get_header(); ?>

<style>
	img.attachment-post-thumbnail.size-post-thumbnail.wp-post-image {
    /* width: 400px; */
    height: 300px;

}
</style>
<header class="page-header" data-background="images/slide01.jpg" data-stellar-background-ratio="1.15">
  <div class="container">
    <h1>Photo Gallery</h1>
    <p>The smaller male cones release pollen, which fertilizes the female</p>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Start</a></li>
      <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
    </ol>
  </div>
  <!-- end container --> 
</header>
<?php $loop = new WP_Query( array( 
    'post_type' => 'post_gallery', 
   
    'posts_per_page' => 10,

    'order' => 'DESC' // Ditto
) );

 ?>
<section class="photo-gallery">
  <div class="container">
    <div class="row">
    	<div class="col-12">


      <ul class="gallery-filter">
<?php $catlist = get_terms( 'category');
if ( ! empty( $catlist ) ) {

foreach ( $catlist as $key => $item ) {
if($item->name != 'Uncategorized'){
  ?>
 
    <li><a href="javascript:void(0);" data-filter=".<?php  echo $item->name;?>" class="<?php echo $class1;?>"><?php  echo $item->name;?></a></li>
<?php
}
}
}?>
</ul>

    		<ul class="gallery">
    			 <?php	while ( $loop->have_posts() ) : $loop->the_post();
    			 	   $category_detail = get_the_category( $id ,array( 'fields' => 'names' ) );
    			 	foreach( $category_detail as $cd ){?>

    			<li class="<?php  echo $cd->name;?>"><a href="images/gallery-thumb08.jpg" data-fancybox><?php echo the_POST_thumbnail();?></a></li>
    			<?php } endwhile;
                  wp_reset_query();
    			?>
    		</ul>
    	</div>
    	<!-- end col-12 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>

<?php get_footer(); ?>
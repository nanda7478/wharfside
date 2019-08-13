<?php
/*
 Display Template Name: Top Side Events
*/
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('header_banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1 class="big_heading">
  The Topside
 </h1>
</div>
</div>
</div>
<?php endwhile;?>

<div class="container">
 <div class="topside-page-section">
 <div class="row">
 	<div class="col-lg-12">
     <?php the_field('top_side_section');?>
 	</div>
 </div>
 </div>

 <div class="top-side-button-box">
 	<ul>
 	<li><a href="#" class="btn-2">Plan Your Event at the <strong>Gull’s View</strong></a></li>
 	<li><a class="btn-2" href="http://www.thesunsetballroom.com/">Plan Your Event at the <strong>Sunset Ballroom</strong></a></li>
 	<li><a class="btn-2" href="http://www.pointpleasantlobstershanty.com/">Plan Your Event <strong>Lobster Shanty</strong> Dining Room</a></li>
 	</ul>
 </div>


</div>


<div class="top-side-image-box">

<div class="row">
 <?php
   while( have_rows('top_side_image') ) : the_row();
 ?>
 <?php $image = get_sub_field('image', 'full'); ?>
	<div class="col-sm-6">
		<img src="<?php echo $image['url'];?>">
	</div>
<?php endwhile; ?>

</div>

</div>

<?php
get_footer();
?>
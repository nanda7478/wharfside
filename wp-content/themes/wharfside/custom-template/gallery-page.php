<?php
/*
 Display Template Name: Gallery Page
*/
 get_header();
 ?>
 
         
<script>
 jQuery(document).ready(function(){  
 
 setTimeout(function() { 
 var height = $('.ms-view').height();
         $('.ms-slide-info').css('top', height);
  }, 0);
     
         
 

      
     }); 
</script>
 
 <?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('header_banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1 class="big_heading">
  <?php the_title();?>
 </h1>
</div>
</div>
</div>
<?php endwhile;?>

 <div class="container">
 	<div class="gallery-page-section">
 		<div class="row">
 			<div class="col-lg-12">
 				<?php echo do_shortcode('[masterslider id="1"]');?>
 			</div>
 		</div>
 	</div>


 <div class="instagram-section">
  <div class="follow-section">
    <i class="fa fa-instagram"></i>
   <h5 class="style">Follow Wharfside On Instagram</h5>
   <a href="#">@wharfsidenj</a>
  </div>
  <?php echo do_shortcode('[instagram-feed]');?>

 </div>

 </div>

 <?php
 get_footer();
 ?>
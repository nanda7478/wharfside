<?php
/*
 Display Template Name: Contact Us
*/
get_header();
?>

 <?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('header_banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1 class="big_heading">
Hours & Info
 </h1>
</div>
</div>
</div>
<?php endwhile;?>



<div class="container">
<div class="contact-page-section">
  <div class="row">
  <?php
  if( have_rows('contact_page_content') ): 
    while ( have_rows('contact_page_content') ) : the_row();
    if( get_row_layout() == 'contact_form_text' ):
     ?>
   <div class="col-lg-6">
   	<div class="newsletter-form">
    <?php the_sub_field('contact_form');?>
   	</div>
   </div>
   <?php
 endif;
endwhile;
endif;
  ?>

  <?php
  if( have_rows('contact_page_content') ): 
    while ( have_rows('contact_page_content') ) : the_row();
    if( get_row_layout() == 'contact_text' ):
     ?>
   <div class="col-lg-6">
   	<h2><?php the_sub_field('direction_title');?></h2>
   	<div class="direction-address">
    <?php the_sub_field('direction_content');?>
   	</div>
   </div>

   <?php
 endif;
endwhile;
endif;
  ?>

  </div>
</div>
</div>

<div class="map-section">
  
 		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5132.493246642838!2d-74.04193888831468!3d40.102199888157344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c1861a19ee376b%3A0xacb4d604ac2a1a32!2s101+Channel+Dr%2C+Point+Pleasant+Beach%2C+NJ+08742%2C+USA!5e0!3m2!1sen!2sin!4v1531470669294" style="border:0" allowfullscreen="" width="600" height="450" frameborder="0"></iframe> -->
    <?php $image = get_field('contact_map_image'); ?>
    <a href="https://www.google.com/maps/place/Jack+Baker's+Wharfside/@40.101949,-74.040612,15z/data=!4m5!3m4!1s0x0:0x462c8f13ee8cfb3b!8m2!3d40.101949!4d-74.040612" target="_blank"><img src="<?php echo $image['url'];?>"></a>
 	</div>
 


<?php
get_footer();
?>
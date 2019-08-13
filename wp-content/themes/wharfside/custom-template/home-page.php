<?php
/*
 Display Template Name: Home Page
*/
 get_header();
 ?>

 <div id="myModal" class="modal" style="display: none;">
<div class="modal-content"><span id="CloseVideo"><br>
<i class="fa fa-times" aria-hidden="true"></i><br>
</span>
<video controls="controls" width="600" height="150">
<source src="<?php bloginfo('template_url');?>/video/WharfsideComcastHD.mp4" type="video/mp4">
</source>Your browser does not support HTML5 video.</video>
</div>
</div>

  <div class="wharfside_slider">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
              <?php
                 $i=0;            
                 while( have_rows('home_slider') ): the_row();            
                 if ($i == 0) {            
               echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';            
               } else {            
               echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';            
               }            
               $i++;            
            endwhile; ?>
        </ol>


        <div class="carousel-inner">
        <?php
              $z = 0;            
              while( have_rows('home_slider') ): the_row();            
              $image = get_sub_field( 'image' ); ?>

          <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>" style="background-image:url(<?php echo $image['url']; ?>);">
            <div class="container carousel-caption-table">
              <div class="carousel-caption-table-cell text-center">
               <div class="home-logo">
               
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home" itemprop="url"><img src="<?php echo get_theme_mod( 'your_theme_hover_logo' ); ?>" class="custom-logo" alt="Patio Bar" itemprop="logo"></a>
          
                </div>
                <h1 class="big_heading"><?php the_sub_field('title');?></h1>
                <!-- <a class="btn btn-lg btn-primary small_outline_btn outline_btn_hover" href="<?php the_sub_field('button_url');?>" role="button"><?php the_sub_field('button_title');?></a> -->
              </div>
            </div>
          </div>
       <?php
        $z++;           
        endwhile; 
        ?>

        </div>
      </div>
      
      <div class="slide-bottom">

<div class="container">
<div class="drop_arrow">
<a href="#wharfside_content_section"><img src="<?php echo site_url();?>/wp-content/uploads/2018/07/banner_drop_arrow.png" /></a>
</div>
 </div>

<div class="more-info">
 
 <div class="manasquan-inlet">
 <a href="https://www.tides.info/?command=view&location=Manasquan+Inlet%2C+USCG+Station%2C+New+Jersey">Manasquan Inlet Tide Chart</a>
 </div>
 <div class="sunset">
 <?php dynamic_sidebar('sidebar-6');?>
 </div>
 <div class="direction-lan">
 -74.040592W, 40.10195N
 </div>
</div> 
 
</div>

</div>





<div id="wharfside_content_section" class="wharfside_content_section">
<div class="container">
<div class="home_wharfside_content">
  <div class="row">
  <div class="col-lg-12"><?php the_field('home_wharfside_content');?></div>
  </div>
</div>
</div>
</div>


<div id="menu-section" class="home-menu-section">
<?php
  if( have_rows('home_menu_section') ): 
    while ( have_rows('home_menu_section') ) : the_row();
    if( get_row_layout() == 'home_menu_block' ):
     ?>
   <?php $image = get_sub_field('menu_image', 'full'); ?>
<div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="shadows"> </div>

 <div class="icon-title-button">
  <div class="container">
 <h2 class="white_heading"><a href="<?php the_sub_field('menu_title_url');?>"><?php the_sub_field('menu_title');?></a></h2>
 <ul class="quick-list">
 <?php
   while( have_rows('home_menu_list') ) : the_row();
 ?>
 <?php $image = get_sub_field('image_icon', 'full'); ?>
  <li>
    <a class="" href="<?php the_sub_field('list_title_url');?>" role="button"><?php the_sub_field('list_title');?></a>
  </li>
<?php endwhile; ?>
  </ul>

  <a href="#seafood-section"> <i class="icofont icofont-thin-down"></i></a>

  </div>
 </div>


</div>

<?php
 endif;
endwhile;
endif;
  ?>

</div>



<div id="seafood-section" class="home-seafood-section">
<?php
  if( have_rows('home_seafood_story') ): 
    while ( have_rows('home_seafood_story') ) : the_row();
    if( get_row_layout() == 'seafood_block' ):
     ?>
   <?php $image = get_sub_field('seafood_image', 'full'); ?>
<div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="shadows"> </div>


 <div class="icon-title-button">
  <div class="container">
 <h2 class="white_heading"><a href="<?php the_sub_field('seafood_title_url');?>"><?php the_sub_field('seafood_title');?></a></h2>
 
 <br />
 

  <a class="seafood-arrow" href="#topside-section"> <i class="icofont icofont-thin-down"></i></a>


  </div>
 </div>


</div>
<?php
 endif;
endwhile;
endif;
  ?>
</div>


<div class="home-image-content-section">
  <div class="container">
   <div class="row">
   <?php
  if( have_rows('home_content') ): 
    while ( have_rows('home_content') ) : the_row();
    if( get_row_layout() == 'content_and_image1' ):
     ?>
   <?php $image = get_sub_field('image1', 'full'); ?>
   <?php $image1 = get_sub_field('image2', 'full'); ?>
   <div class="col-lg-6">
     <div class="content">
   
     <div class="contet-image-block">
     <?php the_sub_field('content1');?>
     </div>
     </div>
   </div>
   <div class="col-lg-6">
   <div class="image-content">
     <img src="<?php echo $image['url'];?>">
     <img src="<?php echo $image1['url'];?>">
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



<div class="video-book-event-section">
 
 <div class="container">
 <div class="row">

  <?php
   while( have_rows('home_video_section') ) : the_row();
 ?>
 <?php $image = get_sub_field('wharfside_video_image', 'full'); ?>
 <?php $image1 = get_sub_field('wharfside_video_icon', 'full'); ?>
<div class="col-sm-4">
<div class="market_expertise_image" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="tab">
 <div class="tab-cell">
 
 <div class="market_expertise_content_section">
 <div class="icon_img"><img id="myBtn" class="play_video_button" src="<?php echo $image1['url'];?>"></div>
  <a id="myBtn2" class="play_video_button" href="#"><?php the_sub_field('wharfside_video_icon_title');?></a>
 <h2 class="white_heading"><?php the_sub_field('wharfside_video_block_title');?></h2>
  </div>
</div></div>
 
</div>
 </div>
<?php endwhile; ?>


  <?php
   while( have_rows('home_wharfside_block') ) : the_row();
 ?>
 <?php $image = get_sub_field('wharfside_block_image', 'full'); ?>
 <?php $image1 = get_sub_field('wharfside_icon', 'full'); ?>
  <div class="col-sm-4">


<div id="<?php the_sub_field('wharfside_block_id');?>" class="market_expertise_image" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="tab">
 <div class="tab-cell">
 <div class="market_expertise_content_section">
 <div class="icon_img"><a href="<?php the_sub_field('icon_title_url');?>"><img src="<?php echo $image1['url'];?>"></a></div>
  <a href="<?php the_sub_field('icon_title_url');?>"><?php the_sub_field('wharfside_icon_title');?></a>
 <h2 class="white_heading"><?php the_sub_field('wharfside_block_title');?></h2>
  </div>
 </div></div>
</div>
 </div>
 <?php endwhile; ?>
 
 </div>


 <div class="video-book-social-icon">
 <h4 class="social_heading">Get Social With us!</h4>
  <ul class="inline">
  <li><a href="https://www.facebook.com/WharfsideNJ/" target="_blank"><i class="fa fa-facebook"></i></a></li>
  <li><a href="https://twitter.com/wharfsidenj" target="_blank"><i class="fa fa-twitter"></i></a></li>
  <li><a href="https://www.instagram.com/wharfsidenj/" target="_blank"><i class="fa fa-instagram"></i></a></li>
 </ul>
</div>

</div>
</div>


<div id="topside-section" class="market_expertise_section">
<?php
  if( have_rows('home_top_side_event') ): 
    while ( have_rows('home_top_side_event') ) : the_row();
    if( get_row_layout() == 'top_side_block' ):
     ?>
   <?php $image = get_sub_field('top_side_image', 'full'); ?>
   <div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
  <div class="shadows"> </div>
<div class="icon-title-button"> 
 <div class="container">
 
 <h2 class="white_heading"><a href="<?php the_sub_field('top_side_button_url');?>"> <?php the_sub_field('top_side_title');?></a></h2>
 <div class="market_content"><?php the_sub_field('top_side_content');?></p>
 <a class="btn-3" href="<?php the_sub_field('top_side_button_url');?>" role="button" target="_blank"><?php the_sub_field('top__side_button_title');?></a>
 
  </div>
    <a class="seafood-arrow" href="#patiobar-section"> <i class="icofont icofont-thin-down"></i></a>
 </div>

</div>
</div>
<?php
 endif;
endwhile;
endif;
  ?>

</div>


<div id="patiobar-section" class="home_patiobar_section">
<?php
  if( have_rows('home_patiobar_section') ): 
    while ( have_rows('home_patiobar_section') ) : the_row();
    if( get_row_layout() == 'home_menu_block' ):
     ?>
   <?php $image = get_sub_field('menu_image', 'full'); ?>
   <?php $image1 = get_sub_field('patiobar_inner_image', 'full'); ?>
   <div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
 
  <div class="shadows"> </div>
<div class="icon-title-button"> 

 <div class="container">
 
 <div class="patio-inner-image">
 <a href="<?php the_sub_field('menu_title_url');?>">
 <img src="<?php echo $image1['url'];?>">
 </a>
 </div>
 <ul class="quick-list">
 <?php
   while( have_rows('home_patiobar_list') ) : the_row();
 ?>
  <li>
   <a class="" href="<?php the_sub_field('list_title_url');?>" role="button" target="_blank"><?php the_sub_field('list_title');?></a>
  </li>
<?php endwhile; ?>
  </ul>

<a class="seafood-arrow" href="#gallery-section"> <i class="icofont icofont-thin-down"></i></a>


 </div>
  </div>
 </div>
<?php
 endif;
endwhile;
endif;
  ?>
</div>


<div id="gallery-section" class="market_expertise_section">
<?php
  if( have_rows('home_gallery_section') ): 
    while ( have_rows('home_gallery_section') ) : the_row();
    if( get_row_layout() == 'gallery_block' ):
     ?>
   <?php $image = get_sub_field('top_side_image', 'full'); ?>
   <div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
 
  <div class="shadows"> </div>
<div class="icon-title-button"> 

 <div class="container">
 
 <h2 class="white_heading"><a href=" "> <?php the_sub_field('top_side_title');?></a></h2>
 <p><a class="" href="<?php the_sub_field('gallery_button_url');?>" role="button" target="_blank"><?php the_sub_field('gallery_button_title');?></a></p>
 
 <a class="seafood-arrow" href="#restaurant-section"> <i class="icofont icofont-thin-down"></i></a>

</div>
  </div>

  
 </div>

</div>
<?php
 endif;
endwhile;
endif;
  ?>

</div>

<div id="restaurant-section" class="wharfside-restaurant-section">
<?php
  if( have_rows('home_wharfside_restaurant') ): 
    while ( have_rows('home_wharfside_restaurant') ) : the_row();
    if( get_row_layout() == 'home_wharfside_block' ):
     ?>
   <?php $image = get_sub_field('home_wharfside_image', 'full'); ?>
   <div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
   <div class="shadows"> </div>

 <div class="container">
 <div class="btn-block3">
 <h2 class="white_heading"><a href="<?php the_sub_field('home_wharfside_title_url');?>"> <?php the_sub_field('home_wharfside_title');?> </a></h2>
 <ul class="block-list">
 <?php
   while( have_rows('home_wharfside_list') ) : the_row();
 ?>
  <li>
   <a class="btn-3" href="<?php the_sub_field('list_title_url');?>" role="button" target="_blank"><?php the_sub_field('list_title');?></a>
  </li>
<?php endwhile; ?>
  </ul>
</div>
  </div>
 </div>

</div>
<?php
 endif;
endwhile;
endif;
  ?>




<div class="newsletter-address-section">
 <div class="container">
  <div class="row">
  <?php
  if( have_rows('home_newsletter_section') ): 
    while ( have_rows('home_newsletter_section') ) : the_row();
    if( get_row_layout() == 'newsletter_section_block' ):
     ?>
   <div class="col-lg-6">
   <h2><?php the_sub_field('newsletter_title');?></h2>
   	<div class="newsletter-form">
    <?php the_sub_field('newsletter_form');?>
   	</div>
   </div>
   <?php
 endif;
endwhile;
endif;
  ?>

  <?php
  if( have_rows('home_newsletter_section') ): 
    while ( have_rows('home_newsletter_section') ) : the_row();
    if( get_row_layout() == 'direction_section_block' ):
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

</div>
 <?php
 get_footer();
 ?>
<?php
/*
  Display Template Name: Menu Page
*/
get_header();
?>



<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('header_banner_image'); ?>
<div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="shadows"> </div>
 <div class="icon-title-button">
  <div class="container">
 
 <h1 class="big_heading">
 <a href=""> MENUS </a>
 </h1>
<br />
  <?php $tab =  (isset($_GET['tab']) && ($_GET['tab'] > 0) && ($_GET['tab'] < 6))?$_GET['tab']:1;  ?>



  <ul class="quick-list nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link  <?php echo ($tab == 1)?'active show':''; ?>" href="#main-menu" role="tab" data-toggle="tab">Main Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo ($tab == 2)?'active show':''; ?>" href="#early-dining" role="tab" data-toggle="tab">Early Dining</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo ($tab == 3)?'active show':''; ?>" href="#cocktails" role="tab" data-toggle="tab">Cocktails & Wine</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo ($tab == 4)?'active show':''; ?>" href="#desert" role="tab" data-toggle="tab">Dessert</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php echo ($tab == 5)?'active show':''; ?>" href="#children-menu" role="tab" data-toggle="tab">Children's Menu</a>
  </li>

  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Main Menu</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#main-menu" data-toggle="tab">Main Menu</a>
            <a class="dropdown-item" href="#early-dining" data-toggle="tab">Early Dining</a>
            <a class="dropdown-item" href="#cocktails" data-toggle="tab">Cocktails & Wine</a>
            <a class="dropdown-item" href="#desert" data-toggle="tab">Dessert</a>
            <a class="dropdown-item" href="#children-menu" data-toggle="tab">Children's Menu</a>
          </div>

  </li>  


</ul>
<br />

</div>
</div>
</div>

<?php endwhile;?>

<div class="container">
<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in <?php echo ($tab == 1)?'active show':''; ?>" id="main-menu">
  	<h2 class="main-head">Main Menu</h2>

   <div class="chilled-seafood hrs">
    <h2>Chilled Seafood</h2>
    <ul>
    <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'chilled-seafood'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <li>
    	<h4><?php the_title();?></h4>
    	<div class="content-menu">
    	<?php the_content();?>
    	</div>
    	<div class="price-menu">
         <?php the_field('restaurant_menu_price');?>
    	</div>
    </li>
     <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
    <div class="clr"></div>
   </div>

<div class="small-plates hrs">
    <h2>Small Plates</h2>
    <ul>
    <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'small-plates'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <li>
    	<h4><?php the_title();?></h4>
    	<div class="content-menu">
    	<?php the_content();?>
    	</div>
    	<div class="price-menu">
         <?php the_field('restaurant_menu_price');?>
    	</div>
    </li>
     <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
        <div class="clr"></div>
   </div>

   <div class="lobster hrs">
    <h2>Lobster</h2>
    <ul>
    <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'lobster'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <li>
    	<h4><?php the_title();?></h4>
    	<div class="content-menu">
    	<?php the_content();?>
    	</div>
    	<div class="price-menu">
         <?php the_field('restaurant_menu_price');?>
    	</div>
    </li>
     <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
        <div class="clr"></div>
   </div>

   <div class="land hrs">
    <h2>Land</h2>
    <ul>
    <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'land'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <li>
    	<h4><?php the_title();?></h4>
    	<div class="content-menu">
    	<?php the_content();?>
    	</div>
    	<div class="price-menu">
         <?php the_field('restaurant_menu_price');?>
    	</div>
    </li>
     <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
        <div class="clr"></div>
   </div>
  
  <div class="sea hrs">
    <h2>Sea</h2>
    <ul>
    <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'restaurant_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'sea'
  	                     )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <li>
    	<h4><?php the_title();?></h4>
    	<div class="content-menu">
    	<?php the_content();?>
    	</div>
    	<div class="price-menu">
         <?php the_field('restaurant_menu_price');?>
    	</div>
    </li>
     <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
        <div class="clr"></div>
   </div>

  <div class="main-menu-slide-images">
  <div class="row">
 <?php $args = array(
           'post_type' => 'page' ,
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
 	<?php
   while( have_rows('main_menu_repeater') ) : the_row();
 ?>
 <?php $image = get_sub_field('images', 'full'); ?>
  <div class="col-sm-3"><img src="<?php echo $image['url'];?>"></div>
  <?php endwhile; ?>
  <?php endwhile; ?>
 <?php endif; ?>
<?php wp_reset_postdata(); ?>
  </div>
  </div>
  </div><!-- tabpanel end -->
  <div role="tabpanel" class="tab-pane fade <?php echo ($tab == 2)?'active show':''; ?>" id="early-dining">
  	<h2 class="main-head">Early Dining</h2>
    <div class="early-dining-menu">
    <ul>
    <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
                  array(
                       'taxonomy' => 'restaurant_category',
                       'field'  => 'slug',
                          'terms' => 'early-dining'
                         )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <li>
      <h4><?php the_title();?></h4>
      <div class="content-menu">
      <?php the_content();?>
      </div>
      <div class="price-menu">
         <?php the_field('restaurant_menu_price');?>
      </div>
    </li>
     <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
   </div>

  <div class="early-dining-slide-images">
  <div class="row">
 <?php $args = array(
           'post_type' => 'page' ,
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
  <?php
   while( have_rows('early_dining_repeater') ) : the_row();
 ?>
 <?php $image = get_sub_field('early_dining_images', 'full'); ?>
  <div class="col-sm-3"><img src="<?php echo $image['url'];?>"></div>
  <?php endwhile; ?>
  <?php endwhile; ?>
 <?php endif; ?>
<?php wp_reset_postdata(); ?>
  </div>
  </div>
  </div><!-- tabpanel end -->
  <div role="tabpanel" class="tab-pane fade <?php echo ($tab == 3)?'active show':''; ?>" id="cocktails">
  	<h2 class="main-head">Cocktails & Wine</h2>
    <div class="early-dining-menu">
    <ul>
    <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'DASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
                  array(
                       'taxonomy' => 'restaurant_category',
                       'field'  => 'slug',
                          'terms' => 'cocktails-wine'
                         )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <li>
      <h4><?php the_title();?></h4>
      <div class="content-menu">
      <?php the_content();?>
      </div>
    </li>
     <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
   </div>

  <div class="early-dining-slide-images">
  <div class="row">
 <?php $args = array(
           'post_type' => 'page' ,
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
  <?php
   while( have_rows('cocktail_wine_repeater') ) : the_row();
 ?>
 <?php $image = get_sub_field('cocktail_images', 'full'); ?>
  <div class="col-sm-3"><img src="<?php echo $image['url'];?>"></div>
  <?php endwhile; ?>
  <?php endwhile; ?>
 <?php endif; ?>
<?php wp_reset_postdata(); ?>
  </div>
  </div>
   
  </div><!-- tabpanel end -->
  <div role="tabpanel" class="tab-pane fade <?php echo ($tab == 4)?'active show':''; ?>" id="desert">
   	<h2 class="main-head">Dessert</h2>
    <div class="early-dining-menu">
    <ul>
    <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
                  array(
                       'taxonomy' => 'restaurant_category',
                       'field'  => 'slug',
                          'terms' => 'dessert'
                         )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <li>
      <h4><?php the_title();?></h4>
      <div class="content-menu">
      <?php the_content();?>
      </div>
    </li>
     <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
   </div>

  <div class="early-dining-slide-images">
  <div class="row">
 <?php $args = array(
           'post_type' => 'page' ,
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
  <?php
   while( have_rows('dessert_repeater') ) : the_row();
 ?>
 <?php $image = get_sub_field('dessert_images', 'full'); ?>
  <div class="col-sm-3"><img src="<?php echo $image['url'];?>"></div>
  <?php endwhile; ?>
  <?php endwhile; ?>
 <?php endif; ?>
<?php wp_reset_postdata(); ?>
  </div>
  </div>

  </div><!-- tabpanel end -->
  <div role="tabpanel" class="tab-pane fade <?php echo ($tab == 5)?'active show':''; ?>" id="children-menu">
    <h2 class="main-head">Children’s Menu</h2>
    <div class="early-dining-menu">
    <ul>
    <?php $args = array(
           'post_type' => 'restaurant-menu' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
                  array(
                       'taxonomy' => 'restaurant_category',
                       'field'  => 'slug',
                          'terms' => 'childrens-menu'
                         )
                     )
            ); ?>
      <?php query_posts($args); ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <li>
      <h4><?php the_title();?></h4>
      <div class="content-menu">
      <?php the_content();?>
      </div>
    </li>
     <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>
    </ul>
   </div>

 <div class="early-dining-slide-images">
  <div class="row">
 <?php $args = array(
           'post_type' => 'page' ,
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
  <?php
   while( have_rows('children_menu_repeater') ) : the_row();
 ?>
 <?php $image = get_sub_field('images', 'full'); ?>
  <div class="col-sm-3"><img src="<?php echo $image['url'];?>"></div>
  <?php endwhile; ?>
  <?php endwhile; ?>
 <?php endif; ?>
<?php wp_reset_postdata(); ?>
  </div>
  </div>


  </div>
</div><!-- tabpanel end -->


</div><!-- container end -->

        
<script>
/* jQuery(document).ready(function(){      
      var ww = jQuery(window).width();
      var ew = ww - 1170;
	  var bw = ew / 2; 
 
     
      jQuery(".main-menu-slide-images").css( 'margin-right','-'+bw+'px' );
      jQuery(".main-menu-slide-images").css( 'margin-left','-'+bw+'px' );
      jQuery(".early-dining-slide-images").css( 'margin-right','-'+bw+'px' );
      jQuery(".early-dining-slide-images").css( 'margin-left','-'+bw+'px' );
 
 
      
     }); */
</script>


<?php
get_footer();
?>

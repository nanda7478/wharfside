<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    
       <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css"> 
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/carousel.css"> 
      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/main.css">
      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
    
        
<script>
 jQuery(document).ready(function(){      
      var ww = jQuery(window).width();
      var ew = ww - 1200;
	  var bw = ew / 2; 
      var bw2 = bw + 600;   
     
      jQuery(".image-content").css( 'margin-right','-'+bw+'px' );
      
      jQuery(".image-content").css( 'width',bw2+'px' );
      
     }); 
</script>


    <script type="text/javascript">
    jQuery(document).ready(function(){

    jQuery('a[href^="#wharfside_content_section"]').on('click', function(event) {

    var target = jQuery(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top-80
        }, 1100);
    }

     });
    });


    jQuery(document).ready(function(){

    jQuery('a[href^="#seafood-section"]').on('click', function(event) {

    var target = jQuery(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top-80
        }, 1100);
    }

      });
    });

    jQuery(document).ready(function(){

    jQuery('a[href^="#topside-section"]').on('click', function(event) {

    var target = jQuery(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top-90
        }, 1100);
    }

      });
    });  

    jQuery(document).ready(function(){

    jQuery('a[href^="#patiobar-section"]').on('click', function(event) {

    var target = jQuery(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top-90
        }, 1100);
    }

      });
    }); 

    jQuery(document).ready(function(){

    jQuery('a[href^="#gallery-section"]').on('click', function(event) {

    var target = jQuery(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top-90
        }, 1100);
    }

      });
    });

    jQuery(document).ready(function(){

    jQuery('a[href^="#restaurant-section"]').on('click', function(event) {

    var target = jQuery(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top-90
        }, 1100);
    }

      });
    });
    </script>
<!-- 
   <script type="text/javascript">
     $(document).load(function() {
  $('#menu-section a').click(function(e) {
    //e.preventDefault();
    $('a[href="' + $(this).attr('href') + '"]').tab('show');
  })
});
   </script> -->
   <script type="text/javascript">
     var hash = document.location.hash;
  var prefix = "tab_";
  if (hash) {
          $('.nav-tabs a[href=' + hash.replace(prefix, "") + ']').tab('show');
  }
  // Change hash for page-reload
  $('.nav-tabs a').on('shown', function(e) {
          window.location.hash = e.target.hash.replace("#", "#" + prefix);
  });
   </script>

   <script type="text/javascript">
 
    function changeClass()
 
    {
 
        document.getElementById("class_demo").className = "btn btn-danger btn-lg";
 
    }
 
</script>


<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
        $(".site-header").addClass("darkHeader");
    } else {
        $(".site-header").removeClass("darkHeader");
    }
});
   </script>

 <style type="text/css">
   .foo {
  display: none;
}
 </style>
 
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/custom.css"> 
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/icofont.css"> 
	<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
 
		<header id="masthead" class="site-header" role="banner">
         <div class="site-header-main">
              <div class="container">
              <div class="wharfside_header">
                <div class="row">
                <div class="col-md-3 col-xs-6">
                <?php
                 if(is_front_page()){
                ?>
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
                <?php } else { ?>
                <div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
                 
                 
                 <?php } ?>
                </div>

                <div class="col-md-9 col-xs-6">
                
                <span class="humbers" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.marginLeft = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>

  <div id="mySidenav" class="sidenav right-header">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

               <div class="top-text-right">
               <div class="menu-info"> 
               <ul>
               	<li><a href="<?php echo site_url();?>/contact-us/">Hours & Info</a></li>
              
               
               <li class="phone-menu"><a href="tel:1-800-948-7884">1-800-948-7884</a></li>
               	<li>
               	<ul class="social-header-menu">
                <li><a href="https://www.facebook.com/WharfsideNJ/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/wharfsidenj" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/wharfsidenj/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
 </li>
                </div>

                <div class="top_header_menu">
				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>


 	<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
				</div>
				</div>
				</div>

				</div> <!--wharfside_header-->
				</div><!--row-->
               </div> <!--container-->
               </div><!-- site-header-main -->


		</header><!-- .site-header -->

		<div id="content" class="site-content">

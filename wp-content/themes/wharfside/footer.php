<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

        <div class="container">
         <div class="row">
         	<div class="col-lg-4 col-sm-6"><?php dynamic_sidebar('sidebar-2');?></div>
         	<div class="col-lg-4 f-img col-sm-6"><a href="http://www.chefsinternationalnj.com/" target="_blank"><img src="<?php echo site_url();?>/wp-content/uploads/2018/07/chefsintllogo.jpg"></a><?php //dynamic_sidebar('sidebar-3');?></div>
         	<div class="col-lg-4 col-sm-6"><?php dynamic_sidebar('sidebar-4');?></div>
         </div>

         <div class="row">
         <div class="col-lg-12"><div class="copyright-text"><?php dynamic_sidebar('sidebar-5');?></div></div>
         </div>
        </div>
        


			



		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->


<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
 <script type="text/javascript">
  
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

 <script type="text/javascript">
  
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script type="text/javascript">

$(document).ready(function(){
    $("#myBtn").click(function(){
        $("body").addClass("open_video");
                
    });
});

</script>

<script type="text/javascript">

$(document).ready(function(){
    $("#CloseVideo").click(function(){
        $("body").removeClass("open_video");
                
    });
});

</script>
<script type="text/javascript">
    $('.sunrise_sunset_widget').each(function() {
    var $this = $(this);
    $this.html($this.html().replace(/(\S+)\s*$/, '<span class="foo">$1</span>'));
});
</script>

<?php wp_footer(); ?>
</body>
</html>
<script type="text/javascript">
  $("#book_an_event").click(function(){
    window.location = 'http://demosrvr.com/wp/wharfside/topside/';
});

  $("#patio_bar_kickback").click(function(){
    window.location = 'http://demosrvr.com/wp/patiobar/';
});

 /* $("#video-box-image").click(function(){
    window.location = 'http://demosrvr.com/wp/patiobar/gallery/?type=video';
});*/
</script>
<?php 
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
?>

<?php

	$redirect_page_active  = kraft_get_option( 'redirect-page-active', 0 ); 
    $page_footer_type = 'inherit';
	
	$scroll_to_top  = kraft_get_option( 'footer-scrolltotop-switch', 0 ); 
	
	if( ( is_singular( 'portfolio' ) || is_singular( 'page' ) ) ) {
		$page_footer_type  = kraft_get_post_meta( 'page_footer_type' );
	}	
	
	if( ( is_singular( 'portfolio' ) || is_singular( 'page' ) ) && $page_footer_type == 'custom' ) {		
		
		$footer_style = kraft_get_post_meta( 'page_footer_style' );		
	}
	else {	
		
		$footer_style = kraft_get_option( 'footer-style', 'standard' );
	}
	
?>

<?php if ( kraft_is_redirect_page() ) { ?>

	<?php get_template_part( 'template-parts/footer/footer-'.$footer_style ); ?>

<?php } ?>


<?php if ( $scroll_to_top == 1 ) { ?>
	<a id="gotoTop" href="#" class="scroll-top-link" data-easing="easeOutQuad" data-speed="700" ><i class="fa fa-angle-up"></i></a>
<?php } ?>

</div>
<!-- Content Wrapper Ends -->

</div> 
<!-- Page Wrapper Ends -->	
				
<?php 

wp_footer(); 

?>
<script>

jQuery(document).ready(function(){
	jQuery('#menu-trigger').on('click',function(e){
    jQuery('html').toggleClass('locked');
	});

	//console.log(jQuery(location).attr('pathname'));
	if(window.location.href.indexOf('film-item') > -1) {
		jQuery('#menu-main-menu li:nth-child(2').addClass('current-menu-item');
	}
	if(window.location.href.indexOf('testimonials') > -1) {
		jQuery('#menu-main-menu li:nth-child(5').addClass('current-menu-item');
	}
	if(window.location.href.indexOf('director-detail') > -1) {
		jQuery('#menu-main-menu li:nth-child(3').addClass('current-menu-item');
	}
});

</script>
</body>
</html>
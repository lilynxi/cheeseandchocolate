<?php 
/**
 * 
 * The template for displaying the standard footer.
 */
?>

<?php

	$icons = kraft_get_option( 'footer-social-icon' );	
	
	$footer_layout_switch = kraft_get_option( 'footer-layout-switch' );
	
	$footer_layout_class = 'vc_container';
	
	if( $footer_layout_switch == 1 ) {
		$footer_layout_class = 'container-fluid';
	}
	
	if( !empty( $icons ) ) {
		$icons = $icons[ 'Footer icons' ];
	}
	
	$footer_text = '&#169; 2017 Kraft';
?>

<!-- Footer -->
<footer id="footer" class="standard">
	<div class="<?php echo esc_attr( $footer_layout_class ); ?>">
		<div class="vc_row">
			<div class="vc_col-xs-12 vc_col-sm-6">
				<div class="copyrights">
					<p><?php echo wp_kses( kraft_get_option( 'footer-copyright', $footer_text ), array( 'a' =>  array( 'href' => array(),'target' => array() ) ) );  ?>	</p>
				</div>
			</div>
			<div class="vc_col-xs-12 vc_col-sm-6">
				
				<?php if ( kraft_get_option( 'footer-social', 0 ) == 1 && count( $icons ) > 1 ) { 
					
					$social_link_target = '';
					$footer_social_target = kraft_get_option( 'footer-social-target', '_blank' );
					
					if( $footer_social_target == '_blank' ) {
						$social_link_target = 'target="_blank"';
					}
					
				?>
				<div class="footer-socials">
					
				<?php
					foreach ( $icons as $icon => $name ) {
						if ( $icon !== reset( $icons ) ) {
							$url = 'url-' . $icon;
				?>
					
					<?php if ( kraft_get_option( 'footer-social-type' ) == 1 ) { ?>
							
					    <a href="<?php echo kraft_get_social_url( $url ); ?>"  <?php echo esc_attr( $social_link_target ); ?> >
							<i class="fa fa-<?php echo esc_attr( $icon ); ?>"></i>
						</a>
					
					<?php } 
					else {
					?>					
						<a href="<?php echo kraft_get_social_url( $url ); ?>"  <?php echo esc_attr( $social_link_target ); ?> ><?php echo esc_html( $icons[ $icon ] ); ?></a>
					<?php } ?>
					
					
				<?php   }
					}
				?>					
					
				</div>
				<?php } ?>
				
			</div>
		</div>
	</div>
</footer>

<!-- Footer Ends -->

<!-- Footer Start -->

<?php
	if(!is_author())
		echo do_shortcode( '[show_wpb_author_info_box]' );
?>
<div class="space-footer box-100 relative coronapp">
	<?php if ( is_active_sidebar( 'footer-center-sidebar' ) ) { ?>
	<div class="space-footer-top box-100 relative">
		<div class="space-footer-ins relative">
			<div class="space-footer-top-center box-100 relative">
				<?php dynamic_sidebar( 'footer-center-sidebar' ); ?>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="space-footer-copy box-100 relative">
		<div class="space-footer-ins relative">
			<?php if(get_theme_mod('footer_license_logo') || get_theme_mod('footer_license_text')): ?>
				<div class="box-100 text-center footer-license">
					<?php 
						if(get_theme_mod('footer_license_logo')) {
							echo '<img src="'.esc_url(get_theme_mod('footer_license_logo')).'" />';
						}

						if(get_theme_mod('footer_license_text')) {
							echo '<p>'.get_theme_mod('footer_license_text').'</p>';
						}
					?>
				</div>
			<?php endif; ?>

			<div class="space-footer-copy-left box-50 left relative">
				<?php if(get_theme_mod('footer_copyright') == '') { ?>
					<?php esc_html_e( '&copy; Copyright', 'mercury-child' ); ?> <?php echo esc_html( date( 'Y' ) ) ?> <?php echo esc_html( get_bloginfo( 'name' ) ) ?> | <?php esc_html_e( 'Powered by', 'mercury-child' ); ?> <a href="<?php echo esc_url( __( 'https://wordpress.org', 'mercury-child' ) ); ?>" target="_blank" title="<?php esc_attr_e( 'WordPress', 'mercury-child' ); ?>"><?php esc_html_e( 'WordPress', 'mercury-child' ); ?></a> | <a href="<?php echo esc_url( __( 'https://mercurytheme.com', 'mercury-child' ) ); ?>" target="_blank" title="<?php esc_attr_e( 'Affiliate Marketing WordPress Theme. Reviews and Top Lists', 'mercury-child' ); ?>"><?php esc_html_e( 'Mercury Theme', 'mercury-child' ); ?></a>
				<?php } else { ?>
					<?php 
						$allowed_html = array(
							'a' => array(
								'href' => true,
								'title' => true,
								'target' => true,
							),
							'br' => array(),
							'em' => array(),
							'strong' => array(),
							'span' => array(),
							'p' => array()
						);
						echo wp_kses( get_theme_mod( 'footer_copyright' ), $allowed_html );
					?>
				<?php } ?>
			</div>
			<div class="space-footer-copy-menu box-50 left relative">
				<?php
					if (has_nav_menu('footer-menu')) {
						wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'space-footer-menu', 'theme_location' => 'footer-menu', 'depth' => 1, 'fallback_cb' => '__return_empty_string' ) );
					}
				?>
			</div>
			<?php get_template_part( '/theme-parts/footer/logos' ); ?>
			<?php get_template_part( '/theme-parts/footer/disclaimer' ); ?>
		</div>
	</div>
</div>

<!-- Footer End -->

</div>

<!-- Mobile Menu Start -->

<?php get_template_part( '/theme-parts/mobile-menu' ); ?>

<!-- Mobile Menu End -->

<!-- Back to Top Start -->

<div class="space-to-top pp">
	<a href="#" id="scrolltop" title="<?php esc_attr_e( 'Back to Top', 'mercury-child' ); ?>"><i class="far fa-arrow-alt-circle-up"></i></a>
</div>

<!-- Back to Top End -->

<?php wp_footer(); ?>

</body>
</html>
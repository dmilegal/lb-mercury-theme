<div class="lb-mobile-menu lb-mobile-menu--color_<?= get_theme_mod('main_ui_color') ?>">
	<div class="lb-mobile-menu__block">
		<div class="lb-mobile-menu__inner">
			<div class="lb-mobile-menu__header">
				<?php
					$site_name = esc_attr( get_bloginfo( 'name' ) );
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					if ( has_custom_logo() ) {
						echo '<a href="'. esc_url( home_url( '/' ) ) .'" title="'. $site_name .'">'. wp_get_attachment_image( $custom_logo_id, 'mercury-custom-logo', "", array( "alt" => $site_name ) ) .'</a>';
					} else {
						echo '<a href="'. esc_url( home_url( '/' ) ) .'" title="'. esc_attr( get_bloginfo( 'name' ) ) .'" class="text-logo">'. esc_html( get_bloginfo( 'name' ) ) .'</a><span>'. esc_html( get_bloginfo( 'description' ) ) .'</span>';
					}
				?>		
			</div>
			<div class="lb-mobile-menu__list">
				<?php 
					if (has_nav_menu('main-menu')) {
						wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'mobile-menu', 'theme_location' => 'main-menu', 'depth' => 3, 'fallback_cb' => '__return_empty_string' ) );
					}
				?>
			</div>
			<div class="lb-mobile-menu__copy">
				<?php if(get_theme_mod('footer_copyright') == '') { ?>
					<?php esc_html_e( '&copy; Copyright', 'mercury-child' ); ?> <?php echo esc_html( date( 'Y' ) ) ?> <?php echo esc_html( get_bloginfo( 'name' ) ) ?><br><?php esc_html_e( 'Powered by', 'mercury-child' ); ?> <a href="<?php echo esc_url( __( 'https://wordpress.org', 'mercury-child' ) ); ?>" target="_blank" title="<?php esc_attr_e( 'WordPress', 'mercury-child' ); ?>"><?php esc_html_e( 'WordPress', 'mercury-child' ); ?></a> | <a href="<?php echo esc_url( __( 'https://mercurytheme.com', 'mercury-child' ) ); ?>" target="_blank" title="<?php esc_attr_e( 'Affiliate WordPress Theme', 'mercury-child' ); ?>"><?php esc_html_e( 'Mercury Theme', 'mercury-child' ); ?></a>
				<?php } else { ?>
					<?php 
						$allowed_html = array(
							'a' => array(
								'href' => true,
								'title' => true,
							),
							'br' => array(),
							'em' => array(),
							'strong' => array()
						);
						echo wp_kses( get_theme_mod( 'footer_copyright' ), $allowed_html );
					?>
				<?php } ?>
			</div>
			<button class="lb-mobile-menu__close-button">
				<i class="icon-x"></i>
			</button>
		</div>
	</div>
</div>
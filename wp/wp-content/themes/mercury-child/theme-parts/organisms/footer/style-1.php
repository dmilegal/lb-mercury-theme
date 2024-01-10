<footer class="lb-footer lb-footer--color_primary">
	<div class="lb-footer__top">
		<div class="lb-footer__inner">
			<div class="lb-footer__grid">
				<?php if (get_theme_mod('footer_license_logo') || get_theme_mod('footer_license_text')) : ?>
					<div class="lb-footer__license">
						<?php
						if (get_theme_mod('footer_license_logo')) {
							echo '<img src="' . esc_url(get_theme_mod('footer_license_logo')) . '" />';
						}

						if (get_theme_mod('footer_license_text')) {
							echo '<p>' . get_theme_mod('footer_license_text') . '</p>';
						}
						?>
					</div>
				<?php endif; ?>
				<div class="lb-footer__navigation">
					<?php
					if (has_nav_menu('footer-menu')) {
						wp_nav_menu(array('container' => 'ul', 'menu_class' => 'lb-footer__menu', 'theme_location' => 'footer-menu', 'depth' => 1, 'fallback_cb' => '__return_empty_string'));
					}
					?>
				</div>
				<?php get_template_part('/theme-parts/organisms/footer/logos'); ?>
				<?php get_template_part('/theme-parts/organisms/footer/disclaimer'); ?>
			</div>

		</div>
	</div>
	<div class="lb-footer__bot">
		<div class="lb-footer__inner">
			<div class="lb-footer__copy">
				<?php if (get_theme_mod('footer_copyright') == '') { ?>
					<?php esc_html_e('&copy; Copyright', 'mercury-child'); ?> <?php echo esc_html(date('Y')) ?> <?php echo esc_html(get_bloginfo('name')) ?> | <?php esc_html_e('Powered by', 'mercury-child'); ?> <a href="<?php echo esc_url(__('https://wordpress.org', 'mercury-child')); ?>" target="_blank" title="<?php esc_attr_e('WordPress', 'mercury-child'); ?>"><?php esc_html_e('WordPress', 'mercury-child'); ?></a> | <a href="<?php echo esc_url(__('https://mercurytheme.com', 'mercury-child')); ?>" target="_blank" title="<?php esc_attr_e('Affiliate Marketing WordPress Theme. Reviews and Top Lists', 'mercury-child'); ?>"><?php esc_html_e('Mercury Theme', 'mercury-child'); ?></a>
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
					echo wp_kses(get_theme_mod('footer_copyright'), $allowed_html);
					?>
				<?php } ?>
			</div>

		</div>
	</div>
</footer>
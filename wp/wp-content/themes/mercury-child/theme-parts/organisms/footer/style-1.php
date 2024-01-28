<footer class="lb-footer lb-footer--color_primary">
	<div class="lb-footer__top">
		<div class="lb-footer__inner">
			<div class="lb-footer__grid">
				<?php if (get_theme_mod('footer_license_logo') || get_theme_mod('footer_license_text')) : ?>
					<div class="lb-footer__block-a">
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
					</div>
				<?php endif; ?>
				<div class="lb-footer__block-b">
					<?php
					$site_name = esc_attr(get_bloginfo('name'));
					$custom_logo_id = get_theme_mod('custom_logo');

					if (has_custom_logo()) { ?>
						<a href="<?= esc_url(home_url('/')) ?>" class="lb-footer__home-link" title="<?= $site_name ?>">
							<?= wp_get_attachment_image($custom_logo_id, [260, 0], false, array("alt" => $site_name, 'class' => 'lb-footer__logo')) ?>
						</a>
					<? } else { ?>
						<a href="<?= esc_url(home_url('/')) ?>" title="<?= esc_attr(get_bloginfo('name')) ?>" class="lb-footer__home-link">
							<?= esc_html(get_bloginfo('name')) ?>
						</a>
					<? } ?>
					<div class="lb-footer__navigation">
						<? if (has_nav_menu('footer-menu')) {
							wp_nav_menu(array('container' => 'ul', 'menu_class' => 'lb-footer__menu', 'theme_location' => 'footer-menu', 'depth' => 1, 'fallback_cb' => '__return_empty_string'));
						} ?>
					</div>
				</div>
				<div>

					<?php get_template_part('/theme-parts/organisms/footer/logos'); ?>
				</div>

				<div>
					<?php get_template_part('/theme-parts/organisms/footer/copyright'); ?>
					<?php get_template_part('/theme-parts/organisms/footer/disclaimer'); ?>
				</div>
			</div>

		</div>
	</div>
	<!--<div class="lb-footer__bot">
		<div class="lb-footer__inner">
			

		</div>-->
	</div>
</footer>
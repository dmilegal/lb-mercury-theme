<header class="lb-header lb-header--color_<?= get_theme_mod('main_ui_color') ?>">
	<div class="lb-header__inner">
		<div class="lb-header__grid">
			<div class="lb-header__head">
				<div class="lb-header__logo-wrapper">
					<?php
					$site_name = esc_attr(get_bloginfo('name'));
					$custom_logo_id = get_theme_mod('custom_logo');

					if (has_custom_logo()) { ?>
						<a href="<?= esc_url(home_url('/')) ?>" class="lb-header__home-link" title="<?= $site_name ?>">
							<?= wp_get_attachment_image($custom_logo_id, [260, 0], false, array("alt" => $site_name, 'class' => 'lb-header__logo')) ?>
						</a>
					<? } else { ?>
						<a href="<?= esc_url(home_url('/')) ?>" title="<?= esc_attr(get_bloginfo('name')) ?>" class="lb-header__home-link">
							<?= esc_html(get_bloginfo('name')) ?>
						</a>
					<? } ?>
				</div>
				<div class="lb-header__navigation">
					<?php
					if (has_nav_menu('main-menu')) {
						wp_nav_menu(array('container' => 'ul', 'menu_class' => 'main-menu', 'theme_location' => 'main-menu', 'depth' => 3, 'fallback_cb' => '__return_empty_string'));
					}; ?>

				</div>
			</div>
			<div class="lb-header__tail">
				<div class="lb-header__search">
					<button class="lb-header-search__search-btn">
						<i class="fas fa-search desktop-search-button"></i>
					</button>
					<div class="lb-header__search-modal">
						<div class="lb-header__search-form">
							<?php get_search_form(); ?>
						</div>
						<button class="lb-header-search__search-close">
							<i class="fas fa-search desktop-search-button"></i>
						</button>
					</div>
				</div>
				<div class="lb-header__lng-switcher">
					<? get_template_part('theme-parts/components/molecules/lang-switcher', null, [
						'color' => get_theme_mod('main_ui_color')
					]); ?>
				</div>

				<div id="mobile-header-trigger" class="lb-header__hamburger hamburger hamburger--slider" tabindex="0" aria-label="Menu" role="button" aria-controls="navigation">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
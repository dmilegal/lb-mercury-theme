<?
$netww_html = (function () {
	if (!is_multisite())
		return;

	global $wp;
	$curr_url = home_url($wp->request) . '/';

	switch_to_blog(1);
	$subsitez = get_field('ntw_webs_switcher', 'm5netw_opt1');
	restore_current_blog();

	$html = '<ul class="netw"><li class="netw__level1">';

	#subsite that is active now
	$current_subsite = $subsitez[0];

	foreach ($subsitez as $k => $v) {
		if ($v['slug'] == '/')
			continue;

		if (strpos($curr_url, $v['slug']) !== false) {
			$current_subsite = $subsitez[$k];
			break;
		}
	}

	#actual country where page is loaded html
	$html .= '<span class="netw__actual">
					<i class="fi" style="background-image: url(' . get_stylesheet_directory_uri() . '/img/flags/4x3/' . $current_subsite["flag"] . ');"></i>' .
		$current_subsite['title'] .
		'<i class="fas fa-caret-down fa-xs"></i>
				</span><ul class="netw__sub">';

	# generating links for others subsites
	foreach ($subsitez as $k => $v) :

		if ($v['slug'] == $current_subsite['slug'])
			continue;

		if (!$v['show_lang_sw'])
			continue;


		$href = $current_subsite['slug'] == '/' ? $v['url'] . $_SERVER['REQUEST_URI'] : str_replace($current_subsite['slug'], $v['slug'], $curr_url);

		$html .= '<li class="netw__level2">
			<div class="netw__level2__link" data-href="' . $href . '" onclick="location.href=this.dataset.href;">
				<i class="fi" style="background-image: url(' . get_stylesheet_directory_uri() . '/img/flags/4x3/' . $v["flag"] . ');"></i>' . $v["title"] . '
			</div>
		</li>';
	endforeach;

	$html .= '</ul></li></ul>';

	return $html;
})();



?>

<div class="lb-header lb-header--color_<?= get_theme_mod('main_ui_color') ?>">
	<div class="lb-header__inner">
		<div class="lb-header__grid">
			<div class="lb-header__col">
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
				<div class="space-header-menu box-75 left relative">
					<?php
					if (has_nav_menu('main-menu')) {
						wp_nav_menu(array('container' => 'ul', 'menu_class' => 'main-menu', 'theme_location' => 'main-menu', 'depth' => 3, 'fallback_cb' => '__return_empty_string'));
					}
					echo $netww_html;
					?>

				</div>
			</div>
			<div class="lb-header__col">
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

				<?php if (class_exists('Custom_Lang_Switcher'))
					echo do_shortcode('[custom-lang-switcher]'); ?>

				<div id="mobile-header-trigger" class="lb-header__hamburger hamburger hamburger--slider" tabindex="0" aria-label="Menu" role="button" aria-controls="navigation">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</div>
		</div>




	</div>
</div>
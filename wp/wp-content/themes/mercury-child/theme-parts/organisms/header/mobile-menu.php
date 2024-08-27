<?

use Shared\Theme\LbThemeService;
?>

<div class="lb-mobile-menu lb-mobile-menu--color_white">
	<div class="lb-mobile-menu__block">
		<div class="lb-mobile-menu__inner">
			<div class="lb-mobile-menu__header">
				<?php
				$site_name = esc_attr(get_bloginfo('name'));
				$custom_logo_id = get_theme_mod('custom_logo');
				if (has_custom_logo()) {
					echo '<a href="' . esc_url(home_url('/')) . '" title="' . $site_name . '">' . wp_get_attachment_image($custom_logo_id, 'mercury-custom-logo', "", array("alt" => $site_name)) . '</a>';
				} else {
					echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" class="text-logo">' . esc_html(get_bloginfo('name')) . '</a><span>' . esc_html(get_bloginfo('description')) . '</span>';
				}
				?>
			</div>
			<div class="lb-mobile-menu__list">
				<?php
				if (has_nav_menu('main-menu')) {
					function lb_add_button_to_mobile_menu_item($item_output, $item, $depth, $args)
					{
						// Только для первого уровня меню
						if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
							// Добавляем вашу кнопку после ссылки
							$button = '<button class="lb-mobile-menu__toggle-button">
							<i class="icon-chevron-down"></i>
							<i class="icon-chevron-up"></i>
							</button>';
							$item_output .= $button;
						}
						return $item_output;
					}

					add_filter('walker_nav_menu_start_el', 'lb_add_button_to_mobile_menu_item', 10, 4);

					wp_nav_menu(array('container' => 'ul', 'menu_class' => 'mobile-menu', 'theme_location' => 'main-menu', 'depth' => 3, 'fallback_cb' => '__return_empty_string'));
				
					remove_filter('walker_nav_menu_start_el', 'lb_add_button_to_mobile_menu_item');
				}
				?>
			</div>
			<div class="lb-mobile-menu__copy">
				<?php if (!get_theme_mod('footer_copyright')) { ?>
					<?php esc_html_e('&copy; Copyright', 'mercury-child'); ?> <?php echo esc_html(date('Y')) ?> <?php echo esc_html(get_bloginfo('name')) ?>
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
					echo wp_kses(get_theme_mod('footer_copyright'), $allowed_html);
					?>
				<?php } ?>
			</div>
			<button class="lb-mobile-menu__close-button">
				<i class="icon-x"></i>
			</button>
		</div>
	</div>
</div>
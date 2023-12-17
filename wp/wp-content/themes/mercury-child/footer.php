<!-- Footer Start -->
<?
get_template_part('theme-parts/components/atoms/button', null, [
	'size' => 'sm',
	'prefix' => '<i class="icon-circle"></i>',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/components/atoms/button', null, [
	'size' => 'md',
	'variant' => 'secondary',
	'content' => 'Button CTA',
	'prefix' => '<i class="icon-circle"></i>'
]);
get_template_part('theme-parts/components/atoms/button', null, [
	'size' => 'lg',
	'variant' => 'outlined',
	'prefix' => '<i class="icon-circle"></i>',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/components/atoms/button', null, [
	'size' => 'xl',
	'variant' => 'text',
	'prefix' => '<i class="icon-circle"></i>',
	'href' => '#',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/components/atoms/button', null, [
	'size' => '2xl',
	'variant' => 'inline',
	'prefix' => '<i class="icon-circle"></i>',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/components/atoms/button', null, [
	'size' => '2xl',
	'prefix' => '<i class="icon-circle"></i>',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/components/atoms/button', null, [
	'size' => '2xl',
	'prefix' => '<i class="icon-circle"></i>',
]);

////////////////////////////////////////////////////////////
echo '<br>';

get_template_part('theme-parts/components/atoms/badge', null, [
	'size' => 'sm',
	'content' => 'Label',
	'prefix' => '<i class="icon-arrow-up"></i>'
]);
get_template_part('theme-parts/components/atoms/badge', null, [
	'size' => 'md',
	'postfix' => '<i class="icon-arrow-up"></i>',
	'content' => 'Label'
]);
get_template_part('theme-parts/components/atoms/badge', null, [
	'size' => 'lg',
	'prefix' => '<img />',
	'content' => 'Label',
	'href' => '#',
]);
get_template_part('theme-parts/components/atoms/badge', null, [
	'size' => 'sm',
	'prefix' => '<i class="icon-plus"></i>',
]);
get_template_part('theme-parts/components/atoms/badge', null, [
	'size' => 'md',
	'prefix' => '<i class="icon-plus"></i>',
]);
get_template_part('theme-parts/components/atoms/badge', null, [
	'size' => 'lg',
	'prefix' => '<img src="https://espaciomood.com/wp-content/uploads/2023/08/45913d94-bf70-4a78-a833-a41aafda597f-100x100.jpeg?x77770" />',
]);
////////////////////////////////////////////////////////////
echo '<br>';
get_template_part('theme-parts/components/molecules/badge-group', null, [
	'size' => 'md',
	'prefix' => '<i class="icon-plus"></i>',
	'postfix' => '<i class="icon-plus"></i>',
	'theme' => 'light',
	'color' => 'gray',
	'label' => [
		'position' => 'left',
		'content' => 'test'
	]
]);

?>
<?php
if (!is_author())
	echo do_shortcode('[show_wpb_author_info_box]');
?>
<footer class="lb-footer lb-footer--color_<?= get_theme_mod('main_ui_color') ?>">

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
				<?php get_template_part('/theme-parts/footer/logos'); ?>
				<?php get_template_part('/theme-parts/footer/disclaimer'); ?>
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

<!-- Footer End -->

</div>

<!-- Back to Top Start -->

<div class="space-to-top pp">
	<a href="#" id="scrolltop" title="<?php esc_attr_e('Back to Top', 'mercury-child'); ?>"><i class="far fa-arrow-alt-circle-up"></i></a>
</div>

<!-- Back to Top End -->

<?php wp_footer(); ?>

</body>

</html>
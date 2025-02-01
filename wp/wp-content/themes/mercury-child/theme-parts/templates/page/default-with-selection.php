<?php get_header(); ?>

<div class="lb-layout lb-layout--with-sidebar">
	<? if (!is_front_page()) { ?>
		<div class="lb-layout__breadcrumbs">
			<?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
		</div>
	<? } ?>
	<div class="lb-layout__banner">
		<? get_template_part('theme-parts/cells/hero-banner', null, [
			'post_id' => get_the_id(),
			'enable_published_date' => false,
			'color' => 'white',
			'show_author' => true
		]); ?>
	</div>
	<? if (true /*get_field('listing_info_block_enable', 'option')*/) { ?>
		<div class="lb-layout__after-banner">
			<? get_template_part('theme-parts/cells/trust-info-block', null, [
				'color' => 'white',
			]) ?>
		</div>
	<? } ?>
	<div>
		<?
		$selectionGroup = get_field('casino_selection_group', get_the_id()) ?? null;

		if ($selectionGroup && $selectionGroup['casino_list'])
			get_template_part('theme-parts/organs/review-list/review-list', null, $selectionGroup);
		?>
	</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="lb-layout__content">
				<? if (is_active_sidebar('default_sidebar')) { ?>
					<div class="lb-layout__sidebar">
						<? get_template_part('theme-parts/organisms/sidebar/sidebar', null, [
							'sidebar_variant' => 'default'
						]); ?>
					</div>
				<? } ?>
				<div class="lb-layout__inner">
					<div class="prose-headings prose-content prose-spaces prose-colors">
						<? the_content() ?>
						<?= do_shortcode('[show_wpb_author_info_box]'); ?>
					</div>
					<div class="lb-layout__content-taxs">
						<? get_template_part('theme-parts/molecules/tag-list', null, [
							'post_id' => get_the_ID()
						]); ?>
					</div>
					<div class="lb-layout__content-footer">
						<? get_template_part('theme-parts/organisms/post-footer/post-footer', null); ?>
					</div>
				</div>

			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<? get_template_part('theme-parts/organisms/before-footer-content/style-1'); ?>
</div>

<?php get_footer(); ?>
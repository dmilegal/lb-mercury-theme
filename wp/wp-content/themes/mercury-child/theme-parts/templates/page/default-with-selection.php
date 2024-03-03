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
			'enable_published_date' => !!get_field('hero_banner_show_published_date', get_the_ID()),
			'color' => 'white',
		]); ?>
	</div>

	<div>
		<?
		$selectionGroup = get_field('casino_selection_group', get_the_id()) ?? null;

		if ($selectionGroup && $selectionGroup['casino_list'])
			get_template_part('theme-parts/organs/casino-list/casino-list', null, $selectionGroup);
		?>
	</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="lb-layout__content">
				<div class="lb-layout__sidebar">
					<? get_template_part('theme-parts/organisms/sidebar/sidebar', null); ?>
				</div>
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
</div>

<?php get_footer(); ?>
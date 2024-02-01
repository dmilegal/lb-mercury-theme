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
			'align' => 'center',
			'enable_published_date' => false,
			'color' => 'white'
		]); ?>
	</div>

	<div>
		<?
		$list = get_field('casino_list', get_the_id()) ?? [];
		echo do_shortcode('[aces-casinos-8 items_number="10" external_link="1" category="" items_id="' . implode(',', $list) . '" exclude_id="" game_id="" show_title="1" order="DESC" orderby="rating" title=""]');
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

<?php get_header(); ?>
<div class="lb-layout lb-layout--with-sidebar">
	<div class="lb-layout__breadcrumbs">
		<?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
	</div>

	<div class="lb-layout__banner">
		<? get_template_part('theme-parts/cells/hero-banner', null, [
			'post_id' => get_the_ID(),
			'enable_published_date' => !!get_field('hero_banner_show_published_date', get_the_ID()),
		]); ?>
	</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="lb-layout__content">
				<div class="lb-layout__inner">
					<div class="prose-headings prose-content prose-spaces prose-colors">
						<? the_content() ?>
						<?= do_shortcode('[show_wpb_author_info_box]'); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<? get_template_part('theme-parts/organisms/before-footer-content/style-1'); ?>
</div>
<?php get_footer(); ?>
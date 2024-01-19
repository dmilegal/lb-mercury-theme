<?php get_header(); ?>
<div class="lb-layout lb-layout--with-sidebar">
	<div class="lb-layout__banner">
		<? get_template_part('theme-parts/molecules/hero-banner', null, [
			'title' => get_the_title(),
			'subtitle' => 'Lucy Bond is an interior designer who started her career in New Zealand, working for large architectural firms. We chatted to her about design and starting her own studio.',
			'published_date' => get_the_date('Y-m-d'),
		]); ?>
	</div>

	<div class="lb-layout__breadcrumbs">
		<?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="lb-layout__content">
				<div class="lb-layout__sidebar">
					<? get_template_part('theme-parts/organisms/sidebar/sidebar', null); ?>
				</div>
				<div class="lb-layout__inner prose-headings prose-content prose-spaces prose-colors">
					<? the_content() ?>
					<?= do_shortcode('[show_wpb_author_info_box]'); ?>
					<div class="lb-layout__content-footer">
						<? get_template_part('theme-parts/organisms/post-footer/post-footer', null); ?>
					</div>
				</div>

			</div>
		<?php endwhile; ?>
	<?php endif; ?>

</div>
<?php get_footer(); ?>
<?php get_header(); ?>

<?
get_template_part('theme-parts/molecules/hero-banner', null, [
	'title' => get_the_title(),
	'subtitle' => 'Lucy Bond is an interior designer who started her career in New Zealand, working for large architectural firms. We chatted to her about design and starting her own studio.',
	'published_date' => get_the_date(),
]);
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="lb-content-container lb-content--with-sidebar prose-headings prose-content prose-spaces prose-colors">
			<? get_template_part('theme-parts/organisms/sidebar/sidebar', null); ?>
			<div class="lb-content">
				<? the_content() ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
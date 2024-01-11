<?php get_header(); ?>
<div class="lb-layout lb-layout--sticky-box">
	<?
	get_template_part('theme-parts/molecules/hero-banner', null, [
		'title' => get_the_title(),
		'subtitle' => 'Lucy Bond is an interior designer who started her career in New Zealand, working for large architectural firms. We chatted to her about design and starting her own studio.',
		'published_date' => get_the_date('Y-m-d'),
		'className' => 'lb-layout__sticky-banner'
	]);
	?>

	<?
	if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="lb-content-container lb-layout__sticky-content">
				<div class="lb-content prose-headings prose-content prose-spaces prose-colors">
					<? the_content() ?>
					<?= do_shortcode('[show_wpb_author_info_box]'); ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="lb-layout__sticky-box">
		<div class="lb-layout__sticky-box-container">
		<?
		get_template_part('theme-parts/molecules/promo-bonus', null, [
			
		]);

		?>
		</div>
		
	</div>
</div>


<?php get_footer(); ?>
<?php get_header(); ?>
<div class="lb-layout lb-layout--sticky-box">
	<?
	get_template_part('theme-parts/molecules/hero-casino-banner', null, [
		'post_id' => get_the_ID(),
		'className' => 'lb-layout__sticky-banner',
		'col_span' => true,
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
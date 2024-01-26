<?php get_header();


$organization_disable_details = esc_attr(get_post_meta(get_the_ID(), 'organization_disable_details', true));

?>
<div class="lb-layout lb-layout--sticky-box">
	<div class="lb-layout__breadcrumbs">
		<?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
	</div>
	
	<div class="lb-layout__banner">
		<? get_template_part('theme-parts/cells/hero-casino-banner', null, [
			'post_id' => get_the_ID(),
			'col_span' => true,
		]); ?>
	</div>

	<? if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="lb-layout__content">
				<div class="lb-layout__inner">
					<div class="prose-headings prose-content prose-spaces prose-colors">
						<?
						if (!$organization_disable_details)
							get_template_part('theme-parts/cells/casino-details', null, ['post_id' => get_the_ID(),]);
						?>
						<? the_content() ?>
						<?= do_shortcode('[show_wpb_author_info_box]'); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>


</div>


<?php get_footer(); ?>
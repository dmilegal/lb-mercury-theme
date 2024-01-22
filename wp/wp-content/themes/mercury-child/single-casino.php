<?php get_header();


$organization_disable_details = esc_attr(get_post_meta(get_the_ID(), 'organization_disable_details', true));

?>
<div class="lb-layout lb-layout--sticky-box">
	<div class="lb-layout__banner">
		<? get_template_part('theme-parts/molecules/hero-casino-banner', null, [
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
						<? get_template_part('theme-parts/molecules/casino-card', null, ['casino_id' => get_the_ID(),]); ?>
						<? the_content() ?>
						<?= do_shortcode('[show_wpb_author_info_box]'); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<? if (hasCasinoBonus(get_the_ID())) { ?>
		<div class="lb-layout__sticky-box">
			<div class="lb-layout__sticky-box-container">
				<? get_template_part('theme-parts/molecules/promo-bonus', null, [
					'casino_id' => get_the_ID()
				]); ?>
			</div>
		</div>
	<? } ?>
</div>


<?php get_footer(); ?>
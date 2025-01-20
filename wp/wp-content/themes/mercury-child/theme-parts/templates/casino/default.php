<?php get_header();

$organization_disable_details = esc_attr(get_post_meta(get_the_ID(), 'organization_disable_details', true));
$casino_rating_trust = esc_html(get_post_meta(get_the_ID(), 'casino_rating_trust', true));
$casino_rating_games = esc_html(get_post_meta(get_the_ID(), 'casino_rating_games', true));
$casino_rating_bonus = esc_html(get_post_meta(get_the_ID(), 'casino_rating_bonus', true));
$casino_rating_customer = esc_html(get_post_meta(get_the_ID(), 'casino_rating_customer', true));
$casino_overall_rating = esc_html(get_post_meta(get_the_ID(), 'casino_overall_rating', true));

if (get_option('aces_rating_stars_number')) {
	$casino_rating_stars_number_value = get_option('aces_rating_stars_number');
} else {
	$casino_rating_stars_number_value = '5';
}

?>
<div class="lb-layout lb-layout--sticky-box">
	<div class="lb-layout__breadcrumbs">
		<?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
	</div>

	<div class="lb-layout__relative">
		<div class="lb-layout__banner">
			<? get_template_part('theme-parts/cells/hero-review-banner-next', null, [
				'post_id' => get_the_ID(),
				'col_span' => true,
			]); ?>
		</div>

		<? if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="lb-layout__content">
					<div class="lb-layout__inner">
						<div class="prose-headings prose-content prose-spaces prose-colors">
							<div class="space-organization-content-rating-ins text-center relative">

								<div class="space-organization-content-rating-overall relative">
									<label>
										<?php
										$rating_overall_title = get_option('rating_overall');
										if ($rating_overall_title) {
											echo esc_html($rating_overall_title);
										} else {
											esc_html_e('Overall Rating', 'mercury-child');
										} ?>
									</label>
									<?php if (function_exists('aces_star_rating')) {
										aces_star_rating(
											array(
												'rating' => $casino_overall_rating,
												'type' => 'rating',
												'stars_number' => $casino_rating_stars_number_value
											)
										);
									} ?>
								</div>
								<div class="space-organization-content-rating-items box-100 relative">

									<?php if ($casino_rating_trust) { ?>
										<div class="space-organization-content-rating-item box-50 relative">
											<label>
												<?php
												$rating_1_title = get_option('rating_1');
												if ($rating_1_title) {
													echo esc_html($rating_1_title);
												} else {
													esc_html_e('Trust & Fairness', 'mercury-child');
												} ?>
											</label>
											<div class="space-organization-content-rating-stars relative">
												<?php if (function_exists('aces_star_rating')) {
													aces_star_rating(
														array(
															'rating' => $casino_rating_trust,
															'type' => 'rating',
															'stars_number' => $casino_rating_stars_number_value
														)
													);
												} ?>
											</div>
										</div>
									<?php } ?>

									<?php if ($casino_rating_games) { ?>
										<div class="space-organization-content-rating-item box-50 relative">
											<label>
												<?php
												$rating_2_title = get_option('rating_2');
												if ($rating_2_title) {
													echo esc_html($rating_2_title);
												} else {
													esc_html_e('Games & Software', 'mercury-child');
												} ?>
											</label>
											<div class="space-organization-content-rating-stars relative">
												<?php if (function_exists('aces_star_rating')) {
													aces_star_rating(
														array(
															'rating' => $casino_rating_games,
															'type' => 'rating',
															'stars_number' => $casino_rating_stars_number_value
														)
													);
												} ?>
											</div>
										</div>
									<?php } ?>

									<?php if ($casino_rating_bonus) { ?>
										<div class="space-organization-content-rating-item box-50 relative">
											<label>
												<?php
												$rating_3_title = get_option('rating_3');
												if ($rating_3_title) {
													echo esc_html($rating_3_title);
												} else {
													esc_html_e('Bonuses & Promotions', 'mercury-child');
												} ?>
											</label>
											<div class="space-organization-content-rating-stars relative">
												<?php if (function_exists('aces_star_rating')) {
													aces_star_rating(
														array(
															'rating' => $casino_rating_bonus,
															'type' => 'rating',
															'stars_number' => $casino_rating_stars_number_value
														)
													);
												} ?>
											</div>
										</div>
									<?php } ?>

									<?php if ($casino_rating_customer) { ?>
										<div class="space-organization-content-rating-item box-50 relative">
											<label>
												<?php
												$rating_4_title = get_option('rating_4');
												if ($rating_4_title) {
													echo esc_html($rating_4_title);
												} else {
													esc_html_e('Customer Support', 'mercury-child');
												} ?>
											</label>
											<div class="space-organization-content-rating-stars relative">
												<?php if (function_exists('aces_star_rating')) {
													aces_star_rating(
														array(
															'rating' => $casino_rating_customer,
															'type' => 'rating',
															'stars_number' => $casino_rating_stars_number_value
														)
													);
												} ?>
											</div>
										</div>
									<?php } ?>

								</div>
							</div>
							<? the_content() ?>
							<? if (!$organization_disable_details)
								get_template_part('theme-parts/cells/review-details', null, ['post_id' => get_the_ID(),]); ?>
							<?= do_shortcode('[show_wpb_author_info_box]'); ?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<? get_template_part('theme-parts/organisms/before-footer-content/style-1'); ?>
</div>


<?php get_footer(); ?>
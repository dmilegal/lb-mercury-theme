<?php
/*  Mercury - 3.9.2  */
	$record = apply_filters('geoip_object', '');
	$country = $record->country->name;
	$flag = $record->extra->flag;

	$bonus_fields = get_field('bonus_fields');

	$casino_allowed_html = array(
		'a' => array(
			'href' => true,
			'title' => true,
			'target' => true,
			'rel' => true
		),
		'img' => array(
			'src' => true,
			'alt' => true
		),
		'br' => true,
		'em' => array(),
		'strong' => true,
		'span' => array(
			'class' => true
		),
		'div' => array(
			'class' => true
		),
		'p' => array(),
		'ul' => array(),
		'ol' => array(),
		'li' => array(),
	);

	$casino_short_desc = wp_kses( get_post_meta( get_the_ID(), 'casino_short_desc', true ), $casino_allowed_html );
	$casino_terms_desc = wp_kses( get_post_meta( get_the_ID(), 'casino_terms_desc', true ), $casino_allowed_html );
	$casino_external_link = esc_url( get_post_meta( get_the_ID(), 'casino_external_link', true ) );
	$casino_button_title = esc_html( get_post_meta( get_the_ID(), 'casino_button_title', true ) );
	$casino_button_notice = wp_kses( get_post_meta( get_the_ID(), 'casino_button_notice', true ), $casino_allowed_html );
	$casino_rating_trust = esc_html( get_post_meta( get_the_ID(), 'casino_rating_trust', true ) );
	$casino_rating_games = esc_html( get_post_meta( get_the_ID(), 'casino_rating_games', true ) );
	$casino_rating_bonus = esc_html( get_post_meta( get_the_ID(), 'casino_rating_bonus', true ) );
	$casino_rating_customer = esc_html( get_post_meta( get_the_ID(), 'casino_rating_customer', true ) );
	$casino_overall_rating = esc_html( get_post_meta( get_the_ID(), 'casino_overall_rating', true ) );
	$organization_popup_hide = esc_attr( get_post_meta( get_the_ID(), 'aces_organization_popup_hide', true ) );
	$organization_popup_title = esc_html( get_post_meta( get_the_ID(), 'aces_organization_popup_title', true ) );
	$organization_disable_details = esc_attr( get_post_meta( get_the_ID(), 'organization_disable_details', true ) );
	$organization_disable_rating_block = esc_attr( get_post_meta( get_the_ID(), 'organization_disable_rating_block', true ) );
	$organization_disable_related_units = esc_attr( get_post_meta( get_the_ID(), 'organization_disable_related_units', true ) );
	$organization_disable_related_offers = esc_attr( get_post_meta( get_the_ID(), 'organization_disable_related_offers', true ) );

	$casino_detailed_tc = wp_kses( get_post_meta( get_the_ID(), 'casino_detailed_tc', true ), $casino_allowed_html );

	$sett_bonus_tf = get_field('sett_bonus_tf','option');

	if ($casino_button_title) {
		$button_title = $casino_button_title;
	} else {
		if ( get_option( 'casinos_play_now_title') ) {
			$button_title = esc_html( get_option( 'casinos_play_now_title') );
		} else {
			$button_title = esc_html__( 'Play Now', 'mercury-child' );
		}
	}

	if ($organization_popup_title) {
		$custom_popup_title = $organization_popup_title;
	} else {
		$custom_popup_title = esc_html__( 'T&Cs Apply', 'mercury-child' );
	}

	if ( get_option( 'aces_rating_stars_number' ) ) {
		$casino_rating_stars_number_value = get_option( 'aces_rating_stars_number' );
	} else {
		$casino_rating_stars_number_value = '5';
	}

	$casino_software = wp_get_object_terms( $post->ID, 'software' );
	$casino_deposit_methods = wp_get_object_terms( $post->ID, 'deposit-method' );
	$casino_withdrawal_methods = wp_get_object_terms( $post->ID, 'withdrawal-method' );
	$casino_withdrawal_limits = wp_get_object_terms( $post->ID, 'withdrawal-limit' );
	$casino_restricted_countries = wp_get_object_terms( $post->ID, 'restricted-country' );
	$casino_licences = wp_get_object_terms( $post->ID, 'licence' );
	$casino_languages = wp_get_object_terms( $post->ID, 'casino-language' );
	$casino_currencies = wp_get_object_terms( $post->ID, 'currency' );
	$casino_devices = wp_get_object_terms( $post->ID, 'device' );
	$casino_owner = wp_get_object_terms( $post->ID, 'owner' );
	$casino_est = wp_get_object_terms( $post->ID, 'casino-est' );
	$casino_background_image_id = esc_html( get_post_meta( get_the_ID(), 'aces_single_casino_background_image', true ) );

	if (get_the_author_meta( 'url' )) {
		$author_schema_url = esc_url( get_the_author_meta( 'url' ));
	} else {
		$author_schema_url = esc_url( home_url( '/' ));
	}
?>

<script type="application/ld+json">
	{
		"@context": "http://schema.org/",
		"@type": "Review",
		"itemReviewed": {
		    "@type": "Organization",
		    "name": "<?php the_title(); ?>",
		    "image": "<?php $src_schema = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); echo esc_url($src_schema[0]); ?>"
		},
		"author": {
		    "@type": "Person",
		    "name": "<?php echo esc_attr(get_the_author()); ?>",
		    "url": "<?php echo esc_url( $author_schema_url ); ?>"
		},
		"reviewRating": {
		    "@type": "Rating",
		    "ratingValue": "<?php echo esc_attr($casino_overall_rating); ?>",
		    "bestRating": "<?php echo esc_attr($casino_rating_stars_number_value); ?>",
		    "worstRating": "1"
		},
		"datePublished": "<?php echo get_the_date(); ?>",
		"reviewBody": "<?php echo esc_html(get_the_excerpt()); ?>"
	}
</script>

<?php
$src_background_desktop = wp_get_attachment_image_src($casino_background_image_id, 'mercury-2000-400');
$src_background_tablet = wp_get_attachment_image_src($casino_background_image_id, 'mercury-767-767');
$src_background_mobile = wp_get_attachment_image_src($casino_background_image_id, 'mercury-479-479');
if ($src_background_desktop) {
?>
	<style type="text/css">
		.background-img-3 {
			background-image: url('<?php echo esc_url($src_background_desktop[0]); ?>');
		}
		@media screen and (max-width: 767px) and (min-width: 480px) {
			.background-img-3 {
				background-image: url('<?php echo esc_url($src_background_tablet[0]); ?>');
			}
		}
		@media screen and (max-width: 479px) {
			.background-img-3 {
				background-image: url('<?php echo esc_url($src_background_mobile[0]); ?>');
			}
		}
	</style>
<?php } ?>

<div class="space-single-organization space-style-3-organization relative">

	<!-- Organization Header Start -->

	<div class="space-style-3-organization-header box-100 relative background-img-3">
		<div class="space-overlay absolute"></div>
		<div class="space-style-3-organization-header-ins space-page-wrapper relative">
			<div class="space-style-3-organization-header-elements box-100 relative">
				<div class="space-style-3-organization-header-left text-center box-25 relative">
					<div class="space-style-3-organization-header-left-ins relative">
						<div class="space-style-3-organization-header-logo-box relative">
							<?php
							$post_title_attr = the_title_attribute( 'echo=0' );
							if ( wp_get_attachment_image(get_post_thumbnail_id()) ) {
								echo wp_get_attachment_image( get_post_thumbnail_id(), 'mercury-270-270', "", array( "alt" => $post_title_attr ) );
							} ?>
						</div>
					</div>
				</div>
				<div class="space-style-3-organization-header-right box-75 relative">
					<div class="space-style-3-organization-header-rating absolute">
						<div class="space-rating-star-wrap relative">
							<div class="space-rating-star-background absolute"></div>
							<div class="space-rating-star-icon absolute">
								<i class="fas fa-star"></i>
							</div>
						</div>
						<strong><?php echo esc_html( number_format( (float)$casino_overall_rating, 1, '.', ',') ); ?></strong>/<?php echo esc_html( $casino_rating_stars_number_value ); ?>
					</div>
					<div class="space-style-3-organization-header-right-ins box-100 relative">
						<div class="space-style-3-organization-header-title relative">
							<div class="space-style-3-organization-header-title-box relative">
								<div class="space-organization-header-title-box-ins box-100 relative">
									<div class="title-wrap">
										<!-- Title Start -->

										<h1><?php the_title(); ?></h1>

											<!-- Title End -->

										<div class="space-organizations-7-archive-item-badges">
											<?php if($bonus_fields && $bonus_fields['trusted']) { ?>
												<div class="trust"><?php esc_html_e('Trusted', 'aces'); ?></div>
											<? } 
											if($bonus_fields && $bonus_fields['best_for'] && $sett_bonus_tf) { ?>
												<div class="best">
													<img role="img" class="emoji" alt="🔥" src="https://s.w.org/images/core/emoji/13.1.0/svg/1f525.svg">
													<?php echo esc_html($bonus_fields['best_for']); ?>
												</div>
											<?php } ?>
										</div>
									</div>

									<?php if ($casino_short_desc) { ?>

									<!-- Short Description of the Organization Start -->

									<div class="space-style-3-organization-header-short-desc relative">
										<?php echo wp_kses( $casino_short_desc, $casino_allowed_html ); ?>
									</div>

									<!-- Short Description of the Organization End -->

									<?php } ?>

									<div class="space-header-accepted-info box-100 relative">
										<?php
										echo $flag;
										/* in_array($country, array_column($casino_restricted_countries, 'name'))
											? esc_html_e( ' Users from ' . $country . ' are not accepted', 'aces' )
											: esc_html_e( ' Users from ' . $country . ' are accepted', 'aces' ); */
										in_array($country, array_column($casino_restricted_countries, 'name'))
											? esc_html_e(
												sprintf(
													__('Users from %s are not accepted', 'aces'),
													$country
												)
											)
											: esc_html_e(
												sprintf(
													__('Users from %s are accepted', 'aces'),
													$country
												)
											)
										?>
									</div>

									<?php
									if ($organization_popup_hide == true ) {

									} else {
										if ($casino_detailed_tc) { ?>

											<div class="space-organizations-archive-item-detailed-tc box-100 relative">
												<div class="space-organizations-archive-item-detailed-tc-ins relative">
													<?php echo wp_kses( $casino_detailed_tc, $casino_allowed_html ); ?>
												</div>
											</div>
											
										<?php
										}
									}
									?>

								</div>
							</div>
							<div class="space-style-3-organization-header-button relative">
								<div class="space-style-3-organization-header-button-ins text-center relative">

									<?php if ($casino_external_link) { ?>

									<!-- Button Start -->

									<a href="<?php echo esc_url( $casino_external_link ); ?>" title="<?php echo esc_attr( $button_title ); ?>" class="space-style-3-button" rel="nofollow" target="_blank"><?php echo esc_html( $button_title ); ?></a>

									<!-- Button End -->

									<?php } ?>

									<?php if ($organization_popup_hide == true ) { ?>
										<div class="space-organization-header-button-notice relative" style="margin-top: 5px;">
											<span class="tc-apply"><?php echo esc_html( $custom_popup_title ); ?></span>
											<div class="tc-desc">
												<?php
													if ($casino_detailed_tc) {
														echo wp_kses( $casino_detailed_tc, $casino_allowed_html );
													}
												?>
											</div>
										</div>
									<?php } ?>

									<?php if ($casino_button_notice) { ?>

									<!-- The notice below of the button Start -->

									<div class="space-style-3-organization-header-button-notice relative">
										<?php echo wp_kses( $casino_button_notice, $casino_allowed_html ); ?>
									</div>

									<!-- The notice below of the button End -->

									<?php } ?>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Organization Header End -->

	<?php if ($bonus_fields) { ?>
		<div class="bonus-content">
			<?php if($bonus_fields['bonus_title'] && $sett_bonus_tf) { ?>
				<div class="bonus-title">
					<strong><?php echo ($bonus_fields['bonus_title']); ?></strong>
				</div>
			<?php } ?>
			
			<? if($sett_bonus_tf): ?>
				<div class="bonus-features">
					<div><i class="fas fa-user"></i><strong><?php esc_html_e('For whom:', 'aces'); ?> </strong><?php esc_html_e($bonus_fields['for_whom'], 'aces'); ?></div>
					<div><i class="fas fa-dice"></i><strong><?php esc_html_e('Form:', 'aces'); ?> </strong><?php esc_html_e($bonus_fields['form'], 'aces'); ?></div>
					<div><i class="fas fa-percent"></i><strong><?php esc_html_e('Type:', 'aces'); ?> </strong><?php esc_html_e($bonus_fields['type'], 'aces'); ?></div>
					<div><i class="fas fa-clipboard"></i><strong><?php esc_html_e('Term:', 'aces'); ?> </strong><?php esc_html_e($bonus_fields['term'], 'aces'); ?></div>
					<div><i class="fas fa-thumbs-up"></i><strong><?php esc_html_e('Best bonus:', 'aces'); ?> </strong><?php esc_html_e($bonus_fields['best_bonus'], 'aces'); ?></div>
					<div><i class="fas fa-wallet"></i><strong><?php esc_html_e('Cashback:', 'aces'); ?> </strong><?php esc_html_e($bonus_fields['cashback'], 'aces'); ?></div>
					<div><i class="fas fa-gift"></i><strong><?php esc_html_e('Birthday bonus:', 'aces'); ?> </strong><?php esc_html_e($bonus_fields['birthday_bonus'], 'aces'); ?></div>
				</div>
			<? endif; ?>
			<div class="space-organizations-7-archive-item-button-two bonus-button">
				<?php if(empty($casino_external_link) || $casino_external_link == '#') : ?>
						<a href="#" onclick="noRefPopup(event)" title="<?php echo esc_attr( $button_title ); ?>"><?php echo esc_html( $button_title ); ?></a>
				<?php else: ?>
						<a href="<?php echo esc_attr($casino_external_link); ?>" title="<?php echo esc_attr( $button_title ); ?>" <?php if ($external_link) { ?>target="_blank" rel="nofollow"<?php } ?>><?php echo esc_html( $button_title ); ?></a>
				<?php endif; ?>
			</div>

			<?php if ($bonus_fields['bonus_description'] && $sett_bonus_tf) { ?>
				<div class="bonus-desc">
					<?php echo $bonus_fields['bonus_description']; ?>
				</div>
			<?php } ?>
		</div>
	<?php } ?>

	<!-- Breadcrumbs Start -->

	<?php get_template_part( '/theme-parts/breadcrumbs' ); ?>

	<!-- Breadcrumbs End -->

		<!-- Single Organization Page Section Start -->

		<div class="space-page-section box-100 relative style-3-without-sidebar">
			<div class="space-page-section-ins space-page-wrapper relative">
				<div class="space-content-section box-100 relative">

							<div class="space-page-content-wrap relative">

								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<?php if(function_exists('spacethemes_set_post_views')) { spacethemes_set_post_views(get_the_ID()); } ?>

								<?php if(has_excerpt()) { ?>
								<div class="space-organization-content-excerpt relative">
									<?php the_excerpt(); ?>
								</div>
								<?php } ?>

								<div class="space-page-content-box-wrap relative">
									<div class="space-page-content box-100 relative">
										<?php
											the_content();
											wp_link_pages( array(
												'before'      => '<div class="clear"></div><nav class="navigation pagination-post">' . esc_html__( 'Pages:', 'mercury-child' ),
												'after'       => '</nav>',
												'link_before' => '<span class="page-number">',
												'link_after'  => '</span>',
											) );
										?>
									</div>
								</div>

								<?php if ($organization_disable_details == true ) {
					
								} else { ?>

									<?php if ( $casino_software || $casino_deposit_methods || $casino_withdrawal_methods || $casino_withdrawal_limits || $casino_restricted_countries || $casino_licences || $casino_languages || $casino_currencies || $casino_devices || $casino_owner || $casino_est ) { ?>

									<!-- Organization Details Start -->

									<div class="space-organization-details box-100 relative">
										<div class="space-organization-details-title box-100 relative">
											<h3><?php the_title(); ?> <?php esc_html_e( 'Details', 'mercury-child' ); ?></h3>
										</div>

										<?php if ($casino_software) { ?>

										<!-- Organization Software Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-puzzle-piece"></i></span> <?php if ( get_option( 'casinos_software_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_software_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Software', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_software as $software ) {
													$software_logo = get_term_meta($software->term_id, 'taxonomy-image-id', true);
													if ($software_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $software_logo, 'mercury-9999-32', "", array( "class" => "space-software-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span><?php echo esc_html($software->name); ?></span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Software End -->

										<?php } ?>

										<?php if ($casino_deposit_methods) { ?>

										<!-- Organization Deposit Methods Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-credit-card"></i></span> <?php if ( get_option( 'casinos_deposit_method_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_deposit_method_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Deposit Methods', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_deposit_methods as $deposit ) {
													$deposit_logo = get_term_meta($deposit->term_id, 'taxonomy-image-id', true);
													if ($deposit_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $deposit_logo, 'mercury-9999-32', "", array( "class" => "space-deposit-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span><?php echo esc_html($deposit->name); ?></span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Deposit Methods End -->

										<?php } ?>

										<?php if ($casino_withdrawal_methods) { ?>

										<!-- Organization Withdrawal Methods Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-wallet"></i></span> <?php if ( get_option( 'casinos_withdrawal_method_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_withdrawal_method_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Withdrawal Methods', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_withdrawal_methods as $withdrawal ) {
													$withdrawal_logo = get_term_meta($withdrawal->term_id, 'taxonomy-image-id', true);
													if ($withdrawal_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $withdrawal_logo, 'mercury-9999-32', "", array( "class" => "space-withdrawal-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span><?php echo esc_html($withdrawal->name); ?></span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Withdrawal Methods End -->

										<?php } ?>

										<?php if ($casino_withdrawal_limits) { ?>

										<!-- Organization Withdrawal Limits Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-coins"></i></span> <?php if ( get_option( 'casinos_withdrawal_limit_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_withdrawal_limit_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Withdrawal Limits', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_withdrawal_limits as $limit ) {
													$limit_logo = get_term_meta($limit->term_id, 'taxonomy-image-id', true);
													if ($limit_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $limit_logo, 'mercury-9999-32', "", array( "class" => "space-limit-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span><?php echo esc_html($limit->name); ?></span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Withdrawal Limits End -->

										<?php } ?>

										<?php if ($casino_restricted_countries) { ?>

										<!-- Organization Restricted Countries Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-flag"></i></span> <?php if ( get_option( 'casinos_restricted_countries_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_restricted_countries_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Restricted Countries', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_restricted_countries as $country ) {
													$country_flag = get_term_meta($country->term_id, 'taxonomy-image-id', true);
													if ($country_flag) { ?>
														<span class="flag-item">
															<?php echo wp_get_attachment_image( $country_flag, 'mercury-9999-32', "", array( "class" => "space-country-flag" ) );  ?>
														</span>
													<?php } else {  ?>
														<span><?php echo esc_html($country->name); ?></span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Restricted Countries End -->

										<?php } ?>

										<?php if ($casino_licences) { ?>

										<!-- Organization Licences Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-file-alt"></i></span> <?php if ( get_option( 'casinos_licences_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_licences_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Licences', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_licences as $licence ) {
													$licence_logo = get_term_meta($licence->term_id, 'taxonomy-image-id', true);
													if ($licence_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $licence_logo, 'mercury-9999-32', "", array( "class" => "space-licence-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span><?php echo esc_html($licence->name); ?></span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Licences End -->

										<?php } ?>

										<?php if ($casino_languages) { ?>

										<!-- Organization Languages Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-globe"></i></span> <?php if ( get_option( 'casinos_languages_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_languages_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Languages', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_languages as $language ) {
													$language_logo = get_term_meta($language->term_id, 'taxonomy-image-id', true);
													if ($language_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $language_logo, 'mercury-9999-32', "", array( "class" => "space-language-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span><?php echo esc_html($language->name); ?></span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Languages End -->

										<?php } ?>

										<?php if ($casino_currencies) { ?>

										<!-- Organization Currencies Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-dollar-sign"></i></span> <?php if ( get_option( 'casinos_currencies_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_currencies_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Currencies', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_currencies as $currency ) {
													$currency_logo = get_term_meta($currency->term_id, 'taxonomy-image-id', true);
													if ($currency_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $currency_logo, 'mercury-9999-32', "", array( "class" => "space-currency-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span><?php echo esc_html($currency->name); ?></span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Currencies End -->

										<?php } ?>

										<?php if ($casino_devices) { ?>

										<!-- Organization Devices Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-desktop"></i></span> <?php if ( get_option( 'casinos_devices_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_devices_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Devices', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_devices as $device ) {
													$device_logo = get_term_meta($device->term_id, 'taxonomy-image-id', true);
													if ($device_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $device_logo, 'mercury-9999-32', "", array( "class" => "space-device-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span><?php echo esc_html($device->name); ?></span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Devices End -->

										<?php } ?>

										<?php if ($casino_owner) { ?>

										<!-- Organization Owner Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-building"></i></span> <?php if ( get_option( 'casinos_owner_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_owner_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Owner', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_owner as $owner ) {
													$owner_logo = get_term_meta($owner->term_id, 'taxonomy-image-id', true);
													if ($owner_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $owner_logo, 'mercury-9999-32', "", array( "class" => "space-owner-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span>
															<?php echo esc_html($owner->name); ?>
														</span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Owner End -->

										<?php } ?>

										<?php if ($casino_est) { ?>

										<!-- Organization Established Start -->

										<div class="space-organization-details-item box-100 relative">
											<div class="space-organization-details-item-title box-33 relative">
												<span><i class="fas fa-glass-cheers"></i></span> <?php if ( get_option( 'casinos_est_title') ) { ?>
														<?php echo esc_html( get_option( 'casinos_est_title') ); ?>
													<?php } else { ?>
														<?php esc_html_e( 'Established', 'mercury-child' ); ?>
													<?php } ?>
											</div>
											<div class="space-organization-details-item-links box-66 relative">
												<?php foreach ( $casino_est as $est ) {
													$est_logo = get_term_meta($est->term_id, 'taxonomy-image-id', true);
													if ($est_logo) { ?>
														<span class="logo-item">
															<?php echo wp_get_attachment_image( $est_logo, 'mercury-9999-32', "", array( "class" => "space-est-logo" ) );  ?>
														</span>
													<?php } else {  ?>
														<span>
															<?php echo esc_html($est->name); ?>
														</span>
													<?php } ?>
												<?php } ?>
											</div>
										</div>

										<!-- Organization Established End -->

										<?php } ?>

									</div>

									<!-- Organization Details End -->

									<?php } ?>

								<?php } ?>

								<?php if ($organization_disable_rating_block == true ) {
					
								} else { ?>

									<!-- Ratings Block Start -->

									<div class="space-organization-style-2-calltoaction-rating relative">
										<div class="space-organization-style-2-calltoaction-rating-ins box-100 relative">
											<div class="space-organization-style-2-calltoaction-block box-100 relative">
												<div class="space-organization-style-2-calltoaction-text box-66 relative">

													<?php if ($casino_terms_desc) { ?>

													<!-- Terms Start -->

													<div class="space-organization-style-2-calltoaction-text-ins relative">
														<?php echo wp_kses( $casino_terms_desc, $casino_allowed_html ); ?>
													</div>

													<!-- Terms End -->

													<?php } ?>

												</div>
												<div class="space-organization-style-2-calltoaction-button box-33 text-right relative">

													<?php if ($casino_external_link) { ?>

													<!-- Button Start -->

													<div class="space-organization-style-2-calltoaction-button-ins text-center relative">
														<a href="<?php echo esc_url( $casino_external_link ); ?>" title="<?php echo esc_html( $button_title ); ?>" class="space-calltoaction-button" rel="nofollow" target="_blank"><?php echo esc_html( $button_title ); ?> <i class="fas fa-arrow-alt-circle-right"></i></a>

														<?php if ($casino_button_notice) { ?>

														<!-- The notice below of the button Start -->

														<div class="space-organization-style-2-calltoaction-button-notice relative">
															<?php echo wp_kses( $casino_button_notice, $casino_allowed_html ); ?>
														</div>

														<!-- The notice below of the button End -->

														<?php } ?>

													</div>

													<!-- Button End -->

													<?php } ?>

												</div>
											</div>
											<div class="space-organization-style-2-ratings-block box-100 relative">
												<div class="space-organization-style-2-ratings-all box-66 relative">
													<div class="space-organization-style-2-ratings-all-ins box-100 relative">

														<?php if ($casino_rating_trust) { ?>
														<div class="space-organization-style-2-ratings-all-item box-50 relative">
															<div class="space-organization-style-2-ratings-all-item-ins relative">
																<div class="space-organization-style-2-ratings-all-item-value relative">
																	<?php echo esc_html( number_format( (float)$casino_rating_trust, 1, '.', ',') ); ?> <i class="fas fa-star"></i>
																</div>
																<?php
																$rating_1_title = get_option( 'rating_1' );
																if ( $rating_1_title ) {
																	echo esc_html($rating_1_title);
																} else {
																	esc_html_e( 'Trust & Fairness', 'mercury-child' );
																} ?>
															</div>
														</div>
														<?php } ?>

														<?php if ($casino_rating_games) { ?>
														<div class="space-organization-style-2-ratings-all-item box-50 relative">
															<div class="space-organization-style-2-ratings-all-item-ins relative">
																<div class="space-organization-style-2-ratings-all-item-value relative">
																	<?php echo esc_html( number_format( (float)$casino_rating_games, 1, '.', ',') ); ?> <i class="fas fa-star"></i>
																</div>
																<?php
																$rating_2_title = get_option( 'rating_2' );
																if ( $rating_2_title ) {
																	echo esc_html($rating_2_title);
																} else {
																	esc_html_e( 'Games & Software', 'mercury-child' );
																} ?>
															</div>
														</div>
														<?php } ?>

														<?php if ($casino_rating_bonus) { ?>
														<div class="space-organization-style-2-ratings-all-item box-50 relative">
															<div class="space-organization-style-2-ratings-all-item-ins relative">
																<div class="space-organization-style-2-ratings-all-item-value relative">
																	<?php echo esc_html( number_format( (float)$casino_rating_bonus, 1, '.', ',') ); ?> <i class="fas fa-star"></i>
																</div>
																<?php
																$rating_3_title = get_option( 'rating_3' );
																if ( $rating_3_title ) {
																	echo esc_html($rating_3_title);
																} else {
																	esc_html_e( 'Bonuses & Promotions', 'mercury-child' );
																} ?>
															</div>
														</div>
														<?php } ?>

														<?php if ($casino_rating_customer) { ?>
														<div class="space-organization-style-2-ratings-all-item box-50 relative">
															<div class="space-organization-style-2-ratings-all-item-ins relative">
																<div class="space-organization-style-2-ratings-all-item-value relative">
																	<?php echo esc_html( number_format( (float)$casino_rating_customer, 1, '.', ',') ); ?> <i class="fas fa-star"></i>
																</div>
																<?php
																$rating_4_title = get_option( 'rating_4' );
																if ( $rating_4_title ) {
																	echo esc_html($rating_4_title);
																} else {
																	esc_html_e( 'Customer Support', 'mercury-child' );
																} ?>
															</div>
														</div>
														<?php } ?>

													</div>
												</div>
												<div class="space-organization-style-2-rating-overall box-33 relative">
													<div class="space-organization-style-2-rating-overall-ins text-center relative">
														<?php echo esc_html( number_format( (float)$casino_overall_rating, 1, '.', ',') ); ?>
														<span>
															<?php
															$rating_overall_title = get_option( 'rating_overall' );
															if ( $rating_overall_title ) {
																echo esc_html($rating_overall_title);
															} else {
																esc_html_e( 'Overall Rating', 'mercury-child' );
															} ?>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Ratings Block End -->

								<?php } ?>

								<?php endwhile; ?>
								<?php endif; ?>

							</div>


					<?php
					$post_id_related = '"'.$post->ID.'"';
					?>

					<?php if ($organization_disable_related_units == true ) {
					
					} else { ?>

						<!-- Related Units Start -->

						<?php
							$game_args = get_posts(
								array(
									'posts_per_page' => 8,
									'post_type' => 'game',
									'meta_query' => array(
								        array(
								            'key' => 'parent_casino',
								            'value' => $post_id_related,
								            'compare' => 'LIKE'
								        )
								    )
								)
							);
							if( $game_args ){
						?>

						<div class="space-related-items box-100 read-more-block relative">
							<div class="space-related-items-ins space-page-wrapper relative">
								<div class="space-block-title relative">
									<span>
										<?php the_title(); ?> <?php if ( get_option( 'games_section_name') ) {
											esc_html_e( get_option( 'games_section_name') );
										} else {
											esc_html_e( 'Games', 'mercury-child' );
										} ?>
									</span>
								</div>
								<div class="space-units-archive-items box-100 relative">

									<?php
										foreach( $game_args as $post ){
										setup_postdata($post);
										
										// connect the game loop item style
										get_template_part( '/aces/game-item-style-1' );

										}
										wp_reset_postdata();
									?>

								</div>
							</div>
						</div>

						<?php } ?>

						<!-- Related Units End -->

					<?php } ?>

					<?php if ($organization_disable_related_offers == true ) {
					
					} else { ?>

						<!-- Related Offers Start -->

						<?php
							$bonus_args = get_posts(
								array(
									'posts_per_page' => 4,
									'post_type' => 'bonus',
									'meta_query' => array(
								        array(
								            'key' => 'bonus_parent_casino',
								            'value' => $post_id_related,
								            'compare' => 'LIKE'
								        )
								    )
								)
							);
							if( $bonus_args ){
						?>

						<div class="space-related-items box-100 read-more-block relative">
							<div class="space-related-items-ins space-page-wrapper relative">
								<div class="space-block-title relative">
									<span>
										<?php the_title(); ?> <?php if ( get_option( 'bonuses_section_name') ) {
											esc_html_e( get_option( 'bonuses_section_name') );
										} else {
											esc_html_e( 'Bonuses', 'mercury-child' );
										} ?>
									</span>
								</div>
								<div class="space-offers-archive-items box-100 relative">

									<?php
										foreach( $bonus_args as $post ){
										setup_postdata($post);
										
										// connect the bonus loop item style
										get_template_part( '/aces/bonus-item-style-1' );

										}
										wp_reset_postdata();
									?>

								</div>
							</div>
						</div>

						<?php } ?>

						<!-- Related Offers End -->

					<?php } ?>

					<?php if ( comments_open() || get_comments_number() ) :?>

					<!-- Comments Start -->

					<?php comments_template(); ?>

					<!-- Comments End -->

					<?php endif; ?>

				</div>
			</div>
		</div>

		<!-- Single Organization Page Section End -->

</div>

<?php if(get_theme_mod('mercury_casino_float_bar')) { ?>

	<!-- Organization Float Bar Start -->

	<script type="text/javascript">
	jQuery(document).ready(function($) {
		'use strict';

			var stickyOffset = $('.space-organization-float-bar-bg').offset().top;

			$(window).scroll(function(){
				'use strict';
			  var sticky = $('.space-organization-float-bar-bg'),
			      scroll = $(window).scrollTop();
			    
			  if (scroll >= 400) sticky.addClass('show');
			  else sticky.removeClass('show');
			});

	});
	</script>

	<style type="text/css">
	.single-organization .space-footer {
	    padding-bottom: 110px;
	}
	@media screen and (max-width: 479px) {
		.single-organization .space-footer {
		    padding-bottom: 100px;
		}
		.single-organization #scrolltop.show {
		    opacity: 1;
		    visibility: visible;
		    bottom: 120px;
		}
	}
	</style>

	<div class="space-organization-float-bar-bg box-100">
		<div class="space-organization-float-bar-bg-ins space-page-wrapper relative">
			<div class="space-organization-float-bar relative">
				<div class="space-organization-float-bar-data box-75 relative">
					<div class="space-organization-float-bar-data-ins relative">
						<div class="space-organization-float-bar-logo relative">
							<div class="space-organization-float-bar-logo-img relative">
								<?php
								$post_title_attr = the_title_attribute( 'echo=0' );
								if ( wp_get_attachment_image(get_post_thumbnail_id()) ) {
									echo wp_get_attachment_image( get_post_thumbnail_id(), 'mercury-100-100', "", array( "alt" => $post_title_attr ) );
								} ?>
							</div>
						</div>
						<div class="space-organization-float-bar-title box-50 relative">
							<div class="space-organization-float-bar-title-wrap box-100 relative">
								<?php the_title(); ?>
							</div>
							
							<?php if( function_exists('aces_star_rating') ){ ?>
								<div class="space-organization-float-bar-rating box-100 relative">
									<?php aces_star_rating(
										array(
											'rating' => $casino_overall_rating,
											'type' => 'rating',
											'stars_number' => $casino_rating_stars_number_value
										)
									); ?>
									<span><i class="fas fa-star"></i> <?php echo esc_html( number_format( (float)$casino_overall_rating, 1, '.', ',') ); ?>/<?php echo esc_html( $casino_rating_stars_number_value ); ?></span>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
				<div class="space-organization-float-bar-button box-25 relative">
					<div class="space-organization-float-bar-button-all text-center relative">
						<div class="space-organization-float-bar-button-ins relative">
							<div class="space-organization-float-bar-button-wrap relative">
								<a href="<?php echo esc_url( $casino_external_link ); ?>" title="<?php echo esc_attr( $button_title ); ?>" <?php if ($casino_external_link) { ?>target="_blank" rel="nofollow"<?php } ?>>
									<?php echo esc_html( $button_title ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Organization Float Bar End -->

<?php } ?>
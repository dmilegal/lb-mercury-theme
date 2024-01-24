<?php
function aces_casinos_shortcode_8($atts)
{
	if (apply_filters('geoip_object', '')) {
		$record = apply_filters('geoip_object', '');
		$iso_code = $record->country->isoCode;
		$country = $record->country->name;
		$flag = $record->extra->flag;
	}

	ob_start();

	// Define attributes and their defaults

	extract(shortcode_atts(array(
		'items_number' => 5,
		'external_link' => '',
		'category' => '',
		'items_id' => '',
		'exclude_id' => '',
		'game_id' => '',
		'order' => '',
		'orderby' => '',
		'title' => ''
	), $atts));

	if ($iso_code) {
		$iso_code_id = get_terms(
			array(
				'taxonomy'     =>  'restricted-country',
				'meta_key'     =>  'aces_country_code',
				'meta_value'   =>  $iso_code,
				'meta_compare' =>  '=',
				'fields'       =>  'ids'
			)
		);
	}

	if ($orderby == 'rating') {
		$orderby = 'meta_value_num';
	}

	$exclude_id_array = '';

	if ($exclude_id) {
		$exclude_id_array = explode(',', $exclude_id);
	}

	if ($game_id) {

		$casino_ids = get_post_meta($game_id, 'parent_casino', true);

		$args = array(
			'posts_per_page' => $items_number,
			'post_type'      => 'casino',
			'post__in'       => $casino_ids,
			'tax_query' => array(
				array(
					'taxonomy' => 'restricted-country',
					'field'    => 'term_id',
					'terms' => $iso_code_id,
					'operator'  => 'NOT IN',
				),
			),
			'post__not_in'   => $exclude_id_array,
			'no_found_rows'  => true,
			'post_status'    => 'publish',
			'meta_key'       => 'casino_overall_rating',
			'orderby'        => 'meta_value_num',
			'order'          => $order
		);
	} else {

		if (!empty($category)) {

			$categories_id_array = explode(',', $category);

			$args = array(
				'posts_per_page' => $items_number,
				'post_type'      => 'casino',
				'post__not_in'   => $exclude_id_array,
				'no_found_rows'  => true,
				'post_status'    => 'publish',
				'tax_query' => array(
					array(
						'taxonomy' => 'casino-category',
						'field'    => 'id',
						'terms'    => $categories_id_array
					),
					array(
						'taxonomy' => 'restricted-country',
						'field'    => 'term_id',
						'terms' => $iso_code_id,
						'operator'  => 'NOT IN',
					),
				),
				'meta_key' => 'casino_overall_rating',
				'orderby'  => $orderby,
				'order'    => $order
			);
		} else if (!empty($items_id)) {

			$items_id_array = explode(',', $items_id);

			$args = array(
				'posts_per_page' => $items_number,
				'post_type'      => 'casino',
				'tax_query' => array(
					array(
						'taxonomy' => 'restricted-country',
						'field'    => 'term_id',
						'terms' => $iso_code_id,
						'operator'  => 'NOT IN',
					),
				),
				'post__in'       => $items_id_array,
				'orderby'        => 'post__in',
				'no_found_rows'  => true,
				'post_status'    => 'publish'
			);
		} else {

			$args = array(
				'posts_per_page' => $items_number,
				'post_type'      => 'casino',
				'tax_query' => array(
					array(
						'taxonomy' => 'restricted-country',
						'field'    => 'term_id',
						'terms' => $iso_code_id,
						'operator'  => 'NOT IN',
					),
				),
				'post__not_in'   => $exclude_id_array,
				'no_found_rows'  => true,
				'post_status'    => 'publish',
				'meta_key'       => 'casino_overall_rating',
				'orderby'        => $orderby,
				'order'          => $order
			);
		}
	}

	$casino_query = new WP_Query($args);

	if ($casino_query->have_posts()) {

		if (get_option('aces_rating_stars_number')) {
			$casino_rating_stars_number_value = get_option('aces_rating_stars_number');
		} else {
			$casino_rating_stars_number_value = '5';
		}

?>

		<div class="space-shortcode-wrap space-shortcode-11 relative">
			<div class="space-shortcode-wrap-ins relative">
				<?php

				if (class_exists('Casino_Noref_Popup'))
					echo do_shortcode('[ref_casinos_popup]');

				if ($title) { ?>
					<div class="space-block-title relative">
						<span><?php echo esc_html($title); ?></span>
					</div>
				<?php } ?>

				<div>
					<?php while ($casino_query->have_posts()) : $casino_query->the_post();
						global $post;
						get_template_part('theme-parts/molecules/casino-card', null, ['casino_id' => get_the_ID(),]);
					endwhile ?>
				</div>

			</div>
		</div>

<?php
		wp_reset_postdata();
		$casino_items = ob_get_clean();
		return $casino_items;
	}
}

add_shortcode('aces-casinos-8', 'aces_casinos_shortcode_8');

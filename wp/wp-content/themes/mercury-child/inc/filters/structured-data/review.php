<?php
use RankMath\Schema\Author;
/**
 * Collect data to output in JSON-LD.
 *
 * @param array  $unsigned An array of data to output in json-ld.
 * @param JsonLD $unsigned JsonLD instance.
 */
add_filter('rank_math/json_ld', function ($data, $jsonld) {
  $obj_id = is_singular() ? $jsonld->post->ID  : null;

  if (get_post_type( $obj_id ) !== 'casino') return $data;

  $author_schema_gen = new Author;

  if (!isset($data['ProfilePage']))
    $data = $author_schema_gen->process($data, $jsonld);
  
  $src_schema = wp_get_attachment_image_src(get_post_thumbnail_id($obj_id), 'full'); 
  $org_img = esc_url($src_schema[0]);

  if ( get_option( 'aces_rating_stars_number' ) ) {
		$casino_rating_stars_number_value = get_option( 'aces_rating_stars_number' );
	} else {
		$casino_rating_stars_number_value = '5';
	}

  $casino_overall_rating = esc_html( get_post_meta( get_the_ID(), 'casino_overall_rating', true ) );

  $data['Review'] = [
    "@type" => "Review",
    "itemReviewed" => [
        "@type" => "Organization",
        "name" => get_the_title($obj_id),
        "image" => $org_img
    ],
    "author" => [
        "@type" => "Person",
        "@id" => $data['ProfilePage']['@id'],
    ],
    "reviewRating" => [
        "@type" => "Rating",
        "ratingValue" => $casino_overall_rating,
        "bestRating" => $casino_rating_stars_number_value,
        "worstRating" => "1"
    ],
    "datePublished" => get_the_date(DateTime::ATOM),
    "reviewBody" => esc_html(get_the_excerpt())
  ];

  return $data;
}, 98, 2);
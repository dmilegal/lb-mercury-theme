<?php
/**
 * Collect data to output in JSON-LD.
 *
 * @param array  $unsigned An array of data to output in json-ld.
 * @param JsonLD $unsigned JsonLD instance.
 */
add_filter( 'rank_math/json_ld', function( $data, $jsonld ) {
  $author_id = get_post_field( 'post_author', $jsonld->ID );

  if (!$author_id || !isset($data['ProfilePage'])) return $data;

  $jobTitle = esc_html( get_field( 'job_title', 'user_'. $author_id ) );
  $description = esc_html( get_field ('short_biographical_info', 'user_'. $author_id ) );

  if ($jobTitle)
    $data['ProfilePage']["jobTitle"] = $jobTitle;

  if ($description)
    $data['ProfilePage']["description"] = $description;


	return $data;
}, 99, 2);
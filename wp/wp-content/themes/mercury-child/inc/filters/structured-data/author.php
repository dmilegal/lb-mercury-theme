<?php

/**
 * Collect data to output in JSON-LD.
 *
 * @param array  $unsigned An array of data to output in json-ld.
 * @param JsonLD $unsigned JsonLD instance.
 */
add_filter('rank_math/json_ld', function ($data, $jsonld) {
  $author_id = is_singular() ? $jsonld->post->post_author : get_the_author_meta( 'ID' );

  if (!$author_id || !isset($data['ProfilePage'])) return $data;

  $data['ProfilePage'] = mergeExistsProfile($data['ProfilePage'], $author_id);

  return $data;
}, 99, 2);


function mergeExistsProfile($exists_profile_schema, $profile_id) {
  $jobTitle = esc_html(get_field('job_title', 'user_' . $profile_id));
  $description = esc_html(get_field('short_biographical_info', 'user_' . $profile_id));
  $soc_links = getUserSocLinks($profile_id);
  $alumni_of = esc_html( get_field( 'alumni_of', 'user_' . $profile_id ) );

  if ($jobTitle)
    $exists_profile_schema["jobTitle"] = $jobTitle;

  if ($description)
    $exists_profile_schema["description"] = $description;

  if (count($soc_links))
    $exists_profile_schema["sameAs"] = array_map(fn($v) => $v[1], $soc_links);

  if ($alumni_of)
    $exists_profile_schema["alumniOf"] = [
      "@type" => "CollegeOrUniversity",
      "name" => $alumni_of
    ];

    return $exists_profile_schema;
}
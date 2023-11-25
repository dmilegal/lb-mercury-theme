<?php
add_filter('wpseo_schema_person', 'schema_change_person', 11, 2);

/**
 * Changes the Yoast SEO Person schema.
 *
 * @param array             $data    The Schema Person data.
 * @param Meta_Tags_Context $context Context value object.
 *
 * @return array $data The Schema Person data.
 */
function schema_change_person($data, $context)
{
  $user_id = 0;

  if ($context->indexable->object_type === 'post') {
    $user_id = (int) $context->post->post_author;
  }

  if ($context->indexable->object_type === 'user') {
    $user_id = $context->indexable->object_id;
  }

  /**
   * Filter: 'wpseo_schema_person_user_id' - Allows filtering of user ID used for person output.
   *
   * @api int|bool $user_id The user ID currently determined.
   */
  $user_id = apply_filters('wpseo_schema_person_user_id', $user_id);

  if (is_int($user_id) && $user_id > 0) {
    return mergeExistsProfile($data, $user_id);
  }

  return $data;
}

function mergeExistsProfile($exists_profile_schema, $profile_id)
{
  $jobTitle = esc_html(get_field('job_title', 'user_' . $profile_id));
  $short_description = esc_html(get_field('short_biographical_info', 'user_' . $profile_id));
  $alumni_of = esc_html(get_field('alumni_of', 'user_' . $profile_id));
  $knows_about = get_field('knows_about', 'user_' . $profile_id);

  if ($jobTitle)
    $exists_profile_schema["jobTitle"] = $jobTitle;

  if ($short_description)
    $exists_profile_schema["description"] = $short_description;

  if ($alumni_of)
    $exists_profile_schema["alumniOf"] = [
      "@type" => "CollegeOrUniversity",
      "name" => $alumni_of
    ];

  if ($knows_about)
    $exists_profile_schema["knowsAbout"] = $knows_about;

  return $exists_profile_schema;
}

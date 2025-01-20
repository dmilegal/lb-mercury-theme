<?
function getPostDateTime($postId = null, $format = '', $dateVariant = null)
{
  $dateVariant = $dateVariant ?? get_field('lb_public_date_variant', 'option');

  if (!$dateVariant)
    $dateVariant = 'published_date';

  if ($dateVariant == 'published_date') {
    $date = get_the_date($format, $postId);
    $time = get_the_time('U', $postId);
  } else {
    $date = get_the_modified_date($format, $postId);
    $time = get_the_modified_time('U', $postId);
    if (!$date) {
      $date = get_the_date($format, $postId);
    }
    if (!$time) {
      $time = get_the_time('U', $postId);
    }
  }

  return [$date, $time];
}

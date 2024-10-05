<?
function getReviewCardTitle($postId, $customCardTitle) {
  if ($customCardTitle) return $customCardTitle;

  $title = get_field('card_custom_title', $postId);

  if ($title) return $title;

  return get_the_title($postId);
}
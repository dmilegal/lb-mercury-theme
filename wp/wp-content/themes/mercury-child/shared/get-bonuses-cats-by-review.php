<?
function getBonusesCatsByReview($reviewIds = []) {
  $cats = [];
  foreach ($reviewIds as $reviewId) {
    $bonusId = aces_get_casino_bonus_id($reviewId);
    $cats[] = get_post_meta($bonusId, 'bonus-category', true);
  }
  
  return array_unique($cats);
}
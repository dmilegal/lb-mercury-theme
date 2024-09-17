<?
function getBonusesCatsByReviewIds($reviewIds = [])
{
  $cats = [];
  foreach ($reviewIds as $reviewId) {
    $bonusId = aces_get_casino_bonus_id($reviewId);
    if (!$bonusId) continue;
    $b_cats = get_the_terms($bonusId, 'bonus-category');
    if (!$b_cats) continue;
    $cats = [...$cats, ...$b_cats];

    
  }

  $cats = array_unique_call($cats, fn($i) => $i->term_id);
  usort($cats, fn($a, $b) => $a->name <=> $b->name);

  return array_map(fn($i) => $i->term_id, $cats);
}

function getBonuseCats($bonusId) {
  $cats = get_the_terms($bonusId, 'bonus-category');
  if (!$cats) return [];
  return  $cats;
}
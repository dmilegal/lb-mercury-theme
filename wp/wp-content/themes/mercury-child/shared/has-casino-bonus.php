<?
function hasCasinoBonus($casinoId) {
  $bonusFields = get_field('bonus_fields', $casinoId);
  if (empty($bonusFields['bonus_title']) && empty($bonusFields['promo_code']) && empty($bonusFields['bonus_link'])) return false;
  return true;
}
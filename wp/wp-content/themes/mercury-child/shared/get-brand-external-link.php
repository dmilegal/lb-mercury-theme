<?
function getBrandExternalLink($brandId)
{
  $bonusId = aces_get_main_casino_bonus_id($brandId);
  $casino_external_link = esc_url(get_post_meta($brandId, 'casino_external_link', true));
  $bonus_external_link = esc_url(get_post_meta($bonusId, 'bonus_external_link', true));
  $brand_permalink = get_permalink($brandId);

  $external_link_url = "";

  if ($bonus_external_link) {
    $external_link_url = $bonus_external_link;
  } elseif ($casino_external_link) {
    $external_link_url = $casino_external_link;
  } elseif (!get_field('enable_modal_ref_list', 'option')) {
    $external_link_url = $brand_permalink;
  }

  return $external_link_url;
}

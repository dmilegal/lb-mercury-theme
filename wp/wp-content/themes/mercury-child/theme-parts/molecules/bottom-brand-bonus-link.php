<?
$casinoId = $args['post_id'] ?? null;
$bonusId = aces_get_main_casino_bonus_id($casinoId);


$bonus_external_link = esc_url(get_post_meta($bonusId, 'bonus_external_link', true));
$bonus_button_title = esc_html(get_post_meta($bonusId, 'bonus_button_title', true));
$bonus_code = esc_html(get_post_meta($bonusId, 'bonus_code', true));

if ($bonus_button_title) {
  $button_title = $bonus_button_title;
} else {
  if (get_option('bonuses_get_bonus_title')) {
    $bonus_button_title = esc_html(get_option('bonuses_get_bonus_title'));
  } else {
    $bonus_button_title = esc_html__('Get Bonus', 'mercury-child');
  }
}

$is_external_link = false;

if ($bonus_external_link) {
  $is_external_link = true;
}


?>
<div class="lb-bottom-brand-bonus">
  <? if ($bonus_code || $bonus_external_link) { ?>
    <div class="lb-promo-bonus__actions">
      <?
      if ($bonus_code)
        get_template_part('theme-parts/molecules/promo-button', null, [
          'size' => 'xl',
          'variant' => 'outlined',
          'content' => __('Copy Promo', 'mercury-child'),
          'prefix' => '<i class="icon-copy"></i>',
          'className' => 'lb-promo-bonus__copy',
          'code' => $bonus_code,
        ]);

      if ($bonus_external_link)
        get_template_part('theme-parts/atoms/button', null, [
          'size' => 'xl',
          'color' => 'primary',
          'content' => $bonus_button_title,
          'href' => $bonus_external_link,
          'target' => "_blank",
          'rel' => $is_external_link ? "nofollow" : ""
        ]);
      ?>
    </div>
  <? } ?>
</div>
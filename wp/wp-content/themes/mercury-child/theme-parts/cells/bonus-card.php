<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$bonusId = $args['bonus_id'] ?? null;

if (!$bonusId) return;

$bonus_allowed_html = array(
  'a' => array(
    'href' => true,
    'title' => true,
    'target' => true,
    'rel' => true
  ),
  'img' => array(
    'src' => true,
    'alt' => true
  ),
  'br' => array(),
  'em' => array(),
  'strong' => array(),
  'span' => array(
    'class' => true,
    'style' => true
  ),
  'div' => array(
    'class' => true,
    'style' => true
  ),
  'p' => array(),
  'ul' => array(),
  'ol' => array(),
  'li' => array(),
);


$bonus_short_desc = wp_kses(get_post_meta($bonusId, 'bonus_short_desc', true), $bonus_allowed_html);
$bonus_external_link = esc_url(get_post_meta($bonusId, 'bonus_external_link', true));
$bonus_button_title = esc_html(get_post_meta($bonusId, 'bonus_button_title', true));
$bonus_button_notice = wp_kses(get_post_meta($bonusId, 'bonus_button_notice', true), $bonus_allowed_html);
$bonus_code = esc_html(get_post_meta($bonusId, 'bonus_code', true));
$bonus_valid_date = esc_html(get_post_meta($bonusId, 'bonus_valid_date', true));
$bonus_dark_style = esc_attr(get_post_meta($bonusId, 'bonus_dark_style', true));
$offer_popup_hide = esc_attr(get_post_meta($bonusId, 'aces_offer_popup_hide', true));

$offer_popup_title = esc_html(get_post_meta($bonusId, 'aces_offer_popup_title', true));
$offer_detailed_tc = wp_kses(get_post_meta($bonusId, 'offer_detailed_tc', true), $bonus_allowed_html);

$offers_disable_more_block = esc_attr(get_post_meta($bonusId, 'offers_disable_more_block', true));

$is_locked = get_post_status($bonusId) == 'draft' ||
  get_post_status($bonusId) == 'pending' ||
  get_post_status($bonusId) == 'auto-draft' ||
  get_post_status($bonusId) == 'private';


if ($bonus_button_title) {
  $button_title = $bonus_button_title;
} else {
  if (get_option('bonuses_get_bonus_title')) {
    $bonus_button_title = esc_html(get_option('bonuses_get_bonus_title'));
  } else {
    $bonus_button_title = esc_html__('Get Bonus', 'mercury-child');
  }
}

if ($offer_popup_title) {
  $custom_popup_title = $offer_popup_title;
} else {
  $custom_popup_title = esc_html__('Read about T&C', 'mercury-child');
}

$is_external_link = false;

if ($bonus_external_link) {
  $external_link_url = $bonus_external_link;
  $is_external_link = true;
} else {
  $external_link_url = get_the_permalink($bonusId);
}


?>
<div class="<?= classNames(
                'lb-bonus-card-container',
                $className,
              ) ?>" style="<?= stylesValue(
                $style
              ) ?>">
  <div class="lb-bonus-card">
    <div class="lb-bonus-card__header">
      <div class="lb-bonus-card__title">
        <?= get_the_title($bonusId) ?>
      </div>
      <? if ($bonus_short_desc) { ?>
        <div class="lb-bonus-card__subtitle">
          <?php echo wp_kses($bonus_short_desc, $bonus_allowed_html); ?>
        </div>
      <? } ?>
    </div>

    <? if ($bonus_code || $external_link_url) { ?>
      <div class="lb-bonus-card__actions">
        <?
        if ($external_link_url)
          get_template_part('theme-parts/atoms/button', null, [
            'size' => 'xl',
            'color' => 'primary',
            'content' => $bonus_button_title,
            'href' => $is_locked ? '#0' : $external_link_url,
            'target' => "_blank",
            'rel' => $is_external_link ? "nofollow" : ''
          ]);

          if ($bonus_code && !$is_locked)
          get_template_part('theme-parts/molecules/promo-button', null, [
            'size' => 'sm',
            'variant' => 'outlined',
            'content' => __('Copy Promo', 'mercury-child'),
            'prefix' => '<i class="icon-copy"></i>',
            'className' => 'lb-bonus-card__copy',
            'code' => $bonus_code,
          ]);
        ?>
      </div>
    <? } ?>
  </div>
  <?php if (!!$offer_detailed_tc) { ?>
    <div class="lb-bonus-card__tc-extra">
      <?= wp_kses($offer_detailed_tc, $bonus_allowed_html); ?>
    </div>
  <? } ?>

</div>
<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$casinoId = $args['casino_id'] ?? null;

if (!$casinoId) return;

$casino_allowed_html = array(
  'a' => array(
    'href' => true,
    'title' => true,
    'target' => true,
    'rel' => true
  ),
  'ul' => array(),
  'li' => array(),
  'br' => array(),
  'em' => array(),
  'span' => array(
    'class' => true
  ),
  'div' => array(
    'class' => true
  ),
  'p' => array()
);

$casino_detailed_tc = wp_kses(get_post_meta($casinoId, 'casino_detailed_tc', true), $casino_allowed_html);
$overall_rating = esc_html(get_post_meta($casinoId, 'casino_overall_rating', true));
$casino_permalink_button_title = esc_html(get_post_meta($casinoId, 'casino_permalink_button_title', true));
$casino_button_title = esc_html(get_post_meta($casinoId, 'casino_button_title', true));
$casino_external_link = esc_url(get_post_meta($casinoId, 'casino_external_link', true));
$casino_terms_desc = wp_kses(get_post_meta($casinoId, 'casino_terms_desc', true), $casino_allowed_html);

if ($casino_external_link) {
  $external_link_url = $casino_external_link;
} else {
  $external_link_url = get_the_permalink($casinoId);
}

if ($casino_button_title) {
  $button_title = $casino_button_title;
} else {
  if (get_option('casinos_play_now_title')) {
    $button_title = esc_html(get_option('casinos_play_now_title'));
  } else {
    $button_title = esc_html__('Play Now', 'aces');
  }
}

if ($casino_permalink_button_title) {
  $permalink_button_title = $casino_permalink_button_title;
} else {
  if (get_option('casinos_read_review_title')) {
    $permalink_button_title = esc_html(get_option('casinos_read_review_title'));
  } else {
    $permalink_button_title = esc_html__('review', 'aces');
  }
}


$bonusId = aces_get_main_casino_bonus_id($casinoId);
$bonus_short_desc = wp_kses(get_post_meta($bonusId, 'bonus_short_desc', true), $casino_allowed_html);
$bonus_external_link = esc_url(get_post_meta($bonusId, 'bonus_external_link', true));
$bonus_button_title = esc_html(get_post_meta($bonusId, 'bonus_button_title', true));
$bonus_code = esc_html(get_post_meta($bonusId, 'bonus_code', true));
$is_bst_bonus =  get_post_meta($bonusId, 'is_best_bonus', true);

$offer_detailed_tc = wp_kses(get_post_meta($bonusId, 'offer_detailed_tc', true), $casino_allowed_html);

if (!$bonus_button_title) {
  if (get_option('bonuses_get_bonus_title')) {
    $bonus_button_title = esc_html(get_option('bonuses_get_bonus_title'));
  } else {
    $bonus_button_title = esc_html__('Get Bonus', 'mercury-child');
  }
}

$is_locked = get_post_status($casinoId) == 'draft' ||
  get_post_status($casinoId) == 'pending' ||
  get_post_status($casinoId) == 'auto-draft' ||
  get_post_status($casinoId) == 'private';


?>
<div class="<?= classNames($className, 'lb-compact-casino-bonus-card not-prose') ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-compact-casino-bonus-card__header">
    <a class="lb-compact-casino-bonus-card__link" href="<?= $is_locked ? '#0' : get_the_permalink($casinoId) ?>" title="<?php echo esc_attr($permalink_button_title); ?>">
      <?= get_the_post_thumbnail($casinoId, [28, 28], [
        "class" => "lb-compact-casino-bonus-card__logo"
      ]) ?>
      <div class="lb-compact-casino-bonus-card__title"><?= get_the_title($casinoId) ?></div>
    </a>
    <?
    if ($bonus_button_title && $bonus_external_link)
      get_template_part('theme-parts/molecules/promo-button', null, [
        'size' => 'sm',
        'variant' => 'contained-light',
        'content' => $bonus_button_title,
        'className' => 'lb-compact-casino-bonus-card__bonus-link',
        'href' => $is_locked ? '#0' : esc_url($bonus_external_link),
        'target' => !$is_locked ? "_blank" : '',
        'rel' => !$is_locked ? "nofollow" : ''
      ]);
    ?>
  </div>
  <? if ($bonus_short_desc) { ?>
    <a href="<?= $is_locked ? '#0' : get_the_permalink($casinoId) ?>" title="<?php echo esc_attr($permalink_button_title); ?>" class="lb-compact-casino-bonus-card__bonus">
      <?= $bonus_short_desc ?>
    </a>
  <? } ?>
  <? if ($offer_detailed_tc) { ?>
    <div class="lb-compact-casino-bonus-card__tc lb-compact-casino-bonus-card__tc--truncated">
      <div class="lb-compact-casino-bonus-card__tc-content">
        <?= $offer_detailed_tc ?>
      </div>
      <button class="lb-compact-casino-bonus-card__tc-more" style="display: none">
        <?= __('Show T&C', 'mercury-child') ?>
      </button>
    </div>
  <? } ?>
</div>
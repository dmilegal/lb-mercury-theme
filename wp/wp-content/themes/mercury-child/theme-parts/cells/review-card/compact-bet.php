<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$postId = $args['post_id'] ?? null;

if (!$postId) return;

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

$casino_detailed_tc = wp_kses(get_post_meta($postId, 'casino_detailed_tc', true), 'strip');
$overall_rating = esc_html(get_post_meta($postId, 'casino_overall_rating', true));
$casino_permalink_button_title = esc_html(get_post_meta($postId, 'casino_permalink_button_title', true));
$casino_button_title = esc_html(get_post_meta($postId, 'casino_button_title', true));
$casino_terms_desc = wp_kses(get_post_meta($postId, 'casino_terms_desc', true), $casino_allowed_html);

if ($casino_button_title) {
  $button_title = $casino_button_title;
} else {
  if (get_option('casinos_play_now_title')) {
    $button_title = esc_html(get_option('casinos_play_now_title'));
  } else {
    $button_title = esc_html__('Play Now', 'mercury-child');
  }
}

if ($casino_permalink_button_title) {
  $permalink_button_title = $casino_permalink_button_title;
} else {
  if (get_option('casinos_read_review_title')) {
    $permalink_button_title = esc_html(get_option('casinos_read_review_title'));
  } else {
    $permalink_button_title = esc_html__('review', 'mercury-child');
  }
}


$bonusId = aces_get_main_casino_bonus_id($postId);
$bonus_short_desc = wp_kses(get_post_meta($bonusId, 'bonus_short_desc', true), $casino_allowed_html);
$bonus_button_title = esc_html(get_post_meta($bonusId, 'bonus_button_title', true));
$bonus_code = esc_html(get_post_meta($bonusId, 'bonus_code', true));
$is_bst_bonus =  get_post_meta($bonusId, 'is_best_bonus', true);

$offer_detailed_tc = wp_kses(get_post_meta($bonusId, 'offer_detailed_tc', true), 'strip');

$external_link_url = getBrandExternalLink($postId);

if (!$bonus_button_title) {
  if (get_option('bonuses_get_bonus_title')) {
    $bonus_button_title = esc_html(get_option('bonuses_get_bonus_title'));
  } else {
    $bonus_button_title = esc_html__('Get Bonus', 'mercury-child');
  }
}

$is_locked = isBrandLocked($postId);
?>

<div class="lb-review-compact">
  <diva class="lb-review-compact__header">
    <?= get_the_post_thumbnail($postId, [32, 32], [
      "class" => "lb-review-compact__logo"
    ]) ?>
    <div class="lb-review-compact__title">
      <?= get_the_title($postId) ?>
    </div>
  </diva>

  <? if ($bonus_short_desc) { ?>
    <div class="lb-review-compact__bonus-title">
      <i class="icon-gift lb-review-compact__bonus-ico"></i>
      <div>
        <?= $bonus_short_desc ?>
      </div>
    </div>
  <? } ?>
  <div class="lb-review-compact__actions">
    <? get_template_part('theme-parts/atoms/button', null, [
      'size' => 'sm',
      'color' => 'primary',
      'className' => 'lb-review-compact__play',
      'content' => __('Bet', 'mercury-child'),
      'href' => $is_locked || !$external_link_url ? '' : esc_url($external_link_url),
      'target' => $external_link_url && !$is_locked ? "_blank" : '',
      'rel' => $external_link_url && !$is_locked ? "nofollow" : ''
    ]); ?>
  </div>
</div>
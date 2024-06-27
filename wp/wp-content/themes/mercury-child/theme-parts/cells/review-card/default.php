<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$hideFooter = isset($args['hide_footer']) &&
  ($args['hide_footer'] == 1 || $args['hide_footer'] == true || $args['hide_footer'] == 'true') ?: false;

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

if (!$bonus_button_title) {
  if (get_option('bonuses_get_bonus_title')) {
    $bonus_button_title = esc_html(get_option('bonuses_get_bonus_title'));
  } else {
    $bonus_button_title = esc_html__('Get Bonus', 'mercury-child');
  }
}

$external_link_url = getBrandExternalLink($postId);

$is_locked = isBrandLocked($postId);

?>
<div class="<?= classNames($className, 'lb-review-card lb-review-card--mr_closed') ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-review-card__inner">
    <? if ($is_bst_bonus) { ?>
      <? get_template_part('theme-parts/atoms/badge', null, [
        'size' => 'sm',
        'color' => 'gray',
        'content' => '🔥 ' . __('Best bonus online', 'mercury-child'),
        'className' => 'lb-review-card__label lb-review-card__label--bst'
      ]); ?>
    <? } ?>
    <div class="lb-review-card__main not-prose">
      <div class="lb-review-card__header">
        <?= get_the_post_thumbnail($postId, [52, 52], [
          "class" => "lb-review-card__logo"
        ]) ?>
        <div>
          <div class="lb-review-card__title"><?= get_the_title($postId) ?></div>
          <div class="lb-review-card__info">
            <div class="lb-review-card__rating">
              <i class="icon-star"></i>
              <?= $overall_rating ?>
            </div>
            <div>
              <a class="lb-review-card__link" href="<?= $is_locked ? '#0' : get_the_permalink($postId) ?>" title="<?php echo esc_attr($permalink_button_title); ?>"><?php echo esc_html($permalink_button_title); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lb-review-card__sub not-prose">
      <? if ($bonus_short_desc) { ?>
        <div class="lb-review-card__bonus-title">
          <?= $bonus_short_desc ?>
        </div>
      <? } ?>
      <div class="lb-review-card__actions">
        <?
          get_template_part('theme-parts/atoms/button', null, [
            'size' => 'xl',
            'color' => 'primary',
            'className' => 'lb-review-card__play',
            'content' => esc_html($button_title),
            'href' => $is_locked || !$external_link_url ? '' : esc_url($external_link_url),
            'target' => $external_link_url && !$is_locked ? "_blank" : '',
            'rel' => $external_link_url && !$is_locked ? "nofollow" : ''
          ]);

        if ($bonus_code)
          get_template_part('theme-parts/molecules/promo-button', null, [
            'size' => 'sm',
            'variant' => 'outlined',
            'content' => __('Copy Promo', 'mercury-child'),
            'prefix' => '<i class="icon-copy"></i>',
            'code' => $bonus_code,
            'className' => 'lb-review-card__bonus-copy'
          ]); ?>
      </div>
    </div>
    <? if (!$hideFooter) { ?>
      <div class="lb-review-card__detail-list not-prose">
        <div class="lb-review-card__detail-item">
          <div class="lb-review-card__detail-title"><?= __('License', 'mercury-child') ?></div>
          <div class="lb-review-card__detail-value"><?= aces_casino_has_licence($postId) ? __('Yes', 'mercury-child') : __('No', 'mercury-child') ?></div>
        </div>
      </div>
    <? } ?>
    <?php if ($casino_terms_desc && !$hideFooter) { ?>
      <div class="lb-review-card__extra-actions not-prose">
        <? get_template_part('theme-parts/atoms/button', null, [
          'size' => 'sm',
          'color' => 'gray',
          'variant' => 'inline',
          'postfix' => '<i class="icon-chevron-down"></i>',
          'content' => __('Read more', 'mercury-child'),
          'className' => "lb-review-card__read-more",
        ]); ?>
        <? get_template_part('theme-parts/atoms/button', null, [
          'size' => 'sm',
          'color' => 'gray',
          'variant' => 'inline',
          'postfix' => '<i class="icon-chevron-up"></i>',
          'content' => __('Hide', 'mercury-child'),
          'className' => "lb-review-card__read-less",
        ]); ?>
      </div>
    <? } ?>

    <? if (!$hideFooter && $casino_terms_desc) { ?>
      <div class="lb-review-card__extra-content not-prose">
        <?php if ($casino_terms_desc) { ?>
          <div class="lb-review-card__desc">
            <?= wp_kses($casino_terms_desc, $casino_allowed_html); ?>
          </div>
        <? } ?>
      </div>
    <? } ?>
  </div>
  <?php if ($casino_detailed_tc || $offer_detailed_tc) { ?>
    <div class="lb-review-card__tc not-prose" data-content="<?= esc_attr($offer_detailed_tc ? $offer_detailed_tc : $casino_detailed_tc) ?>">
    </div>
  <? } ?>
</div>
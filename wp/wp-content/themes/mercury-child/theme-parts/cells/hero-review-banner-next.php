<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$enableColSpan = $args['col_span'] ?? false;
$casinoId = $args['post_id'] ?? null;

if (!$casinoId) return;

$casino_allowed_html = array(
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
  'br' => true,
  'em' => array(),
  'strong' => true,
  'span' => array(
    'class' => true
  ),
  'div' => array(
    'class' => true
  ),
  'p' => array(),
  'ul' => array(),
  'ol' => array(),
  'li' => array(),
);

$casino_short_desc = wp_kses(get_post_meta($casinoId, 'casino_short_desc', true), $casino_allowed_html);
$casino_restricted_countries = wp_get_object_terms($casinoId, 'restricted-country');
$casino_licences = wp_get_object_terms($casinoId, 'licence');
$bonus_fields = get_field('bonus_fields');
$casino_detailed_tc = wp_kses(get_post_meta($casinoId, 'casino_detailed_tc', true), $casino_allowed_html);
$overall_rating = esc_html(get_post_meta($casinoId, 'casino_overall_rating', true));
$casino_est = wp_get_object_terms($casinoId, 'casino-est');
$casino_owner = wp_get_object_terms($casinoId, 'owner');

$license_ar_text_for_single = get_field('license_ar_text_for_single', 'option');
$license_ar_logos = get_field('license_ar_logos', 'option');
$casino_licences = wp_get_object_terms($casinoId, 'licence');

[$updatedDate, $time] = getPostDateTime($post->ID, 'Y-m-d', 'updated_date');
?>
<div class="<?= classNames(
              'lb-hero-review-banner',
              [
                'lb-hero-review-banner--col-span' => $enableColSpan
              ],
              $className,
            ) ?>" style="<?= stylesValue(
                            $style
                          ) ?>">
  <div class="lb-hero-review-banner__inner">
    <div class="lb-hero-review-banner__content">
      <time class="lb-hero-review-banner__update-date" datetime="<?= $updatedDate ?>">
        <?= sprintf(
          __('Last Updated %s', 'mercury-child'),
          wp_date('j M Y', strtotime($updatedDate))
        ) ?>
      </time>
      <header class="lb-hero-review-banner__header">
        <?= get_the_post_thumbnail($casinoId, [256, 0], [
          "class" => "lb-hero-review-banner__logo"
        ]) ?>

        <div>
          <h1 class="lb-hero-review-banner__title"><?= get_the_title($casinoId) ?></h1>
          <?
          $record = apply_filters('geoip_object', '');
          if ($record) {
            $country = $record->country->name;
            $flag = $record->extra->flag;

            if ($country || ($bonus_fields && $bonus_fields['trusted'])) {
          ?>
              <div class="lb-hero-review-banner__captions">
                <?
                if ($bonus_fields && $bonus_fields['trusted']) {
                  get_template_part('theme-parts/atoms/badge', null, [
                    'size' => 'lg',
                    'content' => __('Trusted', 'aces'),
                  ]);
                }

                if ($country)
                  get_template_part('theme-parts/atoms/badge', null, [
                    'size' => 'lg',
                    'prefix' => file_exists(get_stylesheet_directory() . '/img/flags/round/' . strtolower($record->country->isoCode) . '.svg') ?
                      '<img src="' . get_stylesheet_directory_uri() . '/img/flags/round/' . strtolower($record->country->isoCode) . '.svg' . '">' : $flag,
                    'content' => in_array($country, array_column($casino_restricted_countries, 'name')) ? esc_html(
                      sprintf(
                        __('Users from %s are not accepted', 'aces'),
                        $country
                      )
                    )
                      : esc_html(
                        sprintf(
                          __('Users from %s are accepted', 'aces'),
                          $country
                        )
                      ),
                    'color' => 'gray',
                  ]);
                ?>
              </div>
          <? }
          } ?>
          <? /*if ($license_ar_text_for_single || $license_ar_logos) { ?>
            <div class="lb-hero-review-banner__lar">
              <? if ($license_ar_text_for_single) { ?>
                <div class="lb-hero-review-banner__lar-text"><?= $license_ar_text_for_single ?></div>
              <? } ?>
              <? if ($license_ar_logos) { ?>
                <div class="lb-hero-review-banner__license-logos">
                  <? foreach ($license_ar_logos as $logo) { ?>
                    <<?= $logo['link'] ? 'a class="lb-hero-review-banner__license-logo" href="' .
                        $logo['link']['url'] . '"' .
                        ($logo['link']['title'] ? ' aria-label="' . esc_attr($logo['link']['title']) . '"' : '') .
                        ($logo['link']['target'] ? ' target="' . esc_attr($logo['link']['target']) . '"' : '')
                        : 'span class="lb-hero-review-banner__license-logo"' ?>>
                      <?= wp_get_attachment_image($logo['image'], [0, 32], false, [
                        'class'  => 'lb-hero-review-banner__lar-mark'
                      ]) ?>
                    </<?= $logo['link'] ? 'a' : 'span' ?>>
                  <? } ?>
                </div>
              <? } ?>
            </div>
        </div>
      <? }*/ ?>
      </header>
      <div class="lb-hero-review-banner__spec-list">
        <div class="lb-hero-review-banner__spec-item">
          <div class="lb-hero-review-banner__spec-value">
            <i class="icon-star"></i>
            <?= $overall_rating ?>
          </div>
          <div class="lb-hero-review-banner__spec-title">
            <?= __('Rating', 'mercury-child') ?>
          </div>
        </div>
        <div class="lb-hero-review-banner__spec-item">
          <div class="lb-hero-review-banner__spec-value">
            <? if (count($casino_est)) { ?>
              <?php foreach ($casino_est as $est) {
                echo esc_html($est->name);
              } ?>
            <? } else { ?>
              <?= '-' ?>
            <? } ?>
          </div>
          <div class="lb-hero-review-banner__spec-title">
            <?= __('Getting Started', 'mercury-child') ?>
          </div>
        </div>
        <div class="lb-hero-review-banner__spec-item">
          <div class="lb-hero-review-banner__spec-value">
            <? if (count($casino_owner)) { ?>
              <?php foreach ($casino_owner as $owner) {
                echo esc_html($owner->name);
              } ?>
            <? } else { ?>
              <?= '-' ?>
            <? } ?>
          </div>
          <div class="lb-hero-review-banner__spec-title">
            <?= __('Owner', 'mercury-child') ?>
          </div>
        </div>
        <div class="lb-hero-review-banner__spec-item">
          <div class="lb-hero-review-banner__spec-value">
            <? if (count($casino_licences)) {
              $st = [];
              foreach ($casino_licences as $licence) {
                $str[] = esc_html($licence->name);
              }
              
              echo __('Yes', 'mercury-child');

              get_template_part('theme-parts/atoms/tooltip', null, [
                'content' =>  esc_html($licence->name),
                'size' => 'sm',
                'id' => 'hr-' . $id,
              ]); ?>
              <button id="<?= 'hr-' . $id ?>" class="lb-hero-review-banner__license-tp">
                <i class="icon-help-circle"></i>
              </button>

            <? } else { ?>
              <?= __('No', 'mercury-child') ?>
            <? } ?>
          </div>
          <div class="lb-hero-review-banner__spec-title">
            <?= __('License', 'mercury-child') ?>
          </div>
        </div>
      </div>

      <? if ($mainBonusId = aces_get_main_casino_bonus_id($casinoId)) { ?>
        <div class="lb-hero-review-banner-promo">
          <div class="lb-hero-review-banner-promo__inner">
            <div class="lb-hero-review-banner-promo__sticky">
              <? get_template_part('theme-parts/molecules/promo-bonus', null, [
                'bonus_id' => $mainBonusId
              ]); ?>
            </div>
          </div>
        </div>
      <? } ?>

      <? do_action('hero_casino_banner_after_header') ?>

      <? /*if ($casino_short_desc) { ?>
        <? get_template_part('theme-parts/cells/clipping', null, [
          'content' => '<div class="lb-hero-review-banner__desc prose-content prose-colors">
                ' . wp_kses($casino_short_desc, $casino_allowed_html) . '
              </div>'
        ]); ?>
      <? }*/ ?>
    </div>
  </div>
</div>
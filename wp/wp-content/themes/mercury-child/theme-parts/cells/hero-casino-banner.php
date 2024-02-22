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

?>
<div class="<?= classNames(
              'lb-hero-casino-banner',
              [
                'lb-hero-casino-banner--col-span' => $enableColSpan
              ],
              $className,
            ) ?>" style="<?= stylesValue(
                            $style
                          ) ?>">
  <div class="lb-hero-casino-banner__inner">
    <div class="lb-hero-casino-banner__content">
      <header class="lb-hero-casino-banner__header">
        <?= get_the_post_thumbnail($casinoId, [256, 0], [
          "class" => "lb-hero-casino-banner__logo"
        ]) ?>

        <div>
          <h1 class="lb-hero-casino-banner__title"><?= get_the_title($casinoId) ?></h1>
          <div class="lb-hero-casino-banner__captions">
            <?
            $record = apply_filters('geoip_object', '');
            $country = $record->country->name;
            $flag = $record->extra->flag;

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
        </div>
      </header>
      <div class="lb-hero-casino-banner__info-list">
        <div class="lb-hero-casino-banner__info">
          <div class="lb-hero-casino-banner__info-title">
            <?= __('Rating', 'mercury-child') ?>
          </div>
          <div class="lb-hero-casino-banner__info-value">
            <i class="icon-star"></i>
            <?= $overall_rating ?>
          </div>
        </div>
        <div class="lb-hero-casino-banner__info">
          <div class="lb-hero-casino-banner__info-title">
            <?= __('Lisence', 'mercury-child') ?>
          </div>
          <div class="lb-hero-casino-banner__info-value">
            <?= count($casino_licences) ?  __('Yes', 'mercury-child') :  __('No', 'mercury-child') ?>
          </div>
        </div>
      </div>

      <? if ($mainBonusId = aces_get_main_casino_bonus_id($casinoId)) { ?>
        <div class="lb-hero-casino-banner-promo">
          <div class="lb-hero-casino-banner-promo__inner">
            <div class="lb-hero-casino-banner-promo__sticky">
              <? get_template_part('theme-parts/molecules/promo-bonus', null, [
                'bonus_id' => $mainBonusId
              ]); ?>
            </div>
          </div>
        </div>
      <? } ?>

      <? do_action('hero_casino_banner_after_header') ?>

      <? if ($casino_short_desc) { ?>
        <? get_template_part('theme-parts/cells/clipping', null, [
          'content' => '<div class="lb-hero-casino-banner__desc prose-content prose-colors">
                ' . wp_kses($casino_short_desc, $casino_allowed_html) . '
              </div>'
        ]); ?>
      <? } ?>
    </div>
  </div>
</div>
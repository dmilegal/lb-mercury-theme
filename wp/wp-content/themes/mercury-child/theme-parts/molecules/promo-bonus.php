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


$bonusFields = get_field('bonus_fields', $casinoId);
$casino_detailed_tc = wp_kses(get_post_meta($casinoId, 'casino_detailed_tc', true), $casino_allowed_html);

if (!hasCasinoBonus($casinoId)) return;

?>
<div class="lb-promo-bonus-container">
  <div class="<?= classNames(
                'lb-promo-bonus',
                $className,
              ) ?>" style="<?= stylesValue(
                              $style
                            ) ?>">

    <div class="lb-promo-bonus__title">
      <? printf(__('Bonus %s', 'mercury-child'), get_the_title($casinoId)) ?>
    </div>
    <? if (isset($bonusFields['bonus_title'])) { ?>
      <div class="lb-promo-bonus__subtitle">
        <?= $bonusFields['bonus_title'] ?>
      </div>
    <? } ?>
    <? if (!empty($bonusFields['promo_code']) || !empty($bonusFields['bonus_link'])) { ?>
      <div class="lb-promo-bonus__actions">
        <?
        if (!empty($bonusFields['promo_code']))
          get_template_part('theme-parts/molecules/promo-button', null, [
            'size' => 'xl',
            'variant' => 'outlined',
            'content' => __('Copy Promo', 'mercury-child'),
            'prefix' => '<i class="icon-copy"></i>',
            'className' => 'lb-promo-bonus__copy',
            'code' => $bonusFields['promo_code'],
          ]);

        if (!empty($bonusFields['bonus_link']))
          get_template_part('theme-parts/atoms/button', null, [
            'size' => 'xl',
            'color' => 'primary',
            'content' => __('Get bonus', 'mercury-child'),
            'href' => $bonusFields['bonus_link'],
            'target' => "_blank",
            'rel' => "nofollow"
          ]);
        ?>
      </div>
    <? } ?>
    <!--<a class="lb-promo-bonus__tc-link">
    Read about T&C
        </a>-->
  </div>
  <?php if ($casino_detailed_tc) { ?>
    <div class="lb-promo-bonus__tc-extra">
      <?= wp_kses($casino_detailed_tc, $casino_allowed_html); ?>
    </div>
  <? } ?>

</div>
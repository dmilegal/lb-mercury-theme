<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$casinoId = $args['casino_id'] ?? null;

if (!$casinoId) return;

$bonusFields = get_field('bonus_fields', $casinoId);

if (!hasCasinoBonus($casinoId)) return;

?>
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
        get_template_part('theme-parts/atoms/button', null, [
          'size' => 'xl',
          'variant' => 'outlined',
          'content' => __('Copy Promo', 'mercury-child'),
          'prefix' => '<i class="icon-copy"></i>',
          'className' => 'lb-promo-bonus__copy',
          'value' => $bonusFields['promo_code']
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
  <div class="lb-promo-bonus__tc">
    Read about <a>T&C</a>
  </div>
</div>
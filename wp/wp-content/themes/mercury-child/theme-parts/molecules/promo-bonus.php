<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
?>
<div class="<?= classNames(
              'lb-promo-bonus',
              $className,
            ) ?>" style="<?= stylesValue(
                            $style
                          ) ?>">
  <div class="lb-promo-bonus__title">
    Bonus PokerStars Casino
  </div>
  <div  class="lb-promo-bonus__subtitle">
    Up to £100 Extra Winnings on Your First Sport Bet
  </div>
  <div  class="lb-promo-bonus__actions">
    <?
    get_template_part('theme-parts/atoms/button', null, [
      'size' => 'xl',
      'variant' => 'outlined',
      'content' => __('Copy Promo', 'mercury-child'),
      'prefix' => '<i class="icon-copy"></i>',
      'className' => 'lb-promo-bonus__copy'
    ]);
    get_template_part('theme-parts/atoms/button', null, [
      'size' => 'xl',
      'color' => 'primary',
      'content' => __('Get bonus', 'mercury-child'),
    ]);
    ?>
  </div>
  <div class="lb-promo-bonus__tc">
    Read about <a>T&C</a>
  </div>
</div>
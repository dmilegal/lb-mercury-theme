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
  <div></div>
</div>
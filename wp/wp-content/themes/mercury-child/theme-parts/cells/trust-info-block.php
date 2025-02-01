<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$color = $args['color'] ?? 'gray';
?>

<div class="<?= classNames(
              'lb-trust-info-block not-prose lb-trust-info-block--closed',
              $className,
              'lb-trust-info-block--color_' . $color

            ) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-trust-info-block__inner">
    <header class="lb-trust-info-block__header">
      <h2 class="lb-trust-info-block__title">Why you should trust</h2>
      <i class="lb-trust-info-block__ico-plus icon-plus-circle"></i>
      <i class="lb-trust-info-block__ico-minus icon-minus-circle"></i>
    </header>
    <ul class="lb-trust-info-block__list">
      <li class="lb-trust-info-block__item" data-title="1000+ Hours of Testing">
        <img width="40" height="40">
      </li>
    </ul>
  </div>

</div>
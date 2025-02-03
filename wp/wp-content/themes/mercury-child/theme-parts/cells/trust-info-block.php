<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$color = $args['color'] ?? 'gray';
$isEnabled = get_field('listing_info_block_enable', 'option');

if (!$isEnabled) return;

$params = get_field('listing_info_block', 'option');

if (empty($params['title'])) return;
?>

<div class="<?= classNames(
              'lb-trust-info-block not-prose lb-trust-info-block--closed',
              $className,
              'lb-trust-info-block--color_' . $color

            ) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-trust-info-block__inner">
    <header class="lb-trust-info-block__header">
      <h2 class="lb-trust-info-block__title"><?= $params['title'] ?></h2>
      <i class="lb-trust-info-block__ico-plus icon-plus-circle"></i>
      <i class="lb-trust-info-block__ico-minus icon-minus-circle"></i>
    </header>
    <ul class="lb-trust-info-block__list">
      <? if (!empty($params['item_title_1'])) { ?>
        <li class="lb-trust-info-block__item" data-title="<?= esc_attr($params['item_title_1']) ?>">
          <img width="40" height="40" src="<?= get_stylesheet_directory_uri() ?>/img/trust-info-media/1.svg">
        </li>
      <? } ?>
      <? if (!empty($params['item_title_2'])) { ?>
        <li class="lb-trust-info-block__item" data-title="<?= esc_attr($params['item_title_2']) ?>">
          <img width="40" height="40" src="<?= get_stylesheet_directory_uri() ?>/img/trust-info-media/2.svg">
        </li>
      <? } ?>
      <? if (!empty($params['item_title_3'])) { ?>
        <li class="lb-trust-info-block__item" data-title="<?= esc_attr($params['item_title_3']) ?>">
          <img width="40" height="40" src="<?= get_stylesheet_directory_uri() ?>/img/trust-info-media/3.svg">
        </li>
      <? } ?>
      <? if (!empty($params['item_title_4'])) { ?>
        <li class="lb-trust-info-block__item" data-title="<?= esc_attr($params['item_title_4']) ?>">
          <img width="40" height="40" src="<?= get_stylesheet_directory_uri() ?>/img/trust-info-media/4.svg">
        </li>
      <? } ?>
    </ul>
  </div>

</div>
<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$list = $args['list'] ?? [];

if (!$list) return;
?>
<div class="<?= classNames(
              'lb-brand-feats',
              $className,
            ) ?>" style="<?= stylesValue(
                            $style
                          ) ?>">
  <ul class="lb-brand-feats__list not-prose">
    <? foreach ($list as $item) { ?>
      <li class="lb-brand-feats__item">
        <? if (isset($item['value'])) { ?>
          <div class="lb-brand-feats__item-title"><?= $item['value'] ?></div>
        <? } ?>
        <? if (isset($item['title'])) { ?>
          <div class="lb-brand-feats__item-subtitle"><?= $item['title'] ?></div>
        <? } ?>
      </li>
    <? } ?>
  </ul>
</div>
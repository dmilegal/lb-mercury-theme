<?
$list = $args['sites_list'] ?? [];
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$title = $args['title'] ?? '';
$dropdownPosition = $args['dropdown_position'] ?? 'bottom';

if (!$title || !$list) return;
?>
<ul class="<?= classNames(
              'lb-sites-linking not-prose',
              $className,
            ) ?>" style="<?= stylesValue($style) ?>">
  <li class="lb-sites-linking__current-item">
    <button class="lb-sites-linking__trigger">
      <span class="lb-sites-linking__label">
        <?= $title ?>
      </span>
    </button>
    <ul class="<?= classNames(
                  "lb-sites-linking__list",
                  'lb-sites-linking__list--' . $dropdownPosition,
                ) ?>">
      <? foreach ($list as $item) { 
        $title = $item['link']['title'] ?? '';
        $link = $item['link']['url'] ?? '';
        $attrs = getAttributesString(array_intersect_key($item['link'], array_flip(['target'])));
        ?>
        <li class="lb-sites-linking__item">
          <a class="lb-sites-linking__link" href="<?= $link ?>" <?= $attrs ?>>
            <?= $title ?>
          </a>
        </li>
      <? };?>
    </ul>
  </li>
</ul>
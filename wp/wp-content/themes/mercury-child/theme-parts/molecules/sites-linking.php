<?
$list = $args['sites_list'] ?? [];
$flag = $args['flag'] ?? null;
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$title = isset($args['title']) && $args['title'] ? $args['title'] : ($flag['label'] ?? '');
$flagIcon = getIconByLangCode(strtolower($flag['value'] ?? ''));
$dropdownPosition = $args['dropdown_position'] ?? 'bottom';

if (!$title || !$list) return;
?>
<ul class="<?= classNames(
              'lb-sites-linking not-prose',
              $className,
            ) ?>" style="<?= stylesValue($style) ?>">
  <li class="lb-sites-linking__current-item">
    <button class="lb-sites-linking__trigger">
      <? if ($flagIcon) { ?>
        <img width="18" height="18" alt="<?= $title ?>" src="<?= $flagIcon ?>">
      <? } ?>
      <span class="lb-sites-linking__label">
        <?= $title ?>
      </span>
    </button>
    <ul class="<?= classNames(
                  "lb-sites-linking__list",
                  'lb-sites-linking__list--' . $dropdownPosition,
                ) ?>">
      <? foreach ($list as $item) {
        $title = isset($item['link']['title']) && $item['link']['title'] ? $item['link']['title'] : ($item['flag']['label'] ?? '');
        $link = $item['link']['url'] ?? '';
        $attrs = getAttributesString(array_intersect_key($item['link'], array_flip(['target'])));
        $icoLink = getIconByLangCode(strtolower($item['flag']['value'] ?? ''));
      ?>
        <li class="lb-sites-linking__item">
          <a class="lb-sites-linking__link" href="<?= $link ?>" <?= $attrs ?>>
            <? if ($icoLink) { ?>
              <img width="18" height="18" alt="<?= $title ?>" src="<?= $icoLink ?>">
            <? } ?>
            <span>
              <?= $title ?>
            </span>
          </a>
        </li>
      <? }; ?>
    </ul>
  </li>
</ul>
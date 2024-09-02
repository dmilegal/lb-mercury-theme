<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$list = $args['list'] ?? '';
$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['data', 'aria', 'style'])));

?>
<div class="<?= classNames("not-prose", "lb-link-with-icon-list", $className) ?>" <?= $attrsStr ?>>
  <ul class="lb-link-with-icon-list__inner">
    <? foreach ($list as $item) { ?>
      <li>
        <? get_template_part('theme-parts/cells/link-with-icon', null, [
          'icon' => $item['icon'] ?? '',
          'title' => $item['title'] ?? '',
          'href' => $item['href'] ?? '',
          'target' => $item['target'] ?? '',
          'rel' => $item['rel'] ?? '',
        ]); ?>
      </li>
    <? } ?>
  </ul>
</div>
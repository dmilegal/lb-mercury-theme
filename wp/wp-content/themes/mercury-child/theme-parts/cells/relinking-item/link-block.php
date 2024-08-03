<?
$className = $args['className'] ?? '';
$title = $args['title'] ?? '';
$linkList = $args['link_list'] ?? [];
?>

<div class="<?= classNames("not-prose", "lb-relinking-block", $className) ?>">
  <? if ($title) { ?>
    <header class="lb-relinking-block__header">
      <div class="lb-relinking-block__title"><?= $title ?></div>
    </header>
  <? } ?>
  <ul class="lb-relinking-block__list">
    <? foreach ($linkList as $link) {
      $attrsStr = getAttributesString(array_intersect_key($link, array_flip(['href', 'target', 'rel'])));
    ?>
      <li class="lb-relinking-block__item">
        <a <?= $attrsStr ?> class="lb-relinking-block__link"><?= $link['title'] ?? '' ?></a>
      </li>
    <? } ?>
  </ul>
</div>
<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$regulators =  $args['regulators'] ?? [];
?>
<section class="<?= classNames(
                  'lb-regulator-section',
             
                  $className,

                ) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-regulator-section__container">
    <? if ($title) { ?>
      <header class="lb-regulator-section__header lb-section__header not-prose">
        <h2 class="lb-regulator-section__title lb-section__title"><?= $title ?></h2>
      </header>
    <? } ?>
    <? if ($content) { ?>
      <div class="lb-regulator-section__content prose-headings prose-content prose-spaces prose-colors prose-images">
        <?= $content ?>
      </div>
    <? } ?>
    <? if ($regulators) { ?>
      <div class="lb-regulator-section__regulators not-prose">
        <? foreach ($regulators as $regulator) { 
          $attrsStr = getAttributesString(array_intersect_key($args, array_flip(['rel'])));
          ?>
          <a href="<?= esc_url($regulator['link']) ?>" target="_blank" rel="nofollow">
            <?= wp_get_attachment_image($regulator['logo'], [0, 32]) ?>
          </a>
        <? } ?>
      </div>
    <? } ?>
  </div>
</section>
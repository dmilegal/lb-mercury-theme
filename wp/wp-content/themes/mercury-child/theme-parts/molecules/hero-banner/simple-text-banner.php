<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$content = $args['title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$publishedDate = $args['published_date'] ?? '';
?>
<div class="<?= classNames(
              'lbc-hero-banner lbc-hero-banner--simple-text',
              $className
            ) ?>" style="<?= stylesValue(
                            $style
                          ) ?>">
  <div class="lbc-hero-banner__inner">
    <div class="lbc-hero-banner__content">
      <? if ($publishedDate) { ?>
        <time datetime="<?= $publishedDate ?>" pubdate="pubdate"><?= $publishedDate ?></time>
        <? } ?>
      <? if ($content) { ?>
        <h1 class="lbc-hero-banner__title"><?= $content ?></h1>
      <? } ?>
      <? if ($subtitle) { ?>
        <div class="lbc-hero-banner__subtitle">
          <?= $subtitle ?>
        </div>
      <? } ?>
    </div>
  </div>
</div>
<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$content = $args['title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$publishedDate = $args['published_date'] ?? '';
$color = $args['color'] ?? 'gray';

?>
<div class="<?= classNames(
              'lbc-hero-banner lbc-hero-banner--simple-text no-prose',
              $className,
              'lbc-hero-banner--color_' . $color
            ) ?>" style="<?= stylesValue(
                            $style
                          ) ?>">
  <div class="lbc-hero-banner__inner">
    <div class="lbc-hero-banner__content prose-colors">
      <? if ($publishedDate) { ?>
        <time class="lbc-hero-banner__publish-date" datetime="<?= $publishedDate ?>" pubdate="pubdate">
   
        <?= sprintf(__('Published %s', 'mercury-child' ),wp_date('j M Y', strtotime($publishedDate))) ?>
      </time>
        <? } ?>
      <? if ($content) { ?>
        <h1 class="lbc-hero-banner__title">
          <?= $content ?>
        </h1>
      <? } ?>
      <? if ($subtitle) { ?>
        <div class="lbc-hero-banner__subtitle">
          <?= $subtitle ?>
        </div>
      <? } ?>
    </div>
  </div>
</div>
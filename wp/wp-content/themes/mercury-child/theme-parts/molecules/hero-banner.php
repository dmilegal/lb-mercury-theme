<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$content = $args['title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$publishedDate = $args['published_date'] ?? '';
$color = $args['color'] ?? 'gray';

?>
<div class="<?= classNames(
              'lb-hero-banner lb-hero-banner--simple-text',
              $className,
              'lb-hero-banner--color_' . $color
            ) ?>" style="<?= stylesValue(
                            $style
                          ) ?>">
  <div class="lb-hero-banner__inner">
    <div class="lb-hero-banner__content prose-colors">
      <? if ($publishedDate) { ?>
        <time class="lb-hero-banner__publish-date" datetime="<?= $publishedDate ?>" pubdate="pubdate">

          <?= sprintf(__('Published %s', 'mercury-child'), wp_date('j M Y', strtotime($publishedDate))) ?>
        </time>
      <? } ?>
      <? if ($content) { ?>
        <h1 class="lb-hero-banner__title">
          <?= $content ?>
        </h1>
      <? } ?>
      <? if ($subtitle) { ?>
        <p class="lb-hero-banner__subtitle">
          <?= $subtitle ?>
        </p>
      <? } ?>
    </div>
  </div>
</div>
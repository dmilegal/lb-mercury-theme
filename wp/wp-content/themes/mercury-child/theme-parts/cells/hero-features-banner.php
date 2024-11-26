<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$title = $args['title'] ?? '';
$featuresList = $args['features_list'] ?? [];
$featureImage = $args['feature_image'] ?? '';

?>
<section class="<?= classNames(
              'lb-hero-featured-banner',
              'not-prose',
              $className,

            ) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-hero-featured-banner__container">
    <? if ($title) { ?>
      <header class="lb-hero-featured-banner__header">
        <h1 class="lb-hero-featured-banner__title"><?= $title ?></h1>
      </header>
    <? } ?>
    <? if ($featuresList) { ?>
      <div class="lb-hero-featured-banner__features">
        <? foreach ($featuresList as $item) { ?>
          <div class="lb-hero-featured-banner__feature">
            <? if (!empty($item['title'])) { ?>
              <span class="lb-hero-featured-banner__feature-title"><?= $item['title'] ?></span>
            <? } ?>
            <? if (!empty($item['subtitle'])) { ?>
              <span class="lb-hero-featured-banner__feature-subtitle"><?= $item['subtitle'] ?></span>
            <? } ?>
          </div>
        <? } ?>
      </div>
    <? } ?>
    <? if ($featureImage) { ?>
      <div class="lb-hero-featured-banner__image-container">
        <?= wp_get_attachment_image($featureImage, [600, 0], null, [
          'class' => 'lb-hero-featured-banner__image',
        ]) ?>
      </div>
    <? } ?>
  </div>
</section>
<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$postId =  $args['post_id'] ?? null;
$title = $args['title'] ?? ($postId ? get_the_title($postId) : '');
$subtitle = $args['subtitle'] ?? ($postId && has_excerpt($postId) ? get_the_excerpt($postId)  : '');
$publishedDate = $args['published_date'] ?? ($postId ? get_the_date('Y-m-d', $postId) : '');
$enablePublishedDate = $args['enable_published_date'] ?? true;
$color = $args['color'] ?? 'gray';
// 'center'
$align = $args['align'] ?? 'left';



?>
<div class="<?= classNames(
              'lb-hero-banner lb-hero-banner--simple-text',
              $className,
              'lb-hero-banner--color_' . $color,
              'lb-hero-banner--align_' . $align,

            ) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-hero-banner__inner">
    <div class="lb-hero-banner__content prose-colors">
      <? if ($publishedDate && $enablePublishedDate) { ?>
        <time class="lb-hero-banner__publish-date" datetime="<?= $publishedDate ?>" pubdate="pubdate">

          <?= sprintf(__('Published %s', 'mercury-child'), wp_date('j M Y', strtotime($publishedDate))) ?>
        </time>
      <? } ?>
      <? if ($title) { ?>
        <h1 class="lb-hero-banner__title">
          <?= $title  ?>
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
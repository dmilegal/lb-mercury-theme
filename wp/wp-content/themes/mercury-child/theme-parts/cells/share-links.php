<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$link = $args['link'] ?? '';
$title = $args['title'] ?? '';
$desc = $args['description'] ?? '';
?>
<div class="<?= classNames('lb-share-links', $className) ?>" style="<?= stylesValue(
                                                                      $style
                                                                    ) ?>">
  <? get_template_part('theme-parts/atoms/button', null, [
    'prefix' => '<i class="icon-link"></i>',
    'variant' => 'outlined',
  ]); ?>
  <? get_template_part('theme-parts/molecules/social-link', null, [
    'icon' => 'twitter',
    'href' => 'https://twitter.com/intent/tweet?url=' . urlencode($link) . '&text=' . urlencode($title),
    'rel' => "nofollow",
    'target' => "_blank",
  ]); ?>
  <? get_template_part('theme-parts/molecules/social-link', null, [
    'icon' => 'facebook',
    'href' => 'https://www.facebook.com/sharer.php?u=' . urlencode($link),
    'rel' => "nofollow",
    'target' => "_blank",
  ]); ?>
  <? get_template_part('theme-parts/molecules/social-link', null, [
    'icon' => 'linkedin',
    'href' => 'https://www.linkedin.com/sharing/share-offsite/?url=' . urlencode($link),
    'rel' => "nofollow",
    'target' => "_blank",
  ]); ?>
</div>
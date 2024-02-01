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
  <? get_template_part('theme-parts/molecules/social-link', null, [
    'icon' => 'link',
    'data' => [
      'href' => $link,
    ],
    'className' => 'lb-share-links__copy',
    'title' => __('Copy page link', 'mercury-child')
  ]); ?>
  <? get_template_part('theme-parts/molecules/social-link', null, [
    'icon' => 'twitter',
    'href' => 'https://twitter.com/intent/tweet?url=' . urlencode($link) . '&text=' . urlencode($title),
    'rel' => "nofollow",
    'target' => "_blank",
    'title' => __('Share page on x', 'mercury-child')
  ]); ?>
  <? get_template_part('theme-parts/molecules/social-link', null, [
    'icon' => 'facebook',
    'href' => 'https://www.facebook.com/sharer.php?u=' . urlencode($link),
    'rel' => "nofollow",
    'target' => "_blank",
    'title' => __('Share page on facebook', 'mercury-child')
  ]); ?>
  <? get_template_part('theme-parts/molecules/social-link', null, [
    'icon' => 'linkedin',
    'href' => 'https://www.linkedin.com/feed/?shareActive=true&text='. urlencode($title) . ' ' .  urlencode($link),
    'rel' => "nofollow",
    'target' => "_blank",
    'title' => __('Share page on linkedin', 'mercury-child')
  ]); ?>
</div>
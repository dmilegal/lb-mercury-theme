<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$postId = $args['post_id'] ?? null;

if (!$postId) return;

$tagList = wp_get_post_categories($postId);

?>

<div class="<?= classNames($className, 'lb-tag-list not-prose') ?>" style="<?= stylesValue($style) ?>">
  <?
  foreach ($tagList as $cId) {
    $cat = get_category($cId);
    get_template_part('theme-parts/atoms/badge', null, [
      'size' => 'lg',
      'content' => __($cat->name, 'mercury-child'),
      'href' => get_category_link($cId)

    ]);
  } ?>
</div>
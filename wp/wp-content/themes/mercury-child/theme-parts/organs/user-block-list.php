<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$userIds = $args['user_ids'] ?? [];
// 'sm' | 'md' | 'lg'
$size = $args['size'] ?? 'md';
// 'vertical' | 'horizontal'
$orientation = $args['orientation'] ?? 'vertical';

if (!$userIds) return;

?>
<div class="<?= classNames($className, "lb-user-block-list", "lb-user-block-list--orient_" . $orientation) ?>" style="<?= stylesValue($style) ?>">
  <? foreach ($userIds as $userId) {
    get_template_part('theme-parts/cells/user-block', null, [
      'user_id' => $userId,
      'size' => $size
    ]);
  } ?>
</div>
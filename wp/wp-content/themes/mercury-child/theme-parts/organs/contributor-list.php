<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$userIds = $args['user_ids'] ?? [];
$size = $args['size'] ?? 'md';

if (!$userIds) return;

?>
<div class="<?= classNames($className, "lb-contributor-list") ?>" style="<?= stylesValue($style) ?>">
  <? foreach ($userIds as $userId) {
    get_template_part('theme-parts/cells/user-block', null, [
      'user_id' => $userId,
      'size' => $size
    ]);
  } ?>
</div>
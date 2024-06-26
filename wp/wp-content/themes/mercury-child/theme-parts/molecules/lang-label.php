<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$title = $args['title'] ?? '';
$ico_link = $args['ico_link'] ?? 'circle';
?>
<span class="lb-lang-label">
  <img width="17" height="17" class="lb-lang-label__ico" alt="<?= $title ?>" src="<?= $ico_link ?>">
  <span class="lb-lang-label__title">
  <?= $title ?>
  </span>
</span>
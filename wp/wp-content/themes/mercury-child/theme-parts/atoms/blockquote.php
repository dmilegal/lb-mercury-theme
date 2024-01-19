<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$content = $args['content'] ?? '';
$cite = $args['cite'] ?? '';
$authorId = $args['author_id'] ?? null;
// 'sm' | 'md' | 'xl' | '2xl'
$size = $args['size'] ?? 'md';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id'])));
?>
<blockquote class="<?= classNames($className, 'lb-blockquote', 'lb-blockquote--size_' . $size) ?>" style="<?= stylesValue($style) ?>">
  <div class="not-prose">
    <?= $content ?>
  </div>
  <? if ($authorId || $cite) { ?>
    <footer>
      <? if ($authorId) {
        $userBlockSize = 'md';
        if ($size == 'xl' || $size == '2xl')
          $userBlockSize = 'lg';
      ?>
        <div class="lb-blockquote__author not-prose">
          <? get_template_part('theme-parts/cells/user-block', null, [
            'user_id' => $authorId,
            'size' => $userBlockSize
          ]); ?>
        </div>
      <? } elseif ($cite) { ?>
        <cite>— <?= $cite ?></cite>
      <? } ?>
    </footer>
  <? } ?>
</blockquote>
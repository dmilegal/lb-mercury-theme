<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$content = $args['content'] ?? '';
$cite = $args['cite'] ?? '';
$authorId = $args['author_id'] ?? null;

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id'])));
?>
<blockquote class="<?= classNames($className, 'lb-blockquote') ?>" style="<?= stylesValue($style) ?>">
  <div class="not-prose">
    <?= $content ?>
  </div>
  <? if ($authorId || $cite) { ?>
  <footer>
    <? if ($authorId) { ?>
      <div class="lb-blockquote__author not-prose">
        <? get_template_part('theme-parts/cells/user-block', null, [
        'user_id' => $authorId,
        'size' => 'sm'
      ]); ?>
      </div>
    <? } elseif ($cite) { ?>
      <cite><?= $cite ?></cite>
    <? } ?>
  </footer>
  <? } ?>
</blockquote>
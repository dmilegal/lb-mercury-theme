<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$content = $args['content'] ?? '';
$cite = $args['cite'] ?? '';
$authorId = $args['author_id'] ?? null;

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id'])));
?>
<blockquote class="lb-blockquote">
  <div class="not-prose">
    <?= $content ?>
  </div>
  <? if ($authorId || $cite) { ?>
  <footer>
    <? if ($authorId) {
      $displayName = get_the_author_meta('display_name', $authorId);
      $jobTitle = get_field('job_title', 'user_' . $authorId);

    ?>
      <div class="lb-blockquote__author not-prose">
        <?= get_avatar(get_the_author_meta('user_email', $author_id), 40, '', '', [
          'class' => 'lb-blockquote__author-avatar'
        ]) ?>
        <div>
          <? if ($displayName) { ?>
            <span class="lb-blockquote__author-name"><?= $displayName ?></span>
          <? } ?>
          <? if ($jobTitle) { ?>
            <span class="lb-blockquote__author-job"><?= $jobTitle ?></span>
          <? } ?>
        </div>
      </div>
    <? } elseif ($cite) { ?>
      <cite><?= $cite ?></cite>
    <? } ?>
  </footer>
  <? } ?>
</blockquote>
<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$content = $args['content'] ?? '';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id'])));
?>
<blockquote class="lb-blockquote" cite="https://www.huxley.net/bnw/four.html">
  <?= $content ?>
  <footer>—Aldous Huxley, <cite>Brave New World</cite></footer>
</blockquote>
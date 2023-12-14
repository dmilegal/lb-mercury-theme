<?
$className = $args['className'] ?? '';
$style = $args['className'] ?? '';
/**
 * sm | md | lg
 */
$size = $args['size'] ?? 'md';

?>
<span class="<?= classNames('lbc-dot', $className, $size) ?>" <? if ($style) { ?> style="<?= $style ?>" <? } ?>></span>
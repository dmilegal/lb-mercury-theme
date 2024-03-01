<?
$allowed_blocks = array("lb/how-to-list-item-title", "core/paragraph", "core/image");
$template = array(
  array("lb/how-to-list-item-title"),
  array("core/paragraph"),
); ?>

<li class="<?= classNames("lb-how-to-list-item") ?>">
  <InnerBlocks templateLock="false" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
</li>
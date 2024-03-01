<?
$allowed_blocks = array("lb/step-list-item-title", "core/paragraph", "core/image");
$template = array(
  array("lb/step-list-item-title"),
  array("core/paragraph"),
); ?>

<li class="<?= classNames("lb-step-list-item") ?>">
  <InnerBlocks templateLock="false" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
</li>
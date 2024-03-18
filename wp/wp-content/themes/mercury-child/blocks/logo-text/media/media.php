<?
$allowed_blocks = array('core/image');
$template = array(
  array('core/image', [
    "sizeSlug" => 'medium'
  ])
);
?>

<InnerBlocks templateLock="all" class="lb-logo-text__media" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
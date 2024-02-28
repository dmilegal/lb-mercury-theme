<?php
$allowed_blocks = array('core/paragraph', 'lb/logo-text-title');
$template = array(
  array('lb/logo-text-title'. array()),
  array('core/paragraph', array(
    'placeholder' => __('Enter content...'),
  )),
);

?>

<InnerBlocks templateLock="false" class="lb-logo-text__content" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
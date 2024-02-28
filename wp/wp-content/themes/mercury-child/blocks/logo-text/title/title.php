<?php
$allowed_blocks = array('core/heading');
$template = array(
  array('core/heading', array(
    'placeholder' => __('Enter Title...'),
    'className' => 'lb-logo-text__title',
    'level' => 3,
  )),
);

?>
<InnerBlocks templateLock="all" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
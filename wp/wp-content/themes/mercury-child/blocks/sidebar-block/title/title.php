<?php

$allowed_blocks = array('core/paragraph');
$template = array(
  array('core/paragraph', array(
    'placeholder' => __('Enter Title...'),
    'className' => 'lb-sidebar-block__title',
  ))
); ?>

<InnerBlocks templateLock="all" class="not-prose" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
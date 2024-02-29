<?php
$listTitle = isset($block['data']['title']) ? $block['data']['title'] : '';

$allowed_blocks = array('core/paragraph');
$template = array(
  array('core/paragraph', array(
    'placeholder' => __('Enter Title...'),
    'content' => $listTitle ?? '',
    'className' => 'lb-group-list__title',
  ))
); ?>

<InnerBlocks templateLock="all" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
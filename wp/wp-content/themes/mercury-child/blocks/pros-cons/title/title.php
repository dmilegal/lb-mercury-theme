<?php
$theme = isset($block['data']['theme']) && $block['data']['theme'] == 'adv' ? 'adv' : 'dis';

$allowed_blocks = array('core/paragraph');
$template = array(
  array('core/paragraph', array(
    'placeholder' => __('Enter Title...'),
    'content' => $theme == 'adv' ? __('Advantages', 'mercury-child') : __('Disadvantages', 'mercury-child'),
    'className' => 'lb-pros-cons-item__title',
  ))
);

?>
<InnerBlocks templateLock="all" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
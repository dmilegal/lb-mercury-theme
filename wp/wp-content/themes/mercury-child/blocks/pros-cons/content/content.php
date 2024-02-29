<?php
$theme = isset($block['data']['theme']) && $block['data']['theme'] == 'adv' ? 'adv' : 'dis';

$allowed_blocks = array('core/list', 'core/paragraph', 'lb/pros-cons-title');
$template = array(
  array('lb/pros-cons-title', array(
    'lock' => array(
      'move'   => true,
      'remove' => false,
    ),
    'data' => [
      'theme' => $theme
    ]
  )),
    array('core/list', array(
      'className' => $theme === 'adv' ? "is-list-ico-check" : "is-list-ico-cross",
      'lock' => array(
        'move'   => true,
        'remove' => true,
      ),
    ), array(
      array(
        'core/list-item', array(
          'placeholder' => $theme === 'adv' ? __('Enter Advantages...', 'mercury-child') : __('Enter Disadvantages...', 'mercury-child'),
        )
      )
    )),

);

get_template_part('theme-parts/molecules/pros-cons-col', null, [
  'content' => '<InnerBlocks templateLock="false" allowedBlocks="' . esc_attr(wp_json_encode($allowed_blocks)) . '" template="' . esc_attr(wp_json_encode($template)) . '" />',
]);

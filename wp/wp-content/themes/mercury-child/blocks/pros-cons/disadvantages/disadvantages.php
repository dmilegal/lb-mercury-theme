<?php

$allowed_blocks = array('core/group');
$template = array(
  array('core/group', array(
    'className' => 'is-style-group-bordered',
    'lock' => array(
      'move'   => true,
      'remove' => true,
    ),
  ), array(
    array('lb/pros-cons-content', [
      'data' => [
        'theme' => 'dis',
      ]
    ])
  ))
);
?>

<InnerBlocks class="lb-pros-cons-item" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />

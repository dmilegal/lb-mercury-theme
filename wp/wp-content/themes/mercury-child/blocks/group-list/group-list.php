<?php
$listIco = isset($block['data']['mark_ico']) ? $block['data']['mark_ico'] : null;
$listTitle = isset($block['data']['title']) ? $block['data']['title'] : '';


$allowed_blocks = array('core/group');
$template = array(
  array('core/group', array(
    'className' => 'is-style-group-bordered',
    'lock' => array(
      'move'   => true,
      'remove' => true,
    ),
  ), array(
    array('lb/group-list-content', [
      'data' => [
        'mark_ico' => $listIco,
        'title' => $listTitle,
      ]
    ])
  ))
);

?>

<InnerBlocks class="lb-group-list" templateLock="all" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />

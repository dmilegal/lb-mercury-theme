<?php
$listIco = isset($block['data']['mark_ico']) ? $block['data']['mark_ico'] : null;
$listTitle = isset($block['data']['title']) ? $block['data']['title'] : '';

$allowed_blocks = array('core/list', 'core/paragraph', 'lb/group-list-title');
$template = array(
  array('lb/group-list-title', array(
    'lock' => array(
      'move'   => true,
      'remove' => false,
    ),
    'data' => [
      'title' => $listTitle
    ]
  )),
    array('core/list', array(
      'className' => $listIco ? "is-list-ico-" . $listIco : "",
      'lock' => array(
        'move'   => true,
        'remove' => false,
      ),
    ), array(
      array(
        'core/list-item', array(
          'placeholder' => __('Enter Item Text...', 'mercury-child'),
        )
      )
    )),
);

?>
<InnerBlocks templateLock="false" class="lb-group-list__inner" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />

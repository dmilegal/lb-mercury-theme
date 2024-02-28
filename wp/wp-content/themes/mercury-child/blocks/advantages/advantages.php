<?php

/**
 * Advantages Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

$block_opts = getCommonBlockProps($block, $post_id, $is_preview);

$title = get_field('title');
$allowed_blocks = array('core/list', 'core/paragraph');
$template = array(
  array('core/paragraph', array(
    'placeholder' => __('Enter Title...'),
    'content' => __('Advantages', 'mercury-child'),
    'className' => 'lb-pros-cons-col__title',
    'lock' => [
      'move'   => true,
      'remove' => false,
    ]
  )),
  array('core/list', array(
    'lock' => array(
      'move'   => true,
      'remove' => true,
    ),
  ), array(
    array(
      'core/list-item', array(
        'placeholder' => __('Enter Advantages...'),
      )
    )
  )),
);

get_template_part('theme-parts/molecules/pros-cons-col', null, [
  ...$block_opts,
  'content' => '<InnerBlocks allowedBlocks="' . esc_attr(wp_json_encode($allowed_blocks)) . '" template="' . esc_attr(wp_json_encode($template)) . '" />',
  'type' => 'adv',
  'title' => $title
]);

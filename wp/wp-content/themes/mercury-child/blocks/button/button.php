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

$text = get_field('text');
$link = get_field('link');
$color = get_field('color');
$variant = get_field('variant');
$size = get_field('size');
$isInline = get_field('is_inline');

get_template_part('theme-parts/atoms/button', null, [
	'size' => $size,
	'color' => $color,
	'variant' => $variant,
	'content' => $text ? $text : ($link && isset($link['title']) ? $link['title'] : ''),
	'is_preview' => $is_preview,
	'target' => $link && isset($link['target']) ? $link['target'] : null,
	'href' => $link && isset($link['url']) ? $link['url'] : null,
	'className' => classNames(...$block_opts['className']),
	'is_inline' => $isInline,
]);

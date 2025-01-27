<?

/**
 * Blockquote Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */
$bonuses = aces_get_all_casino_bonus_ids($post_id);

$selectionGroup = [
  'show_bonus_category_filter' => true,
  'card_variant' => 'bonus-card',
  'post_type' => 'casino',
  

  'casino_list' => array_map(function($b_id) use($post_id) {
    $bonusCategories = (int) $b_id ? aces_get_bonus_categories($b_id) : [];

    return [
      'casino_id' => $post_id,
      'bonus' => $b_id,
      'bonus_category' => $bonusCategories ?$bonusCategories[0]->term_id : false
  
    ];
  } , $bonuses)
];

if ($selectionGroup && $selectionGroup['casino_list'])
  get_template_part('theme-parts/organs/review-list/review-list', null, ['theme' => 'inline', ...$selectionGroup]);
else if ($is_preview) { ?>
  <h3 style="padding: 24px 0; text-align: center;">Please select casinos</h3>
<? } ?>
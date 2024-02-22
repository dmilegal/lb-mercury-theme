<?
$selectionGroup = get_field('casino_selection_group') ?? null;

if ($selectionGroup && $selectionGroup['casino_list'])
  get_template_part('theme-parts/organs/casino-list/casino-list', null, ['theme' => 'inline', ...$selectionGroup]);
else if ($is_preview) {?>
  <h3 style="padding: 24px 0; text-align: center;">Please select casinos</h3>
<? } ?>


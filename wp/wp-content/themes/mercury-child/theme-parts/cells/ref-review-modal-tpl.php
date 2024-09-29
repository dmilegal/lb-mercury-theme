<?
ob_start();
get_template_part('theme-parts/organs/review-list/default', null, [
  'theme' => 'inline', 
  'async_loading' => true,
  'list_theme' => '2'
]);
$list_html = ob_get_contents();
ob_end_clean();

?>
<template id="ref-review-list">
  <? get_template_part("/theme-parts/molecules/modal", null, [
    'title' => get_field("modal_ref_list_title", "options"),
    'subtitle' => get_field("modal_ref_list_subtitle", "options"),
    'content' => $list_html,
    'className' => 'ref-review-modal'
  ]) ?>
</template>
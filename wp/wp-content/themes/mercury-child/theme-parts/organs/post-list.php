<?
$postIds = $args['post_ids'] ?? [];
?>

<div class="lb-post-list">
  <? foreach ($postIds as $postId) {
     get_template_part('/theme-parts/cells/post-card', null, [
      'post_id' => $postId
     ]);
  } ?>
   
</div>
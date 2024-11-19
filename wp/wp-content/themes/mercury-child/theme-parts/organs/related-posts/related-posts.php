<?
$postIds = $args['post_ids'] ?? null;

if ($postIds) { ?>
  <div class="swiper lb-related-posts">
    <div class="swiper-wrapper">
      <? foreach ($postIds as $postId) { ?>
        <div class="lb-related-posts__item swiper-slide">
          <? get_template_part('theme-parts/cells/post-card/post-card', null, [
            'post_id' => $postId,
            'variant' => 'outlined'
          ]); ?>
        </div>
      <? } ?>
    </div>
  </div>
<? } ?>
<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$title = $args['title'] ?? '';
$enableCustomPosts = $args['enable_custom_posts'] ?? false;
$customPosts = $args['custom_posts'] ?? [];
$postIds = [];

if ($enableCustomPosts)
  $postIds = $customPosts;
else
  $postIds = array_map(fn($p) => $p['ID'], wp_get_recent_posts(array(
    'numberposts' => 3,
    'post_status' => 'publish',
  ), ARRAY_A));

if (!$postIds) return;
?>
<section class="<?= classNames(
                  'lb-latest-posts-section',
                  'not-prose',
                  $className,

                ) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-latest-posts-section__container">
    <? if ($title) { ?>
      <header class="lb-latest-posts-section__header lb-section__header">
        <h2 class="lb-latest-posts-section__title lb-section__title"><?= $title ?></h2>
      </header>
    <? } ?>
    <? if ($postIds) { ?>
      <div class="lb-latest-posts-section__list">
        <? foreach ($postIds as $postId) { ?>
          <? get_template_part('theme-parts/cells/post-card/post-card', null, [
            'post_id' => $postId,
            'variant' => 'outlined',
            'className' => 'lb-latest-posts-section__item'
          ]); ?>
        <? } ?>
      </div>
    <? } ?>
    <? get_template_part('theme-parts/atoms/button', null, [
      'size' => 'xl',
      'content' => __('All blogs', 'mercury-child'),
      'variant' => 'outlined',
      'className' => 'lb-latest-posts-section__more',
      'href' => get_post_type_archive_link('post')
    ]); ?>
  </div>
</section>
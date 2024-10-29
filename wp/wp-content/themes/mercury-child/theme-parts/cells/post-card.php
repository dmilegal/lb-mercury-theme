<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$postId = $args['post_id'] ?? null;
$thumbId = get_post_thumbnail_id($postId);


if (!$postId) return;

$authorId = get_post_field('post_author', $postId);
$user = get_userdata($authorId);
// Get author's display name
$displayName = $user->display_name;

// If display name is not available then use nickname as display name
if (empty($displayName))
  $displayName = $user->nickname;

?>
<div class="<?= classNames($className, 'lb-post-card', [
              'lb-post-card--no-thumb' => !$thumbId,
              'lb-post-card--grid' => !!$thumbId,
            ]) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-post-card__inner">
    <div class="lb-post-card__content">
    <? if ($authorId) { ?>
      <div class="lb-post-card__author">
        <?= get_avatar($authorId, 24, '', '', [
          'class' => 'lb-post-card__author-avatar',
          'loading' => 'lazy'
        ]) ?>
        <span class="lb-post-card__author-name"><?= $displayName ?></span>
      </div>
      <? } ?>
      <a href="<? the_permalink($postId) ?>" class="lb-post-card__title">
        <?= get_the_title($postId); ?>
      </a>
      <div class="lb-post-card__excerpt">
        <?php echo esc_html(wp_trim_words(get_the_excerpt($postId), 18, ' ...')); ?>
      </div>
      <div class="lb-post-card__info">
        <?php if (!get_theme_mod('mercury_date_display')) { ?>
          <span class="lb-post-card__info-item lb-post-card__pub-date">
            <!-- <i class="icon-clock"></i> -->
            <?php if (get_theme_mod('mercury_time_ago_format')) {
            ?>
              <?php printf(esc_html_x('%s ago', '%s = human-readable time difference', 'mercury-child'), human_time_diff(get_the_time('U', $postId), current_time('timestamp'))); ?>
            <?php } else {
              echo get_the_date('', $postId);
            } ?></span>
        <?php } ?>
        <?php if (function_exists('spacethemes_set_post_views')) { ?>
          <span class="lb-post-card__info-item lb-post-card__views-count">
            <i class="icon-eye"></i>
            <?php echo esc_html(spacethemes_get_post_views($postId)); ?></span>
        <?php } ?>
      </div>
    </div>
    <? if ($thumbId) { ?>
      <div class="lb-post-card__media">
        <?= wp_get_attachment_image($thumbId, [260, 0], false, array(
          "alt" => esc_attr(get_the_title($postId)),
          "class" => "lb-post-card__image"
        )); ?>
      </div>
    <? } ?>
  </div>
</div>
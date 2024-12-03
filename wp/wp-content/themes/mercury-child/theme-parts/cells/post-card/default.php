<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$postId = $args['post_id'] ?? null;

$thumbId = get_post_thumbnail_id($postId);

?>
<div class="<?= classNames('lb-post-card', $className, [
  'lb-post-card--no-thumb' => !$thumbId,
  'lb-post-card--grid' => !!$thumbId,
]) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-post-card__inner">
    <? if ($thumbId) { ?>
      <div class="lb-post-card__media">
        <?= wp_get_attachment_image($thumbId, 'mercury-450-450', false, array(
          "alt" => esc_attr(get_the_title($postId)),
          "class" => "lb-post-card__image"
        )); ?>
      </div>
    <? } ?>
    <div class="lb-post-card__content">
      <div class="lb-post-card__info">
        <?php if (!get_theme_mod('mercury_date_display')) { ?>
          <span class="lb-post-card__info-item lb-post-card__pub-date">
            <i class="icon-clock"></i>
            <?php if (get_theme_mod('mercury_time_ago_format')) {
            ?>
              <?php printf(esc_html_x('%s ago', '%s = human-readable time difference', 'mercury-child'), human_time_diff(get_the_time('U', $postId), current_time('timestamp'))); ?>
            <?php } else {
              echo get_the_date('', $postId);
            } ?></span>
        <?php } ?>

        <?php if (comments_open($postId)) { ?>
          <span class="lb-post-card__info-item lb-post-card__comment-count">
            <i class="icon-message-circle"></i>
            <?php comments_number('0', '1', '%', $postId); ?>
          </span>
        <?php } ?>

        <?php if (function_exists('spacethemes_set_post_views')) { ?>
          <span class="lb-post-card__info-item lb-post-card__views-count">
            <i class="icon-eye"></i>
            <?php echo esc_html(spacethemes_get_post_views($postId)); ?></span>
        <?php } ?>
      </div>
      <a href="<? the_permalink($postId) ?>" class="lb-post-card__title">
        <?= get_the_title($postId); ?>
        </a>
      <div class="lb-post-card__excerpt">
        <?php echo esc_html(wp_trim_words(get_the_excerpt($postId), 18, ' ...')); ?>
      </div>
      <div class="lb-post-card__extra">
        <a class="lb-post-card__read-more" href="<?php the_permalink($postId) ?>" title="<?php esc_attr_e('Read more', 'mercury-child'); ?>"><?php esc_html_e('Read more', 'mercury-child'); ?> &raquo;</a>
      </div>
    </div>
  </div>
</div>
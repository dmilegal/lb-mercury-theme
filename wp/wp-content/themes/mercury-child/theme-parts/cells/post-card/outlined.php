<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$postId = $args['post_id'] ?? null;

$thumbId = get_post_thumbnail_id($postId);
[$date, $time] = getPostDateTime($postId);

?>
<a href="<? the_permalink($postId) ?>" class="<?= classNames('lb-post-outlined-card', $className, [
              'lb-post-outlined-card--no-thumb' => !$thumbId,
              'lb-post-outlined-card--grid' => !!$thumbId,
            ]) ?>" style="<?= stylesValue($style) ?>">
  <? if ($thumbId) { ?>
    <div class="lb-post-outlined-card__media">
      <?= wp_get_attachment_image($thumbId, [260, 0], false, array(
        "alt" => esc_attr(get_the_title($postId)),
        "class" => "lb-post-outlined-card__image"
      )); ?>
    </div>
  <? } ?>
  <div class="lb-post-outlined-card__content">
    <?php if (!get_theme_mod('mercury_date_display')) { ?>
      <span class="lb-post-outlined-card__pub-date">
        <?php if (get_theme_mod('mercury_time_ago_format')) {
        ?>
          <?php printf(esc_html_x('%s ago', '%s = human-readable time difference', 'mercury-child'), human_time_diff($time, current_time('timestamp'))); ?>
        <?php } else {
          echo $date;
        } ?></span>
    <?php } ?>
    <div class="lb-post-outlined-card__title">
      <?= get_the_title($postId); ?>
    </div>

  </div>
</a>
<?
$postId =  $args['post_id'] ?? null;
$authorId = get_post_field('post_author', $postId);
$user = get_userdata($authorId);
$dateVariant = $args['date_variant'] ?? 'published_date';
[$date, $time] = getPostDateTime();

$displayName = $user->display_name;

if (empty($displayName))
  $displayName = $user->nickname;
?>
<div class="lb-post-author">
  <?= get_avatar($authorId, 32, '', '', [
    'class' => 'lb-post-author__avatar',
    'loading' => 'lazy'
  ]) ?>
  <div class="lb-post-author__info">
    <span class="lb-post-author__name">
      <?= esc_html($displayName) ?>
    </span>
    <?php if (!get_theme_mod('mercury_date_display')) { ?>
      <time class="lb-post-author__pub-date" datetime="<?= get_the_date('Y-m-d', $postId) ?>" pubdate="pubdate">
        <?php if (get_theme_mod('mercury_time_ago_format')) {
        ?>
          <?php printf(esc_html_x('%s ago', '%s = human-readable time difference', 'mercury-child'), human_time_diff(
            $time,
            current_time('timestamp')
          )); ?>
        <?php } else {
          echo $date;
        } ?>
      </time>
    <?php } ?>
  </div>
</div>
<?
global $post;
$user = get_userdata($post->post_author);
// Get author's display name
$display_name = $user->display_name;

// If display name is not available then use nickname as display name
if (empty($display_name))
  $display_name = $user->nickname;
?>
<div class="lb-post-header">
  <a class="lb-post-header__to-archive" href="<?= get_post_type_archive_link(get_post_type($post->ID)) ?>">
    <i class="icon-arrow-left"></i>
    <?= __('Back to blog', 'mercury-child') ?>
  </a>
  <h1 class="lb-post-header__title"><?= get_the_title($post->ID) ?></h1>
  <div class="lb-post-header__author">
    <?= get_avatar($post->post_author, 32, '', '', [
      'class' => 'lb-post-header__author-avatar',
      'loading' => 'lazy'
    ]) ?>
    <div class="lb-post-header__author-info">
      <span class="lb-post-header__author-name">
        <?= esc_html($display_name) ?>
      </span>
      <?php if (!get_theme_mod('mercury_date_display')) { ?>
        <span class="lb-post-header__pub-date">
          <?php if (get_theme_mod('mercury_time_ago_format')) {
          ?>
            <?php printf(esc_html_x('%s ago', '%s = human-readable time difference', 'mercury-child'), human_time_diff(get_the_time('U', $post->ID), current_time('timestamp'))); ?>
          <?php } else {
            echo get_the_date('', $post->ID);
          } ?></span>
      <?php } ?>
    </div>
  </div>
  <div class="lb-post-header__block lb-post-header__block--toc lb-post-header__block--on_md">
    <?
    ob_start();
    get_template_part('theme-parts/molecules/toc', null);
    $content = ob_get_clean();
    echo do_shortcode($content);
    ?>
  </div>
</div>
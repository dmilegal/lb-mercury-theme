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
    <? get_template_part('theme-parts/cells/post-author-block', null,[
      'post_id' => $post->ID
    ]); ?>
  </div>
  <div class="lb-post-header__block lb-post-header__block--toc lb-post-header__block--on_md">
    <?
    ob_start();
    get_template_part('theme-parts/molecules/toc');
    $content = ob_get_clean();
    echo do_shortcode($content);
    ?>
  </div>
</div>
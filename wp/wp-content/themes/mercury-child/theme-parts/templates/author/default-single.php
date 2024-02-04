<?php
global $post;
// Get author's social media URL
$authorId = $post->post_author;

get_header();

?>
<div class="lb-layout lb-layout--tight">
  <div class="lb-layout__breadcrumbs">
    <?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
  </div>

  <div class="lb-layout__banner">
    <? get_template_part('theme-parts/cells/hero-author-banner', null, [
      'author_id' => $authorId,
    ]); ?>
  </div>


  <div class="lb-layout__content">
    <div class="lb-layout__inner">
      <div class="lb-archive">
        <?php if (have_posts()) : ?>
          <div class="lb-archive__list">
            <?
            $postIds = [];
            while (have_posts()) : the_post();
              $postIds[] = get_the_ID();
            endwhile; ?>

            <?php
            get_template_part('/theme-parts/organs/post-list', null, [
              'post_ids' =>  $postIds
            ]); ?>
          </div>
          <!-- Archive Navigation Start -->
          <div class="lb-archive__pag">
            <?php get_template_part('/theme-parts/cells/pagination'); ?>
          </div>

          <!-- Archive Navigation End -->

        <?php else : ?>
          <!-- Posts not found Start -->
          <div class="lb-archive-not-found">
            <div class="lb-archive-not-found__inner">
              <h2 class="lb-archive-not-found__title"><?php esc_html_e('Posts not found', 'mercury-child'); ?></h2>
            </div>
          </div>
          <!-- Posts not found End -->

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
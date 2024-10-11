<?php
$bannerTitle = $args['banner_title'] ?? get_the_archive_title();
if (is_home() ) {
  $page_for_posts_id = get_option('page_for_posts');
  $bannerTitle = get_the_title($page_for_posts_id);
}
$bannerSubtitle = $args['banner_subtitle'] ?? '';
$bannerTextContent = $args['banner_text_content'] ?? '';
get_header();

?>

<div class="lb-layout lb-layout--tight-content">
  <? if (!is_front_page()) { ?>
    <div class="lb-layout__breadcrumbs">
      <?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
    </div>
  <? } ?>

  <div class="lb-layout__banner">
    <? get_template_part('theme-parts/cells/hero-banner', null, [
      'title' => $bannerTitle,
      'subtitle' => $bannerSubtitle,
      'align' => $bannerTextContent ? 'left' : 'center',
      'text_content' => $bannerTextContent,
      'enable_published_date' => false,
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
            <?php  get_template_part('/theme-parts/cells/pagination'); ?>
          </div>

          <!-- Archive Navigation End -->

        <?php else : ?>
          <!-- Posts not found Start -->
          <div class="lb-archive-not-found">
            <div class="lb-archive-not-found__inner">
              <h2 class="lb-archive-not-found__title"><?php esc_html_e('Posts not found', 'mercury-child'); ?></h2>
              <p class="lb-archive-not-found__subtitle">
                <?php esc_html_e('No posts has been found. Please return to the homepage.', 'mercury-child'); ?>
              </p>
            </div>
          </div>
          <!-- Posts not found End -->

        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
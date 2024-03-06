<?php get_header(); ?>
<div class="lb-layout">
  <div class="lb-layout__content">
    <div class="lb-layout__inner">
      <div class="lb-page-not-found prose-colors">
        <img class="lb-page-not-found__image" width="292" height="113" alt="404 error" src="<?= get_stylesheet_directory_uri() . '/img/404.svg' ?>" >
        <h1 class="lb-page-not-found__title"><?= __('Ooops, that page is gone', 'mercury-child') ?></h1>
        <p class="lb-page-not-found__subtitle"><?= __('Why not check out our forecasts and curated picks?', 'mercury-child') ?></p>
        <? wp_nav_menu([
          'theme_location' => 'page_not_found_menu',
          'container_class' => 'lb-page-not-found__nav'
        ]) ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
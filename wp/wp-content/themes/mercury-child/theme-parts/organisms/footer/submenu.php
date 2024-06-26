<? if (has_nav_menu('footer_sub_menu')) { ?>
  <div class="lb-footer__extra-actions<?= is_multisite() ? " lb-footer__extra-actions--two-column" : " lb-footer__extra-actions--single-column" ?>">
    <? if (is_multisite() && function_exists('msls_blog_collection')) {
      $collection = msls_blog_collection();
      $current_subsite = $collection->get_current_blog();

      $ico_link = getIconByLangCode($current_subsite->get_language());
      $title = $current_subsite->get_description() && $current_subsite->get_description() != $current_subsite->get_language() ? $current_subsite->get_description() : get_blog_details(['blog_id' => $current_subsite->userblog_id])->blogname;
    ?>
      <? get_template_part('/theme-parts/molecules/lang-label', null, [
        'title' => $title,
        'ico_link' => $ico_link
      ]); ?>
    <? } ?>
    <? wp_nav_menu(array('container' => 'ul', 'menu_class' => 'lb-footer__submenu', 'theme_location' => 'footer_sub_menu', 'depth' => 1, 'fallback_cb' => '__return_empty_string')); ?>
  </div>
<? } ?>
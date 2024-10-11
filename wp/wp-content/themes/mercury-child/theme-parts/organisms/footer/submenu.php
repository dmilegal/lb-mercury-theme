<? if (has_nav_menu('footer_sub_menu') ||  get_field('sites_linking_list', 'option')) { ?>
  <div class="lb-footer__extra-actions<?= is_multisite() ? " lb-footer__extra-actions--two-column" : " lb-footer__extra-actions--single-column" ?>">
    <? get_template_part('/theme-parts/molecules/sites-linking', null, [
      'title' => get_field('sites_linking_current_name', 'option'),
      'sites_list' => get_field('sites_linking_list', 'option'),
      'flag' => get_field('sites_linking_current_flag', 'option'),
      'dropdown_position' => 'top',
    ]); ?>
    <? wp_nav_menu(array('container' => 'ul', 'menu_class' => 'lb-footer__submenu', 'theme_location' => 'footer_sub_menu', 'depth' => 1, 'fallback_cb' => '__return_empty_string')); ?>
  </div>
<? } ?>
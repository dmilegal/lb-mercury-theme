<div class="lb-footer__copy">
  <?php if (get_theme_mod('footer_copyright') == '') { ?>
    <?php esc_html_e('&copy; Copyright', 'mercury-child'); ?> <?php echo esc_html(date('Y')) ?> <?php echo esc_html(get_bloginfo('name')) ?> | <?php esc_html_e('Powered by', 'mercury-child'); ?> <a href="<?php echo esc_url(__('https://wordpress.org', 'mercury-child')); ?>" target="_blank" title="<?php esc_attr_e('WordPress', 'mercury-child'); ?>"><?php esc_html_e('WordPress', 'mercury-child'); ?></a> | <a href="<?php echo esc_url(__('https://mercurytheme.com', 'mercury-child')); ?>" target="_blank" title="<?php esc_attr_e('Affiliate Marketing WordPress Theme. Reviews and Top Lists', 'mercury-child'); ?>"><?php esc_html_e('Mercury Theme', 'mercury-child'); ?></a>
  <?php } else { ?>
    <?php
    $allowed_html = array(
      'a' => array(
        'href' => true,
        'title' => true,
        'target' => true,
      ),
      'br' => array(),
      'em' => array(),
      'strong' => array(),
      'span' => array(),
      'p' => array()
    );
    echo wp_kses(get_theme_mod('footer_copyright'), $allowed_html);
    ?>
  <?php } ?>
</div>
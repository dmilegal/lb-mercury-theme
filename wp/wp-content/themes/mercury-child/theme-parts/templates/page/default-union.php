<?php get_header(); ?>

<div class="lb-layout">
  <? if (!is_front_page()) { ?>
    <div class="lb-layout__breadcrumbs">
      <?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
    </div>
  <? } ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?
       ob_start();
       the_content();
      $content = ob_get_clean();
      $pattern = '/\[_lb_sidebar name=(.*?)\]/';

      $content = preg_replace_callback($pattern, function ($matches) {
        return do_shortcode("[lb_sidebar name=" . $matches[1] . "]");
      }, $content);
      echo $content;
        ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
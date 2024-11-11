<?
global $post;
?>
<div class="lb-post-header">
  <div class="lb-post-header__block lb-post-header__block--toc lb-post-header__block--on_md">
    <? 
    ob_start();
    get_template_part('theme-parts/molecules/toc', null, [
      'variant' => 'contrast',
      'is_collapsible' => true
    ]); 
    $content = ob_get_clean();
    echo do_shortcode($content);
    ?>
  </div>
</div>
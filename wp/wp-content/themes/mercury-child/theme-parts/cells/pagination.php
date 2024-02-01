<div class="lb-pagination">
  <div class="lb-pagination__v lb-pagination__v--large">
    <?php the_posts_pagination(array(
      'end_size' => 2,
      'prev_text'    => '<span class="lb-pagination__btn lb-pagination__btn--prev"><i class="icon-arrow-left"></i><span>' . esc_html__('Previous', 'mercury-child') . '</span></span>',
      'next_text'    => '<span class="lb-pagination__btn lb-pagination__btn--next"><span>' . esc_html__('Next', 'mercury-child')  . '</span><i class="icon-arrow-right"></i></span>',
    )); ?>
  </div>
  <div class="lb-pagination__v lb-pagination__v--small">
    <?php the_posts_pagination(array(
      'end_size' => 1,
      'mid_size' => 0,
      'prev_text'    => '<span title="'.esc_html__('Previous', 'mercury-child').'" class="lb-pagination__btn lb-pagination__btn--prev"><i class="icon-arrow-left"></i></span>',
      'next_text'    => '<span title="'.esc_html__('Next', 'mercury-child').'" class="lb-pagination__btn lb-pagination__btn--next"><i class="icon-arrow-right"></i></span>',
    )); ?>
  </div>
</div>
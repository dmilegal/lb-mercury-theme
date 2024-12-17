<?php

$args = array(
	'posts_per_page' => 6,
	'category__in' => wp_get_post_categories($post->ID),
	'exclude' => $post->ID,
	'orderby' => 'rand'
);
$mercury_related = get_posts($args);
if ($mercury_related) { ?>

	<div class="space-news-3 box-100 read-more-block relative">
		<div class="space-news-3-ins space-page-wrapper relative">
			<div class="space-block-title relative">
				<span><?php esc_html_e('Related posts', 'mercury-child'); ?></span>
			</div>
			<div class="space-news-items related-carousel owl-carousel">
				<?php foreach ($mercury_related as $post) {
					setup_postdata($post); ?>

					<div class="space-news-3-item relative">
						<div class="space-news-3-item-ins case-15 relative">
							<div class="space-news-3-item-img relative">

								<?php
								$post_title_attr = the_title_attribute('echo=0');
								if (wp_get_attachment_image(get_post_thumbnail_id())) { ?>

									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<div class="space-news-3-item-img-ins">
											<?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'mercury-450-338', "", array("alt" => $post_title_attr)); ?>
											<?php if (has_post_format('video')) { ?>
												<div class="space-post-format absolute"><i class="fas fa-play"></i></div>
											<?php } ?>
											<?php if (has_post_format('image')) { ?>
												<div class="space-post-format absolute"><i class="fas fa-camera"></i></div>
											<?php } ?>
											<?php if (has_post_format('gallery')) { ?>
												<div class="space-post-format absolute"><i class="fas fa-camera"></i></div>
											<?php } ?>
										</div>
									</a>

								<?php } ?>

							</div>
							<div class="space-news-3-item-title-box relative">
								<div class="space-news-3-item-title relative">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>
								</div>
								<div class="space-news-3-item-meta relative">
									<div class="space-news-3-item-meta-left absolute">
										<?php if (!get_theme_mod('mercury_date_display')) { ?>
											<span><i class="far fa-clock"></i>
												<?php if (get_theme_mod('mercury_time_ago_format')) { 
													[$date, $time] = getPostDateTime();
													?>
													<?php printf(esc_html_x('%s ago', '%s = human-readable time difference', 'mercury-child'), human_time_diff($time, current_time('timestamp'))); ?>
												<?php } else {
													echo $date;
												} ?>
											</span>
										<?php } ?>
									</div>
									<div class="space-news-3-item-meta-right text-right absolute">

										<?php if (comments_open()) { ?>
											<span><i class="far fa-comment"></i> <?php comments_number('0', '1', '%'); ?></span>
										<?php } ?>

										<?php if (function_exists('spacethemes_set_post_views')) { ?>
											<span><i class="fas fa-eye"></i> <?php echo esc_html(spacethemes_get_post_views(get_the_ID())); ?></span>
										<?php } ?>

									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<?php wp_reset_postdata(); ?>

		</div>
	</div>
<?php } ?>
<script>
	jQuery(document).ready(function() {
		jQuery('.related-carousel').owlCarousel({
			items: 4,
			nav: true,
			lazyLoad: true
		});
	});
</script>
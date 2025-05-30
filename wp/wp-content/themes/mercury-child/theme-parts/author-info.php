<div class="space-page-content-meta box-100 relative">
	<div class="space-page-content-meta-avatar absolute">
		<?php echo get_avatar(get_the_author_meta('user_email'), 50); ?>
	</div>
	<div class="space-page-content-meta-ins relative">
		<div class="space-page-content-meta-author relative">
			<?php esc_html_e('by', 'mercury-child'); ?> <?php the_author_posts_link(); ?>
		</div>
		<div class="space-page-content-meta-data relative">
			<div class="space-page-content-meta-data-ins relative">

				<?php if (!get_theme_mod('mercury_date_display')) { ?>
					<span class="date"><i class="far fa-clock"></i>
						<?php if (get_theme_mod('mercury_time_ago_format')) {
							[$date, $time] = getPostDateTime();
						?>
							<?php printf(esc_html_x('%s ago', '%s = human-readable time difference', 'mercury-child'), human_time_diff($time, current_time('timestamp'))); ?>
						<?php } else {
							echo $date;
						} ?>
					</span>
				<?php } ?>

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
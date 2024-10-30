<?php get_header(); ?>
<div class="lb-layout lb-layout--post">
	<div class="lb-layout__breadcrumbs">
		<?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
	</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="lb-layout__content">
				<div class="lb-layout__inner">
					<? get_template_part('theme-parts/organisms/post-header/post-header', null); ?>

					<div class="prose-headings prose-content prose-spaces prose-colors">
						<? the_content() ?>
					</div>

					<!-- <div class="lb-layout__content-footer">
						<? //get_template_part('theme-parts/organisms/post-footer/post-footer', null); ?>
					</div> -->
				</div>
				<? if (is_active_sidebar('default_sidebar')) { ?>
					<div class="lb-layout__sidebar">
						<? get_template_part('theme-parts/organisms/sidebar/sidebar', null, [
							'sidebar_variant' => 'default',
							'widget_id' => 'post_sidebar'
						]); ?>
					</div>
				<? } ?>
			</div>
			<?
			$relatedPostIds = array_map(fn($p) => $p->ID, getRelatedPosts(get_the_ID(), 3));
			if ($relatedPostIds) {
			?>
				<div class="lb-layout__related-posts">
					<div>
						<h2 class="lb-layout__related-posts-title"><?= __('Related Posts', 'mercury-child'); ?></h2>
						<? get_template_part('theme-parts/organs/related-posts/related-posts', null, [
							'post_ids' => $relatedPostIds
						]) ?>
					</div>
				</div>
			<? } ?>
		<?php endwhile; ?>
	<?php endif; ?>


	<? get_template_part('theme-parts/organisms/before-footer-content/style-1'); ?>
</div>
<?php get_footer(); ?>
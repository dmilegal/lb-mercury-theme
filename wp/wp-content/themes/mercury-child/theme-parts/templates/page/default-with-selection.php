<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?
		function remove_blocks($content, $blockname)
		{
			$blockname = str_replace('/', '\/', preg_quote($blockname));
			$re = "/<!-- $blockname ([.|\s|\S]*?)-->(([.|\s|\S]*?)<!-- \/$blockname([.|\s|\S]*?)-->)?/m";

			preg_match($re, $content, $matches);
			
			return [apply_filters('the_content', preg_replace($re, '', $content)), apply_filters('the_content', $matches[0])];
		};

		[$content, $banner] = remove_blocks(get_the_content(), 'wp:lb/hero-banner');
		?>
		<div class="lb-layout lb-layout--with-sidebar">
			<? if (!is_front_page()) { ?>
				<div class="lb-layout__breadcrumbs">
					<?php get_template_part('/theme-parts/molecules/breadcrumbs'); ?>
				</div>
			<? } ?>
			<div class="lb-layout__banner">
				<?= $banner ?>
				<? /*get_template_part('theme-parts/cells/hero-banner', null, [
					'post_id' => get_the_id(),
					'enable_published_date' => false,
					'color' => 'white',
				]);*/ ?>
			</div>

			<div>
				<?
				$selectionGroup = get_field('casino_selection_group', get_the_id()) ?? null;

				if ($selectionGroup && $selectionGroup['casino_list'])
					get_template_part('theme-parts/organs/casino-list/casino-list', null, $selectionGroup);
				?>
			</div>

			<div class="lb-layout__content">
				<? if (is_active_sidebar('default_sidebar')) { ?>
					<div class="lb-layout__sidebar">
						<? get_template_part('theme-parts/organisms/sidebar/sidebar', null, [
							'sidebar_variant' => 'default'
						]); ?>
					</div>
				<? } ?>
				<div class="lb-layout__inner">
					<div class="prose-headings prose-content prose-spaces prose-colors">
						<?= $content ?>
						<?= do_shortcode('[show_wpb_author_info_box]'); ?>
					</div>
					<div class="lb-layout__content-taxs">
						<? get_template_part('theme-parts/molecules/tag-list', null, [
							'post_id' => get_the_ID()
						]); ?>
					</div>
					<div class="lb-layout__content-footer">
						<? get_template_part('theme-parts/organisms/post-footer/post-footer', null); ?>
					</div>
				</div>

			</div>

		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
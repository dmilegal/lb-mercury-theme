<?php get_header(); ?>

<!-- Title Box Start -->

<div class="space-title-box box-100 relative">
	<div class="space-title-box-ins space-index-page space-page-wrapper relative">
		<div class="space-title-box-h1 relative">
			<h1><?php esc_html_e( 'Blog', 'mercury-child' ); ?></h1>
		</div>
		
		<!-- Breadcrumbs Start -->
		<?php get_template_part( '/theme-parts/breadcrumbs' ); ?>
		<!-- Breadcrumbs End -->

		<!-- Showing prolog text field on a home blog page -->
		<? if(is_home() && get_field('prolog', get_option('page_for_posts'))): ?>
		<div class="blog-description">
			<? the_field('prolog',get_option('page_for_posts')); ?>	
		</div>
		<? endif;?>
	</div>
</div>

<!-- Title Box End -->

<!-- Archive Section Start -->

<div class="space-archive-section box-100 relative">
	<div class="space-archive-section-ins space-page-wrapper relative">
		<div class="space-content-section box-100 relative">

			<div class="space-archive-loop box-100 relative">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( '/theme-parts/archive/loop-blog-posts' ); ?>

				<?php endwhile; ?>

				<!-- Archive Navigation Start -->

				<?php
					the_posts_pagination( array(
						'end_size' => 2,
						'prev_text'    => esc_html__('&laquo;', 'mercury-child'),
						'next_text'    => esc_html__('&raquo;', 'mercury-child'),
					));
				?>

				<!-- Archive Navigation End -->

				<?php else : ?>

				<!-- Posts not found Start -->

				<div class="space-page-content-wrap relative">
					<div class="space-page-content page-template box-100 relative">
						<h2><?php esc_html_e( 'Posts not found', 'mercury-child' ); ?></h2>
						<p>
							<?php esc_html_e( 'No posts has been found.', 'mercury-child' ); ?>
						</p>
					</div>
				</div>

				<!-- Posts not found End -->

				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

<!-- Archive Section End -->

<?php get_footer(); ?>
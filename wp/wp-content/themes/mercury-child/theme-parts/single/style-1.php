<?php
$post_type = get_post_type();
$back_url = [
	'post' => 'blog',
	'news' => 'news' 
];

?>
<!-- Title Box Start -->

<div class="space-title-box box-100 relative">
	<div class="space-title-box-ins space-page-wrapper relative">
		<div class="space-title-box-h1 relative">
			<h1><?php the_title(); ?></h1>
			<?php if(has_excerpt()){ ?>
				<div class="space-page-content-excerpt box-100 relative">
					<?php the_excerpt(); ?>
				</div>
			<?php } ?>

			<!-- Breadcrumbs Start -->

			<?php get_template_part( '/theme-parts/breadcrumbs' ); ?>

			<!-- Breadcrumbs End -->
		
		</div>
	</div>
</div>

<!-- Title Box End -->

<!-- Page Section Start -->

<div class="space-page-section box-100 relative">
	<div class="space-page-section-ins space-page-wrapper relative">
		<div class="space-content-section box-100 relative">
			<div class="space-page-content-wrap relative">

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

				<!-- Author Info Start -->

				<?php
					if(!get_theme_mod('mercury_author_info_block')) {
						get_template_part('/theme-parts/author-info');
					}
				?>

				<!-- Author Info End -->

				<div class="space-page-content-box-wrap relative">
					<div class="space-page-content box-100 relative">
						<?php
							the_content();
							wp_link_pages( array(
								'before'      => '<div class="clear"></div><nav class="navigation pagination-post">' . esc_html__( 'Pages:', 'mercury-child' ),
								'after'       => '</nav>',
								'link_before' => '<span class="page-number">',
								'link_after'  => '</span>',
							) );
						?>
					</div>
					<a href="/<?php echo $back_url[$post_type]; ?>" class="go-back"><?php esc_html_e( 'Go back to ' . $back_url[$post_type], 'aces' ); ?></a>
				</div>

				<?php endwhile; ?>
				<?php endif; ?>

				<?php
					the_tags('<div class="space-page-content-tags box-100 relative"><span><i class="fa fa-tags" aria-hidden="true"></i> </span>', ', ', '</div>');
				?>
			</div>

			<?php if( get_theme_mod('mercury_related_posts') ) { ?>

			<!-- Read More Start -->
			<?php
				if ($post_type === 'post') {
					get_template_part( '/theme-parts/related-posts' );
				}
			?>
			<!-- Read More End -->

			<?php } ?>

			<?php if ( comments_open() || get_comments_number() ) :?>

			<!-- Comments Start -->
			<?php comments_template(); ?>

			<!-- Comments End -->

			<?php endif; ?>

		</div>
	</div>
</div>

<!-- Page Section End -->
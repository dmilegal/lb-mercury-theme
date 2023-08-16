<?php get_header(); ?>

<!--<script type="application/ld+json">
{
	"@context": "http://schema.org",
  	"@type": "Person",
  	"name": "<?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>",
  	"image": "<?php echo esc_url( get_avatar_url( get_the_author_meta('user_email'), ['size' => '200'] )); ?>",
  	"jobTitle": "<?php echo esc_html( get_field( 'job_title', 'user_'.get_the_author_meta('ID') ) ); ?>",
  	"description": "<?php echo esc_html( get_the_author_meta( 'description' ) ); ?>",
  	"alumniOf": {
    	"@type": "CollegeOrUniversity",
    	"name": "<?php echo esc_html( get_field( 'alumni_of', 'user_'.get_the_author_meta('ID') ) ); ?>"
  	},
  	"knowsAbout": [<?php echo get_field( 'knows_about', 'user_'.get_the_author_meta('ID') ); ?>],
  	"worksFor": {
    	"@type": "Organization",
    	"name": "Top Gambling Platforms Online - Best Ratings and Reviews"
  	}

}
</script>-->

<!-- Title Box Start -->

<div class="space-archive-title-box box-100 relative">
	<div class="space-archive-title-box-ins space-page-wrapper relative">
		<div class="space-archive-title-box-h1 relative">
			<div class="author-bio-section">
				<p class="author-name"><h1><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h1></p>
				<p class="author-image"><?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?></p>
				<?php
					$facebook = get_the_author_meta( 'facebook' );
					$twitter = get_the_author_meta( 'twitter' );
					$linkedin = get_the_author_meta( 'linkedin' );
					$instagram = get_the_author_meta( 'instagram' );
					
					echo '<p class="author-socials"><a href="'. $facebook .'" rel="nofollow" target="_blank" alt="Facebook"><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com/' . $twitter .'" rel="nofollow" target="_blank" alt="Twitter"><i class="fab fa-twitter"></i></a>
					<a href="'. $linkedin .'" rel="nofollow" target="_blank" alt="LinkedIn"><i class="fab fa-linkedin"></i></a>
					<a href="'. $instagram .'" rel="nofollow" target="_blank" alt="Instagram"><i class="fab fa-instagram"></i></a></p>';
				?>
				<?php if (get_the_author_meta('description')) { ?>
					<div class="space-page-content-excerpt box-100 relative">
						<p class="author-description">
							<?php echo esc_html( get_the_author_meta( 'description' ) ); ?>
						</p>
					</div>
				<?php } ?>
			</div>
			
			<!-- Breadcrumbs Start -->

			<?//php get_template_part( '/theme-parts/breadcrumbs' ); ?>

			<!-- Breadcrumbs End -->
		</div>
	</div>
</div>

<!-- Title Box End -->

<!-- Archive Section Start -->

<div class="space-archive-section box-100 relative">
	<div class="space-archive-section-ins space-page-wrapper relative">
		<!--<div class="space-content-section box-75 left relative">-->

			<div class="space-archive-loop box-100 relative">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( '/theme-parts/archive/loop-author-posts' ); ?>

				<?php endwhile; ?>

				<!-- Archive Navigation Start -->

				<?php
					the_posts_pagination( array(
						'end_size' => 2,
						'prev_text'    => esc_html__('&laquo;', 'mercury'),
						'next_text'    => esc_html__('&raquo;', 'mercury'),
					));
				?>

				<!-- Archive Navigation End -->

				<?php else : ?>

				<!-- Posts not found Start -->

				<div class="space-page-content-wrap relative">
					<div class="space-page-content page-template box-100 relative">
						<h2><?php esc_html_e( 'Posts not found', 'mercury' ); ?></h2>
						<p>
							<?php esc_html_e( 'No posts has been found. Please return to the homepage.', 'mercury' ); ?>
						</p>
					</div>
				</div>

				<!-- Posts not found End -->

				<?php endif; ?>

			</div>
		<!--</div>-->
		<!-- <div class="space-sidebar-section box-25 left relative">

			<?//php get_sidebar(); ?>

		</div> -->
	</div>
</div>

<!-- Archive Section End -->

<?php get_footer(); ?>
<?php get_header(); ?>

<!-- Title Box Start -->

<div class="space-title-box box-100 relative">
	<div class="space-title-box-ins space-index-page space-page-wrapper relative">
		<div class="space-title-box-h1 relative">
			<h1><?php esc_html_e( 'News', 'mercury' ); ?></h1>
		</div>

		<!-- Breadcrumbs Start -->
		<?php get_template_part( '/theme-parts/breadcrumbs' ); ?>
		<!-- Breadcrumbs End -->

		<div class="blog-description">
			<p>
				Dive Deep into the Pulse of iGaming with BSTCasinos News
			</p>
			<p>
				Welcome to BSTCasinos News - your one-stop destination for the latest, most groundbreaking updates in the world of online casinos and the iGaming industry. Our team of dedicated experts constantly combs the vast world of digital gambling to bring you the most relevant stories, keeping you well-informed and ahead of the curve.
			</p>
			<p>
				Why Choose BSTCasinos News?
			</p>
			<ul>
				<li>Up-to-the-Minute Updates: In an industry that evolves at the speed of light, stay updated with real-time news that impacts your gameplay, your business, and your returns.</li>
				<li>Expert Insights: Benefit from our seasoned team's commentary, understanding the 'why' and 'how' behind major industry shifts, game releases, and corporate shake-ups.</li>
				<li>Global Coverage: From the bustling digital lanes of Europe to the emerging markets in Asia, we've got the globe covered. If it's happening in the world of iGaming, it's happening here.</li>
				<li>Exclusive Interviews: Hear directly from the movers and shakers of the casino world. We bring you exclusive conversations with industry leaders, game developers, and trailblazers.</li>
				<li>Trustworthy & Reliable: As the leading affiliate in the iGaming sphere, our reputation stands on delivering accurate, impartial, and reliable information. With BSTCasinos News, you're not just reading stories; you're getting the truth.</li>
			</ul>
			<p>
				Join the ranks of iGaming enthusiasts, professionals, and players who trust BSTCasinos News as their primary source of information. Whether you're looking for the next big game launch, regulatory changes, or marketing trends, we've got your back. Dive deep, play smart, and stay informed with BSTCasinos News.
			</p>
		</div>

	</div>
</div>

<!-- Title Box End -->

<!-- Archive Section Start -->

<div class="space-archive-section box-100 relative">
	<div class="space-archive-section-ins space-page-wrapper relative">
		<div class="space-content-section box-100 left relative">

			<div class="space-archive-loop box-100 relative">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( '/theme-parts/archive/loop-news-posts' ); ?>

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
						<h2><?php esc_html_e( 'News not found', 'mercury' ); ?></h2>
						<p>
							<?php esc_html_e( 'No news has been found. Please return to the homepage.', 'mercury' ); ?>
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
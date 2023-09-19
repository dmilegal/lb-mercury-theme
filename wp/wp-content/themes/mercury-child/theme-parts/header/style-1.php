<div class="space-header-height relative <?php if( get_theme_mod('mercury_enable_top_bar') ) { ?> enable-top-bar<?php } ?>">
	<div class="space-header-wrap space-header-float relative">
		<?php if( get_theme_mod('mercury_enable_top_bar') ) { ?>
		<div class="space-header-top relative">
			<div class="space-header-top-ins space-wrapper relative">
				<div class="space-header-top-menu box-75 left relative">
					<?php
						if (has_nav_menu('top-menu')) {
							wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'space-top-menu', 'theme_location' => 'top-menu', 'depth' => 1, 'fallback_cb' => '__return_empty_string' ) );
						}
					?>
				</div>
				<div class="space-header-top-soc box-25 right text-right relative">
					<?php get_template_part( '/theme-parts/social-icons' ); ?>
				</div>
			</div>
		</div>
		<?php } ?>
		<div class="space-header relative">
			<div class="space-header-ins space-wrapper relative">
				<div class="space-header-logo box-25 left relative">
					<div class="space-header-logo-ins relative">
						<?php
							$site_name = esc_attr( get_bloginfo( 'name' ) );
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							
							if ( has_custom_logo() ) {
								echo '<a href="'. esc_url( home_url( '/' ) ) .'" title="'. $site_name .'">'. wp_get_attachment_image( $custom_logo_id, 'mercury-custom-logo', "", array( "alt" => $site_name ) ) .'</a>';
							} else {
								echo '<a href="'. esc_url( home_url( '/' ) ) .'" title="'. esc_attr( get_bloginfo( 'name' ) ) .'" class="text-logo">'. esc_html( get_bloginfo( 'name' ) ) .'</a><span>'. esc_html( get_bloginfo( 'description' ) ) .'</span>';
							}
						?>
					</div>
				</div>
				<div class="space-header-menu box-75 left relative">
					<?php
						if (has_nav_menu('main-menu')) {
							wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'main-menu', 'theme_location' => 'main-menu', 'depth' => 3, 'fallback_cb' => '__return_empty_string' ) );
						}
						
						global $wp;
						$curr_url = home_url( $wp->request ) . '/';
						$netw_html = '';
						#Page loaded under Chili subsite
						if(strpos($curr_url, '/cl/') !== false){
							$netw_html = '<li class="netw__level1">
								<span class="netw__actual">
									<i class="fi fi-cl"></i>Chili
									<i class="fas fa-caret-down fa-xs"></i>
								</span>
								<ul class="netw__sub">
									<li class="netw__level2">
										<a href="'.str_replace('/cl/','/',$curr_url).'">
											<i class="fi fi-es"></i>España
										</a>
									</li>
								</ul>
							</li>';
						}
						#Page loaded under Spain subsite
						else{
							$netw_trgt = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];
							$netw_html = '<li class="netw__level1">
								<span class="netw__actual">
									<i class="fi fi-es"></i>España
									<i class="fas fa-caret-down fa-xs"></i>
								</span>
								<ul class="netw__sub">
									<li class="netw__level2">
										<a href="'.$netw_trgt.'/cl'.$_SERVER['REQUEST_URI'].'">
											<i class="fi fi-cl"></i>Chili
										</a>
									</li>
								</ul>
							</li>';
						}

						// echo '<pre style="display: none;">';
						// echo $curr_url;
						// print_r($_SERVER);
						// echo '</pre>';

					?>
					<ul class="netw"><?= $netw_html ;?></ul>
					<div class="space-header-search absolute">
						<i class="fas fa-search desktop-search-button"></i>
					</div>
					<?php if( class_exists( 'Custom_Lang_Switcher' ) )
						echo do_shortcode('[custom-lang-switcher]'); ?>
					<div class="space-mobile-menu-icon absolute">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
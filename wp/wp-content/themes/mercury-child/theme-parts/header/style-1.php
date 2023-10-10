<?
$netww_html = (function(){
	global $wp;
	$curr_url = home_url( $wp->request ) . '/';
	
	switch_to_blog(1);
	$subsitez = get_field('ntw_webs_switcher','m5netw_opt1');
	restore_current_blog();
	
	$html = '<ul class="netw"><li class="netw__level1">';
	
	#subsite that is active now
	$current_subsite = $subsitez[0];
	
	foreach ($subsitez as $k=>$v) {
		if( $v['slug'] == '/' )
			continue;
		
		if(strpos($curr_url, $v['slug']) !== false){
			$current_subsite = $subsitez[$k];
			break;
		}
	}
	
	#actual country where page is loaded html
	$html.='<span class="netw__actual">
					<i class="fi" style="background-image: url('.get_stylesheet_directory_uri().'/img/flags/4x3/'.$current_subsite["flag"].');"></i>'.
						$current_subsite['title'].
					'<i class="fas fa-caret-down fa-xs"></i>
				</span><ul class="netw__sub">';
	
	# generating links for others subsites
	foreach ($subsitez as $k=>$v):
		if( $v['slug'] == $current_subsite['slug'] )
			continue;
		
		if( !$v['show_lang_sw'] )
			continue;
		
	
		if($current_subsite['slug'] == '/'){
			$html.='<li class="netw__level2">
											<a href="'.$v['url'] . $_SERVER['REQUEST_URI'].'">
												<i class="fi" style="background-image: url('.get_stylesheet_directory_uri().'/img/flags/4x3/'.$v["flag"].');"></i>'.$v["title"].'
											</a>
										</li>';
			continue;
		}
		
		$html.='<li class="netw__level2">
			<a href="'.str_replace($current_subsite['slug'], $v['slug'], $curr_url).'">
				<i class="fi" style="background-image: url('.get_stylesheet_directory_uri().'/img/flags/4x3/'.$v["flag"].');"></i>'.$v["title"].'
			</a>
		</li>';
	endforeach;
	
	$html.='</ul></li></ul>';
	
	return $html;
})();



?>

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
						

					echo $netww_html;
					?>
					
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
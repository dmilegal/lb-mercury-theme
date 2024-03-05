<?
/**
 * Register our sidebars and widgetized areas.
 *
 */
function universal_sidebar_init() {

	register_sidebar( array(
		'name'          => 'Universal sidebar',
		'id'            => 'universal_sidebar',
	) );

}
add_action( 'widgets_init', 'universal_sidebar_init' );
<?
/**
 * Register our sidebars and widgetized areas.
 *
 */
function default_sidebar_init() {

	register_sidebar( array(
		'name'          => 'Default sidebar',
		'id'            => 'default_sidebar',
	) );

}
add_action( 'widgets_init', 'default_sidebar_init' );
<?
/**
 * Register our sidebars and widgetized areas.
 *
 */
function secondary_sidebar_init() {

	register_sidebar( array(
		'name'          => 'Listing sidebar',
		'id'            => 'secondary_sidebar',
	) );

}
add_action( 'widgets_init', 'secondary_sidebar_init' );
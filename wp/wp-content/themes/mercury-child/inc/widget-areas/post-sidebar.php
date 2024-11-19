<?
/**
 * Register our sidebars and widgetized areas.
 *
 */
function post_sidebar_init() {

	register_sidebar( array(
		'name'          => 'Post sidebar',
		'id'            => 'post_sidebar',
	) );

}
add_action( 'widgets_init', 'post_sidebar_init' );
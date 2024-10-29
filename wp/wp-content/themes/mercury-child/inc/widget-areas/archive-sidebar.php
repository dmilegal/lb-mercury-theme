<?
/**
 * Register our sidebars and widgetized areas.
 *
 */
function archive_sidebar_init() {

	register_sidebar( array(
		'name'          => 'Archive sidebar',
		'id'            => 'archive_sidebar',
	) );

}
add_action( 'widgets_init', 'archive_sidebar_init' );
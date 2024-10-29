<?

function bonus_listing_sidebar_init() {

	register_sidebar( array(
		'name'          => 'Bonus Listing sidebar',
		'id'            => 'bonus_listing_sidebar',
	) );

}
add_action( 'widgets_init', 'bonus_listing_sidebar_init' );
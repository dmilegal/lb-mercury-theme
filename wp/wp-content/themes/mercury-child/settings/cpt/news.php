<?
add_action('init', function () {
	register_post_type('news', array(
		'labels' => array(
			'name' => __('News', 'mercury-child'),
			'singular_name' => __('news', 'mercury-child'),
			'menu_name' => 'News',
			'all_items' => 'All News',
			'edit_item' => 'Edit News',
			'view_item' => 'View News',
			'view_items' => 'View News',
			'add_new_item' => 'Add New News',
			'new_item' => 'New News',
			'parent_item_colon' => 'Parent News:',
			'search_items' => 'Search News',
			'not_found' => 'No news found',
			'not_found_in_trash' => 'No news found in the bin',
			'archives' => 'News Archives',
			'attributes' => 'News Attributes',
			'insert_into_item' => 'Insert into news',
			'uploaded_to_this_item' => 'Uploaded to this news',
			'filter_items_list' => 'Filter news list',
			'filter_by_date' => 'Filter news by date',
			'items_list_navigation' => 'News list navigation',
			'items_list' => 'News list',
			'item_published' => 'News published.',
			'item_published_privately' => 'News published privately.',
			'item_reverted_to_draft' => 'News reverted to draft.',
			'item_scheduled' => 'News scheduled.',
			'item_updated' => 'News updated.',
			'item_link' => 'News Link',
			'item_link_description' => 'A link to a news.',
		),
		'public' => true,
		'show_in_rest' => true,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-media-document',
		'supports' => array(
			0 => 'title',
			1 => 'author',
			2 => 'editor',
			3 => 'excerpt',
			4 => 'thumbnail',
			5 => 'custom-fields',
		),
		'taxonomies' => array(
			0 => 'post_tag',
			1 => 'category',
		),
		'has_archive' => 'news',
		'rewrite' => array(
			'feeds' => false,
		),
		'delete_with_user' => false,
	));
});


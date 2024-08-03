<?
add_action('init', function () {
  $labels = array(
    'name'                  => _x('Relinking Blocks', 'Post type general name', 'mercury-child'),
    'singular_name'         => _x('Relinking Block', 'Post type singular name', 'mercury-child'),
    'menu_name'             => _x('Relinking Blocks', 'Admin Menu text', 'mercury-child'),
    'name_admin_bar'        => _x('Relinking Block', 'Add New on Toolbar', 'mercury-child'),
    'add_new'               => __('Add New', 'relinking block', 'mercury-child'),
    'add_new_item'          => __('Add New Relinking Block', 'mercury-child'),
    'new_item'              => __('New Relinking Block', 'mercury-child'),
    'edit_item'             => __('Edit Relinking Block', 'mercury-child'),
    'view_item'             => __('View Relinking Block', 'mercury-child'),
    'all_items'             => __('All Relinking Blocks', 'mercury-child'),
    'search_items'          => __('Search Relinking Blocks', 'mercury-child'),
    'parent_item_colon'     => __('Parent Relinking Blocks:', 'mercury-child'),
    'not_found'             => __('No relinking blocks found.', 'mercury-child'),
    'not_found_in_trash'    => __('No relinking blocks found in Trash.', 'mercury-child'),
    'featured_image'        => _x('Relinking Block Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mercury-child'),
    'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mercury-child'),
    'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mercury-child'),
    'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mercury-child'),
    'archives'              => _x('Relinking Block archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mercury-child'),
    'insert_into_item'      => _x('Insert into relinking block', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mercury-child'),
    'uploaded_to_this_item' => _x('Uploaded to this relinking block', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mercury-child'),
    'filter_items_list'     => _x('Filter relinking blocks list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'mercury-child'),
    'items_list_navigation' => _x('Relinking blocks list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'mercury-child'),
    'items_list'            => _x('Relinking blocks list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'mercury-child'),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => false,
    'publicly_queryable' => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => false,
    'rewrite'            => false,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title'),
    'menu_icon'          => 'dashicons-admin-generic',
  );

  register_post_type('relinking_block', $args);
});


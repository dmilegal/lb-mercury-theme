<?php
add_action('acf/include_fields', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_toc_settings',
        'title' => 'TOC Settings',
        'fields' => array(
            array(
                'key' => 'field_toc_header_label',
                'label' => 'Header Label',
                'name' => 'header_label',
                'type' => 'text',
                'instructions' => 'Title for the table of contents',
                'required' => 0,
            ),
            array(
                'key' => 'field_toc_display_header_label',
                'label' => 'Display Header Label',
                'name' => 'display_header_label',
                'type' => 'true_false',
                'instructions' => 'Display the title for the table of contents',
                'required' => 0,
                'ui' => 1,
                'default_value' => 1, // Default to showing the header label
            ),
            array(
                'key' => 'field_toc_toggle_view',
                'label' => 'Enable Toggle View',
                'name' => 'toggle_view',
                'type' => 'true_false',
                'instructions' => 'Enable toggle for the table of contents',
                'required' => 0,
                'ui' => 1,
                'default_value' => 1, // Default to toggle enabled
            ),
            array(
                'key' => 'field_toc_initial_view',
                'label' => 'Initial View',
                'name' => 'initial_view',
                'type' => 'radio',
                'instructions' => 'Initially show or hide the table of contents',
                'required' => 0,
                'choices' => array(
                    'show' => 'Show',
                    'hide' => 'Hide',
                ),
                'layout' => 'horizontal',
                'default_value' => 'show',
            ),
            // array(
            //     'key' => 'field_toc_display_counter',
            //     'label' => 'Display Counter',
            //     'name' => 'display_counter',
            //     'type' => 'true_false',
            //     'instructions' => 'Display the counter for the table of contents',
            //     'required' => 0,
            //     'ui' => 1,
            //     'default_value' => 1, // Default to showing the counter
            // ),
            // array(
            //     'key' => 'field_toc_post_types',
            //     'label' => 'Post Types',
            //     'name' => 'post_types',
            //     'type' => 'select',
            //     'instructions' => 'Select post types to include',
            //     'required' => 0,
            //     'choices' => array(
            //         'post' => 'Post',
            //         'page' => 'Page',
            //         // Add other custom post types if needed
            //     ),
            //     'multiple' => 1,
            //     'ui' => 1,
            //     'default_value' => array('post', 'page'),
            // ),
            // array(
            //     'key' => 'field_toc_post_in',
            //     'label' => 'Include Posts/Pages',
            //     'name' => 'post_in',
            //     'type' => 'text',
            //     'instructions' => 'IDs of the posts/pages to include, separated by commas',
            //     'required' => 0,
            // ),
            array(
                'key' => 'field_toc_device_target',
                'label' => 'Device Target',
                'name' => 'device_target',
                'type' => 'radio',
                'instructions' => 'Select devices to display the table of contents on',
                'required' => 0,
                'choices' => array(
                    'desktop' => 'Desktop',
                    'mobile' => 'Mobile',
                    'both' => 'Both',
                ),
                'layout' => 'horizontal',
                'default_value' => 'both',
            ),
            // array(
            //     'key' => 'field_toc_view_more',
            //     'label' => 'View More Limit',
            //     'name' => 'view_more',
            //     'type' => 'number',
            //     'instructions' => 'Number of headings loaded initially before user interaction',
            //     'required' => 0,
            //     'default_value' => 5,
            //     'min' => 1,
            // ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'lb/toc', // Adjust this to match your block's name
                ),
            ),
        ),
    ));
});

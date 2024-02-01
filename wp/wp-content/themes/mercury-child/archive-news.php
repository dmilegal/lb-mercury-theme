<?php 
get_template_part('theme-parts/templates/archive/default', null, [
	'banner_title' => __( 'News', 'mercury-child' ),
	'banner_text_content' => get_field('news_arhieve_prolog', 'option')
]);

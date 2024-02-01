<?php get_header(); ?>

<? 

if (is_archive() || (!is_front_page() && is_home())) {
	get_template_part('theme-parts/templates/archive/default');
} else {
	get_template_part('theme-parts/templates/post/default-with-sidebar');
} ?>

<?php get_footer(); ?>
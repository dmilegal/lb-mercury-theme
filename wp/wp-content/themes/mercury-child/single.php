<?php get_header(); ?>

<?
get_template_part('theme-parts/molecules/hero-banner', null, [
	'title' => get_the_title(),
	'subtitle' => 'Lucy Bond is an interior designer who started her career in New Zealand, working for large architectural firms. We chatted to her about design and starting her own studio.',
	'published_date' => get_the_date(),
]);
?>
<div class="content-container prose-headings prose-content prose-spaces prose-colors">
  <? the_content() ?>
</div>

<?php get_footer(); ?>
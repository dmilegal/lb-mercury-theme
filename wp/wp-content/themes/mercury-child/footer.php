<!-- Footer Start -->

</div>
<?php
get_template_part('theme-parts/atoms/button', null, [
	'size' => 'sm',
	'prefix' => '<i class="icon-circle"></i>',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/atoms/button', null, [
	'size' => 'md',
	'variant' => 'contained-light',
	'content' => 'Button CTA',
	'prefix' => '<i class="icon-circle"></i>'
]);
get_template_part('theme-parts/atoms/button', null, [
	'size' => 'lg',
	'variant' => 'outlined',
	'prefix' => '<i class="icon-circle"></i>',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/atoms/button', null, [
	'size' => 'xl',
	'variant' => 'text',
	'prefix' => '<i class="icon-circle"></i>',
	'href' => '#',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/atoms/button', null, [
	'size' => '2xl',
	'variant' => 'inline',
	'prefix' => '<i class="icon-circle"></i>',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/atoms/button', null, [
	'size' => '2xl',
	'prefix' => '<i class="icon-circle"></i>',
	'content' => 'Button CTA'
]);
get_template_part('theme-parts/atoms/button', null, [
	'size' => '2xl',
	'prefix' => '<i class="icon-circle"></i>',
]);

////////////////////////////////////////////////////////////
echo '<br>';

get_template_part('theme-parts/atoms/badge', null, [
	'size' => 'sm',
	'content' => 'Label',
	'prefix' => '<i class="icon-arrow-up"></i>'
]);
get_template_part('theme-parts/atoms/badge', null, [
	'size' => 'md',
	'postfix' => '<i class="icon-arrow-up"></i>',
	'content' => 'Label'
]);
get_template_part('theme-parts/atoms/badge', null, [
	'size' => 'lg',
	'prefix' => '<img />',
	'content' => 'Label',
	'href' => '#',
]);
get_template_part('theme-parts/atoms/badge', null, [
	'size' => 'sm',
	'prefix' => '<i class="icon-plus"></i>',
]);
get_template_part('theme-parts/atoms/badge', null, [
	'size' => 'md',
	'prefix' => '<i class="icon-plus"></i>',
]);
get_template_part('theme-parts/atoms/badge', null, [
	'size' => 'lg',
	'prefix' => '<img src="https://espaciomood.com/wp-content/uploads/2023/08/45913d94-bf70-4a78-a833-a41aafda597f-100x100.jpeg?x77770" />',
]);
////////////////////////////////////////////////////////////
echo '<br>';
get_template_part('theme-parts/molecules/badge-group', null, [
	'size' => 'md',
	'prefix' => '<i class="icon-plus"></i>',
	'postfix' => '<i class="icon-plus"></i>',
	'theme' => 'light',
	'color' => 'gray',
	'label' => [
		'position' => 'left',
		'content' => 'test'
	]
]);

////

get_template_part('theme-parts/organisms/footer/style-1');
?>

<!-- Footer End -->

</div>

<!-- Back to Top Start -->

<div class="space-to-top pp">
	<a href="#" id="scrolltop" title="<?php esc_attr_e('Back to Top', 'mercury-child'); ?>"><i class="far fa-arrow-alt-circle-up"></i></a>
</div>

<!-- Back to Top End -->

<?php wp_footer(); ?>

</body>

</html>
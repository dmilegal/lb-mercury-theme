<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0, user-scalable=yes" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body data-attr="mree" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="lb-main">

		<!-- Header Start -->
		<? get_template_part('/theme-parts/organisms/header/style-1'); ?>
		<div class="lb-main__content">
		<!-- Header End -->
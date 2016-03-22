<!doctype html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php wp_title(); ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->

		<script src="https://use.typekit.net/ifl2ree.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<script src="<?php bloginfo('template_url'); ?>/js/modernizr-2.8.3.min.js"></script>

		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

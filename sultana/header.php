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


	<a id="mMenuButton">
		<div class="icon"></div>
		<div class="notificationsIcon">4</div>
	</a>


	<a id="addNewPost">
		<div class="icon"></div>
	</a>

	<div class="drawer">
		<div class="menu">
			<nav>
				<a href="http://cronologia.mx/indice/" class="ajaxMenu"><span class="notificationsIcon">4</span>Indice</a>
				<a href="http://cronologia.mx/quien-esta-detras/" class="ajaxMenu">¿Quién está detrás?</a>
				<a href="#" class="ajaxMenu">¿Por qué es importante?</a>
				<a href="#" class="ajaxMenu">Quiero participar</a>
				<a href="#" class="ajaxMenu">Contacto</a>
			</nav>

			<pre id="indiceManual">
m. 	Marcas / Proyectos
p. 	Extractos de periódico
– 	Contexto
	<strong class="new">Entrada reciente</strong>
			</pre>
		</div>

		<div class="contentContainer">
				<pre>
Not your content
				</pre>
		</div>
	</div>

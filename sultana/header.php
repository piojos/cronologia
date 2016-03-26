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
		<div class="contain">
			<div class="slim left">
				<nav>
					<a href="#"><span class="notificationsIcon">4</span>Indice</a>
					<a href="#">¿Quién está detrás?</a>
					<a href="#">¿Por qué es importante?</a>
					<a href="#">Quiero participar</a>
					<a href="#">Contacto</a>
				</nav>

				<pre id="indiceManual">
m. 	Marcas / Proyectos
p. 	Extractos de periódico
– 	Contexto
	<strong class="new">Entrada reciente</strong>
				</pre>
			</div>
			<div class="wide right">
				<pre>
Indice

I. 	<a href="#">Prólogo</a>
II. 	<a href="#">Personajes</a>

1. 	<a href="#">Epígonos</a>
	<a href="#">1920</a>   <em>m.</em> 	<a href="#">Desiderio Lagrange</a> / <a href="#">Fotograbadores Unidos</a> /
			<a href="#">Ferrocarriles del norte</a>
	<a href="#">1922</a>   <em>m.</em>	<a href="#">IMSS</a> / <a href="#"><strong class="new">Coca Cola</strong></a>  / <a href="#">IG Flores</a>
		   – 	<a href="#">El comienzo del diseño <em>por Oscar Estrada</em></a>
	<a href="#">1929</a>   <em>m.</em>	<a href="#"><strong class="new">Vitro</strong></a> / <a href="#">Jambé</a>
	<a href="#">1932</a>   <em>m.</em>	<a href="#">El Tío restaurant</a> / <a href="#">Alaska</a>
	<a href="#">1920</a>   <em>m.</em>	<a href="#">Coca Cola</a> / <a href="#">Fotograbadores Unidos</a> / <a href="#">Ferrocarriles
			del norte</a>
		   – 	<a href="#"><strong class="new">Las colecciones de mi padre por Sonia de Osio</strong></a>
		   – 	<a href="#">El sueño americano en el Noreste por Oscar Estrada</a>

2. 	<a href="#">Divergentes</a>
	<a href="#">1920</a>   <em>m.</em> 	<a href="#">Coca Cola</a> / <a href="#">OXXO</a> /
		   <em>p.</em> 	<a href="#">Las nuevas estaciones <em>fte. El Porvenir</em></a>
		   – 	<a href="#">El comienzo del diseño <em>por Oscar Estrada</em></a>
				</pre>
			</div>
		</div>
	</div>

<?php

	/*
	 * Template Name: Inicio
	 */

	get_header();


	while ( have_posts() ) : the_post();
	// Get posts for Timeline

	$posts = get_posts(array(
		'posts_per_page'	=> -1,
		'meta_key'			=> 'year',
		'orderby'			=> 'meta_value_num',
		'order'				=> 'ASC'
	));










	/*  INTRO  */

	$introAbout = get_field('intro_about');

	?>
	<section id="mainTitle">

		<div id="Francesca" class="detailLine top"></div>

		<div class="contain">
			<div class="slim left">
				<h1 class="logo">
					Cronología
					<span>del</span>
					diseño gráfico
					<span>en</span>
					Monterrey
				</h1>
			</div><?php

		if($introAbout) { ?>
			<div id="timelineAbout" class="slim left">
				<?php echo $introAbout; ?>
			</div><?php
		} ?>

		</div>

	</section><?php








	/*  PROLOGUE  */

	$prologueToggle = get_field('has_prologue');
	$prologueQuery = new WP_Query( 'post_type=page&pagename=prologo' );

	if($prologueToggle) :
		while ( $prologueQuery->have_posts() ) :
			$prologueQuery->the_post(); ?>
		<section id="prologue">

			<div class="detailLine"></div>

			<div class="contain">
				<div class="smallLogo">
					O I O
				</div><?php

				$ftdCaption = get_post(get_post_thumbnail_id())->post_excerpt;
				echo '<div class="slim left sofia">'.$ftdCaption.'</div>'; ?>

				<div class="wide right sofia" style="margin-bottom:6em"><?php
					if($rTitle) {
						echo $rTitle;
					} else {
						the_title();
					} ?>
				</div>

				<article><?php

					get_template_part('inc/block-content'); ?>

				</article>
			</div>

		</section><?php
		endwhile;
		wp_reset_postdata();
	endif;

endwhile; // PAGE: Inicio Loop ?>











<div id="timeline"><?php
		if( $posts ):

			foreach( $posts as $post ):
				setup_postdata( $post );

			$annoNuevo = get_field('year');

				if($anno == '') { // Post más reciente.
					if (in_category('2')) { // Es Artículo
						echo '<section class="year latest"><div class="number">Artículo</div><ul class="projects">';
					} else { // Es Post
						echo '<section class="year latest"><div class="number">Nuevo</div><ul class="projects">';
					}
					// echo '<section class="year latest"><div class="number">Latest</div><ul class="projects">';
				} elseif($annoNuevo == $anno) {} else { ?>
					</section>
					<section class="year">
						<div class="period"><span><?php echo $annoNuevo; ?></span></div>
						<hr>
						<div class="contentContainer">
						<ul class="articles"><?php
				}

				$cat = get_the_category(); ?>


				<li<?php if (in_category('2')) echo ' class="article"'; ?>>
					<a href="<?php the_permalink(); ?>" class="sofia"><?php

					// echo $annoNuevo.': ';
					// Tester
					// if($anno == '') {
					// 	echo '<span>Nuevo</span>';
					// } elseif($annoNuevo == $anno) {
					// 	echo '<span>Mismo</span>';
					// } else {
					// 	echo '<span>Otro</span>';
					// }

					the_title(); ?></a>
				</li><?php


			$anno = get_field('year');

				if($anno == '') {
					echo '</ul></section>';
				} elseif($annoNuevo == $anno) {} else {
					echo '</ul></section>';
				}

			endforeach;
			wp_reset_postdata();

		endif; ?>

</div><?php // END #timeline

	get_footer(); ?>

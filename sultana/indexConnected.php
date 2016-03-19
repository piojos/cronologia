<?php

	/*
	 *	Index
	 */

	get_header(); /*
	if(have_posts()) :
	echo '<ul>';
		while(have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><strong class="sofia"><?php the_field('year'); ?></strong> <?php the_title(); ?></a></li><?php
		endwhile;
	echo '</ul>';
endif; */

// get posts
$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'meta_key'			=> 'year',
	'orderby'			=> 'meta_value_num',
	'order'				=> 'ASC'
));

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
			} elseif($annoNuevo == $anno) {} else {
				echo '</section><section class="year"><div class="number">'.$annoNuevo.'</div><ul class="projects">';
			}

			$cat = get_the_category(); ?>


			<li<?php if (in_category('2')) echo ' class="article"'; ?>>
				<a href="<?php the_permalink(); ?>" class="sofia"><?php

				echo $annoNuevo.': ';
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

	endif;

	get_footer(); ?>

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
	'order'				=> 'DESC'
));

	if( $posts ):

		foreach( $posts as $post ):

			setup_postdata( $post );

			$annoNuevo = get_field('year');
			// echo $annoNuevo;

			if($anno == '') {
				echo '<section class="year latest"><div class="number">Latest</div><ul class="projects">';
			} elseif($annoNuevo == $anno) {
				// echo 'Son del mismo año ('.$anno.' :: '.$annoNuevo.').';
			} else {
				echo '</section><section class="year"><div class="number">'.$annoNuevo.'</div><ul class="projects">';
			} ?>
			<li>
				<a href="<?php the_permalink(); ?>"><strong class="sofia"><?php the_field('year'); ?> 🐞 <?php
				if($anno == '') {
					echo 'Post más reciente ('.$anno.' :: '.$annoNuevo.'):';
				} elseif($annoNuevo == $anno) {
					echo 'Son del mismo año ('.$anno.' :: '.$annoNuevo.').';
				} else {
					echo 'Son de otro año ('.$anno.' :: '.$annoNuevo.').';
				}
				$anno = get_field('year'); ?> </strong> <?php the_title(); ?></a>
			</li><?php

			if($anno == '') {
				echo '</ul></section>';
			} elseif($annoNuevo == $anno) {
				// echo 'Son del mismo año ('.$anno.' :: '.$annoNuevo.').';
			} else {
				echo '</ul></section>';
			}

		endforeach;
		wp_reset_postdata();

	endif;

	get_footer(); ?>

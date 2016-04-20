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

	endwhile; ?>



























<div id="timeline"><?php
	if( $posts ):
		foreach( $posts as $post ):
			setup_postdata( $post );

			$annoNuevo = get_field('year');


// NEW YEAR
			if($annoNuevo == $anno) {} else {


				if($anno != '') {
					if($isChapter) {
					$isChapter = FALSE; ?>
		</div><?php
					} else { ?>
			</ul>
		</div><?php
					} ?>

	</section><?php
				}


				if(in_category('7')) { ?>

	<section id="newChapter">
		<div class="period range">
			<span><?php echo $annoNuevo ?><br>-<br>N/A</span>
			<button class="close">×</button>
		</div>
		<hr>
		<div class="title"><?php

				} else { ?>

	<section class="year">
		<div class="period">
			<span><?php echo $annoNuevo ?></span>
		</div>
		<hr>
		<div class="contentContainer">
			<ul class="articles"></ul>
			<ul class="projects"><?php
				}



			} // END if new year



// Actual LOOP
			if(in_category('7')) { ?>

			<div class="contain <?php if($annoNuevo == $anno) echo 'trappedChapter'; ?>">
				<div class="wide left sofia">
					<h2><?php the_title(); ?></h2>
					<p class="author">Por Oscar Estrada</p>
				</div>
				<div class="slim right sofia">
					<p>Poco antes de 1900 a 1950.</p>
				</div>

				<article class="show">
					<div class="wide left">
						<p>Steven Heller es uno de los mejores escritores dedicados al diseño gráfico que conozco, su aportación al conocimiento general que rodea la gráfica global es incomparable y punto de referencia para millones de diseñadores, incluyéndome.</p>

						<p>Todos los días envía un newsletter de parte de su sección especial de Print Magazine que se llama <a href="http://www.printmag.com/daily-heller/" target="_blank">‘The Daily Heller’</a> de la cual se tienen que inscribir en este momento si les interesa saber más sobre las raíces históricas del diseño gráfico mundial.</p>

						<p>Steven Heller es uno de los mejores escritores dedicados al diseño gráfico que conozco, su aportación al conocimiento general que rodea la gráfica global es incomparable y punto de referencia para millones de diseñadores, incluyéndome.</p>
					</div>
					<div class="slim right">
						<a herf="http://cronologia.mx/wp-content/uploads/2015/11/Screen-Shot-2015-06-05-at-10.20.43.png" target="_blank">
							<img src="http://cronologia.mx/wp-content/uploads/2015/11/Screen-Shot-2015-06-05-at-10.20.43-300x169.png" alt="pulpo rosa en fondo azul">
						</a>
						<p class="caption">Se me hace importante destacar que nada hacia el noroeste.</p>

					</div>
				</article>
			</div>
<?php
				if($annoNuevo == $anno) {
				}
				$isChapter = TRUE;
			} elseif(($annoNuevo != $anno) OR ($annoNuevo == $anno)) { ?>

				<li<?php if (in_category('2')) echo ' class="article"'; ?>>
					<a href="<?php the_permalink(); ?>" class="sofia"><?php
						if(in_category('7')) {
							echo '🍕: ';
						}
						the_title();
						if (in_category('2')) {
							echo ' <em class="kepler">por '.get_the_author().'</em>';
						} ?></a>
				</li>
<?php
			}


			$anno = get_field('year');

		endforeach;
		wp_reset_postdata();

	endif; ?>
			</ul>
		</div>
	</section>
</div>

<?php // END #timeline

	get_footer(); ?>

<?php

	/*
	 * Template Name: Inicio
	 */

	get_header();


	// Get posts for Timeline
	$postsLoop = get_posts(array(
		'posts_per_page'	=> -1,
		'meta_key'			=> 'year',
		'orderby'			=> 'meta_value_num',
		'order'				=> 'ASC',
		'cat'				=> '-7'
	));

	$chaptersLoop = get_posts(array(
		'posts_per_page'	=> -1,
		'meta_key'			=> 'year',
		'orderby'			=> 'meta_value_num',
		'order'				=> 'ASC',
		'cat'				=> '7'
	));


	while ( have_posts() ) : the_post();









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


/*

<section id="latestPost">
	<div class="newPostLine"><span>Nuevo</span></div>

	<div class="contain">
		<a href="http://cronologia.mx/los-pioneros/" class="sofia project">
			<h3>Los Pioneros</h3>
			<p class="kepler">1900 por <span>Autor Apellido</span></p>
		</a>
	</div>
</section>

*/




	if( $chaptersLoop ):
		foreach( $chaptersLoop as $post ):
			setup_postdata( $post ); ?>
	<section class="newChapter">
		<div class="period range">
			<span><?php the_field('year'); ?><br>-<br>N/A</span>
			<button class="close">×</button>
		</div>
		<hr>
		<div class="title">
			<div class="contain">
				<div class="wide left sophia">
					<h2><?php the_title(); ?></h2>
					<p class="author">Por <?php the_author(); ?></p>
				</div>
				<div class="slim right sophia">
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
		</div>
	</section>
		<?php
		endforeach;
		wp_reset_postdata();
	endif;








	/*
	 *	Posts Loop
	 */

	if( $postsLoop ):
		foreach( $postsLoop as $post ):
			setup_postdata( $post );

			$annoNuevo = get_field('year');


// NEW YEAR
			if($annoNuevo == $anno) {} else {


				if($anno != '') { ?>
			</ul>
		</div>
	</section><?php
				} ?>

	<section class="year" id="<?php echo $annoNuevo ?>">
		<div class="period">
			<span><?php echo $annoNuevo ?></span>
		</div>
		<hr>
		<div class="contentContainer">
			<ul class="articles"></ul>
			<ul class="projects"><?php


			} // END if new year


			// Actual LOOP
			if(($annoNuevo != $anno) OR ($annoNuevo == $anno)) { ?>

				<li<?php if (in_category('2')) echo ' class="article"'; ?>>
					<a href="<?php the_permalink(); ?>" class="sophia"><?php
						the_title();
						if (in_category('2')) {
							echo ' <em class="kepler">por '.get_the_author().'</em>';
						} ?></a>
						<?php
/*

						<a href="../#comments" class="comments">1</a>
						<a href="../#comments" class="no comments"></a>

*/
						?>
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

</div>	<!-- END #timeline -->

<?php

	get_footer(); ?>

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
				$prologueQuery->the_post();
				$rTitle = get_field('real_title'); ?>
			<section id="prologue">

				<div class="detailLine"></div>

				<div class="contain">
					<div class="smallLogo">
						O I O
					</div>
					<div class="slim left sophia"><?php the_field('kicker') ?></div>
					<div class="wide right sophia" style="margin-bottom:6em"><?php
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










<div id="timeline">
<section id="latestPost">
	<div class="newPostLine"><span>Nuevo</span></div>

	<div class="contain">
		<a href="http://cronologia.mx/los-pioneros/" class="sophia project">
			<h3>Los Pioneros</h3>
			<p class="kepler">1900 por <span>Autor Apellido</span></p>
		</a>
	</div>
</section><?php


/*


*/




	if( $chaptersLoop ):
		foreach( $chaptersLoop as $post ):
			setup_postdata( $post ); ?>
	<section class="newChapter" id="ch<?php the_field('year'); ?>">
		<div class="period range">
			<span><?php the_field('year'); ?><br>-<br>N/A</span>
			<button class="close">×</button>
		</div>
		<hr>
		<div class="title">
			<div class="contain">
				<div class="wide left sophia">
					<h2><?php the_title(); ?></h2>
					<p class="author">Por <?php
					$creator = get_field('creator');
					if($creator){ echo $creator; }
					else { the_author(); } ?></p>
				</div>
				<div class="slim right sophia">
					<p><?php the_field('kicker'); ?></p>
				</div>

				<article class="show">
					<?php get_template_part('inc/block', 'content'); ?>
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
							echo ' <em class="kepler">por ';
							$creator = get_field('creator');
							if($creator){ echo $creator; }
							else { the_author(); }
							echo '</em>';
						} ?></a>
						<?php

						if(!(in_category('2'))) { ?>
						<a href="<?php the_permalink(); ?>#comentarios" class="<?php if(get_comments_number('0','%','%') == 0) echo 'no '; ?>comments"><?php comments_number('','%','%'); ?></a><?php
						} ?>
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

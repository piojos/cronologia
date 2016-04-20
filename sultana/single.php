<?php

/*
 *	Single Template
 */

	get_header();

	if( have_posts() ) while( have_posts() ) : the_post();

	$creator = get_field('creator');
	$month = get_field('month');
	$year = get_field('year');
	$related = get_field('related'); ?>

<div class="contain">
	<header>
		<a href="<?php echo esc_url(home_url('/')); ?>"><small>Cronología del diseño gráfico en Monterrey</small></a>
	</header>


	<article>
		<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>


		<div class="title"><?php

			$ftdCaption = get_post(get_post_thumbnail_id())->post_excerpt;
			echo '<div class="left caption slim"><p>'.$ftdCaption.'</p></div>'; ?>

			<div class="right wide">
				<h1><?php the_title(); ?></h1>
				<?php if($creator) echo '<p class="studio sophia">'.$creator.'</p>'; ?>
				<p class="author">Contenido por <?php the_author_posts_link(); ?> el <?php the_time('l j \d\e F \d\e Y'); ?>.</p>
			</div>

		</div>


		<div class="content"><?php

			if($month OR $year) echo '<div class="left project_date sophia slim"><p>';
			if($month) echo $month;
			if($year) echo ' <strong>'.$year.'</strong>';
			if($month OR $year) echo '</p></div>';


			get_template_part('inc/block-content');


			$images = get_field('post_gallery');
			$i = 1; ?>
				<div class="left gallery slim"><?php
			if($images) : ?>
					<a herf="#"><?php

					foreach( $images as $image ):
						?><img src="<?php echo $image['sizes']['thumbnail']; ?>" /><?php
						if($i++ == 3) break;
					endforeach; ?>
						<p class="button">Ver todas las imagenes.</p>

					</a><?php
			endif; ?>
				</div><?php


			$biblio = get_field('biblio');
			if($biblio) : ?>
				<div class="right biblio wide">
					<h3>Bibliografía</h3>
					<div class="caption">
						<?php echo $biblio; ?>
					</div>
				</div><?php
			endif; ?>

		</div><?php

		comments_template(); ?>

	</article>

	<footer>
		<small class="copy">&copy; <?php the_time('Y'); ?>. Todo el contenido del sitio pertenece a quién se identifica como <em>el autor</em> y/o <em>el editor</em>.</small>
	</footer>
</div>


<?php

	endwhile;
	get_footer(); ?>

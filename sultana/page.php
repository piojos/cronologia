<?php

/*
 *	Page Template
 */

	get_header();

	if( have_posts() ) while( have_posts() ) : the_post(); ?>

<div class="contain">
	<header>
		<a href="<?php echo esc_url(home_url('/')); ?>"><small>Cronología del diseño gráfico en Monterrey</small></a>
	</header>


	<article>
		<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>

		<div class="title">

			<div class="right">
				<h1><?php the_title(); ?></h1>
			</div>

		</div>


		<div class="content"><?php

		if(is_page('contacto') || is_page('agregar')) : ?>

				<div class="form">
					<?php the_content(); ?>
				</div><?php

		else : ?>

			<div class="twoColumns">
				<?php the_content(); ?>
			</div><?php

		endif; ?>

		</div>

	</article>


	<footer>
		<small class="copy">&copy; <?php the_time('Y'); ?>. Todo el contenido del sitio pertenece a quién se identifica como <em>el autor</em> y/o <em>el editor</em>.</small>
	</footer>
</div>


<?php

	endwhile;
	get_footer(); ?>

<?php

	/*
	 * Template Name: Estilo Entrada
	 */

	get_header();

	while( have_posts() ) : the_post();

	$kicker = get_field('kicker');
	$rTitle = get_field('real_title'); ?>

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
				<h1><?php
				if($rTitle) {
					echo $rTitle;
				} else {
					the_title();
				} ?></h1>
			</div>

		</div>


		<div class="content"><?php

			if($kicker) echo '<div class="left project_date sofia slim"><p>'.$kicker.'</p></div>';

			get_template_part('inc/block-content'); ?>

		</div>

	</article>

	<footer>
		<small class="copy">&copy; <?php the_time('Y'); ?>. Todo el contenido del sitio pertenece a quién se identifica como <em>el autor</em> y/o <em>el editor</em>.</small>
	</footer>
</div>


<?php

	endwhile;
	get_footer(); ?>

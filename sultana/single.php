<?php

/*
 *	Single Template
 */

	get_header();

	$creator = get_field('creator');
	$month = get_field('month');
	$year = get_field('year');
	$related = get_field('related');

	if( have_posts() ) while( have_posts() ) : the_post(); ?>

<div class="contain">
	<article>
		<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>


		<div class="title"><?php

			$ftdCaption = get_post(get_post_thumbnail_id())->post_excerpt;
			echo '<div class="left caption"><p>'.$ftdCaption.'</p></div>'; ?>

			<div class="right">
				<h1><?php the_title(); ?></h1>
				<?php if($creator) echo '<p class="studio sofia">'.$creator.'</p>'; ?>
				<p class="author">Contenido por <?php the_author_posts_link(); ?> el <?php the_time('l j \d\e F \d\e Y'); ?>.</p>
			</div>

		</div>


		<div class="content"><?php

			if($month OR $year) echo '<div class="left project_date sofia"><p>';
			if($month) echo $month;
			if($year) echo ' <strong>'.$year.'</strong>';
			if($month OR $year) echo '</p></div>';


			while (have_rows('content_blocks')) {
				the_row();

				$images = get_sub_field('images');
				if($images) : ?>
					<div class="left image"><?php

						foreach( $images as $image ): ?>
						<a herf="<?php echo $image['url']; ?>" target="_blank">
							<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
						</a>
							<?php if($image['caption']) echo '<p class="caption">'.$image['caption'].'</p>'; ?>
						<?php
						endforeach; ?>

					</div><?php
				endif; ?>


				<div class="right">
					<?php the_sub_field('content'); ?>
				</div><?php
			}


			$images = get_sub_field('gallery');
			if($images) : ?>
				<div class="left gallery">
					<a herf="#"><?php

					foreach( $images as $image ):
						?><img src="<?php echo $image['sizes']['thumbnail']; ?>" /><?php
					endforeach; ?>
						<p class="button">Ver todas las imagenes.</p>

					</a>
				</div><?php
			endif; ?>

		</div><?php

		comments_template(); ?>

	</article>

</div>


<?php

	endwhile;
	get_footer(); ?>

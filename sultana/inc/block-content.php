<?php

while (have_rows('content_blocks')) {
	the_row();

	$images = get_sub_field('images'); ?>
	<div class="left <?php if($images) echo 'image '; ?>slim"><?php
		if($images) : ?>

			<ul><?php
			foreach( $images as $image ): ?>
				<li>
					<a herf="<?php echo $image['url']; ?>" target="_blank" <?php if(!$image['caption']) echo ' class="no_caption"'; ?>>
						<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
					</a>
					<?php if($image['caption']) echo '
					<p class="caption">'.$image['caption'].'</p>'; ?>
				</li>
			<?php
			endforeach; ?>
		</ul><?php

		endif; ?>
	</div>

	<div class="right wide">
		<?php the_sub_field('content'); ?>
	</div><?php
} ?>

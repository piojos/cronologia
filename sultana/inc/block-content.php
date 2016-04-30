<?php

$check = in_category('7');

while (have_rows('content_blocks')) {
	the_row();

	$images = get_sub_field('images');
	if($check) {
		$oneClass = 'right slim ';
		$twoClass = 'left wide ';
	} else {
		$oneClass = 'left slim ';
		$twoClass = 'right wide ';
	}

	if($check) { ?>
		<div class="<?php echo $twoClass; ?>">
			<?php the_sub_field('content'); ?>
		</div><?php
	} ?>

	<div class="<?php echo $oneClass; if($images) echo 'images '; ?>"><?php
		if($images) : ?>

			<ul><?php
			foreach( $images as $image ): ?>
				<li>
					<a herf="<?php echo $image['url']; ?>" target="_blank" <?php if(!$image['caption']) echo ' class="no_caption"'; ?>>
						<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
					</a>
					<?php if($image['caption']) echo '
					<p class="caption">'.$image['caption'].'</p>'; ?>
				</li>
			<?php
			endforeach; ?>
		</ul><?php

		endif; ?>
	</div><?php

	if(!$check) { ?>
		<div class="<?php echo $twoClass; ?>">
			<?php the_sub_field('content'); ?>
		</div><?php
	}

} ?>

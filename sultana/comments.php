<?php
/*
Designaholic Templates
Post Comentarios
*/



if ( post_password_required() ) {
	return;
} ?>

<div class="comments">
	 <div class="slim left" style="margin-top: 1em">
		 <h3>Comentarios</h3>
		 <p class="caption">Todos los comentarios son moderados para servir como una aportación relevante al
			 proyecto o la historia al rededor del mismo.</p><?php
			if ( have_comments() ) : ?>
			<p class="label"><?php
				printf( _nx( 'Un comentario.', '%1$s comentarios.', get_comments_number(), 'Comentarios'),
					number_format_i18n( get_comments_number() ), get_the_title() ); ?>
			</p><?php
			else : ?>
				<p class="label">
					Sin comentarios aún, escribe algo.
				</p><?php
			endif; ?>
	</div>

	<div class="wide right"><?php
		if ( have_comments() ) :
			echo '<ul class="parent">';
			wp_list_comments( array(
				'short_ping'  => true,
				'avatar_size' => 50,
			) );
			echo '</ul>';
		else :
			echo '<div class="six columns offset-by-one">No hay comentarios.</div>';
		endif; ?>

	</div>
</div>

<div class="add-comment">
	<form>
		<div class="wide left"><?php
			comment_form();

			if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<div class="">
				<?php _e( 'Commentarios desactivados.' ); ?>
			</div><?php

			endif; ?>
		</div>
		<div class="slim right">
			<p>¿Tienes imagenes relevantes para el proyecto?</p>
			<p>
				Envíalas vía <a href="http://wetransfer.nl/" target="_blank">wetransfer.nl</a> o
				<a href="http://dropbox.com/">Dropbox</a> a <strong>proyecto@cronologia.mx</strong>.
			</p>
		</div>
	</form>
</div>

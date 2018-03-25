<article class="noticia-cobertura">
	<div class="miniatura">
		<a title=" <?php the_title_Attribute() ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small', array('class' => 'img-responsive')); ?></a>
	</div>
	<p><span><?php the_category(' '); ?></span></p>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
</article>
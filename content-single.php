<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-padrao')); ?>>
	<h1 class="titulo-single"><?php the_title(); ?></h1>
	<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
	<p>Categorias: <?php the_category(' '); ?></p>
	<p><?php the_content(); ?></p>
</article>
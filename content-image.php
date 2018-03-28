<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-image')); ?>>
	<h1><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<a href=" <?php the_permalink(); ?>"><?php if(has_post_thumbnail()) : the_post_thumbnail('thumbnail'); endif;?> </a>
	<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
	<p>Categorias: <?php the_category(' '); ?></p>
	<p><?php the_excerpt(); ?></p>
</article>
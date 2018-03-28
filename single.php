<?php get_header(); ?>

<div id="primary">
	<main id="main">
		<div class="container">
			<div class="row">
				<div class="single col-md-8" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php 

					while(have_posts()):
						the_post();

						get_template_part('content', 'single');

						?>
						<div class="row">
							<div class="paginacao text-left col-md-6 col-sm-6 col-xs-6"><?php previous_post_link(); ?></div> 
							<div class="paginacao text-right col-md-6 col-sm-6 col-xs-6"><?php next_post_link(); ?></div>
						</div>	
						<?php
						// verifica se tem a opção de fazer comentários ou se está ativa
						if(comments_open() || get_comments_number()) : // comentários embaixo dos posts
							comments_template();
						endif;
					endwhile;
					 ?>
				</div>
				<aside class="barra-lateral col-md-4">
					<?php get_sidebar('home'); ?>
				</aside>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>
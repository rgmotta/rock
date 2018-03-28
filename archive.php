<?php get_header(); ?>

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">		
					<div class="noticias col-md-9">

						<?php 

						the_archive_title('<h1 class= "titulo-arquivo">', '</h1>'); //titulo do arquivo

							//se tiver post
							if(have_posts()) :
							//enquanto houver posts, chame o post de determinada forma
								while(have_posts()) : the_post();
						 ?>
						
						<?php  get_template_part('content', 'archive'); ?>
						 <?php  
							endwhile;

						?>

						<div class="paginacao text-left">
							<?php next_posts_link("<< mais antigos"); ?>
						</div>
						<div class="paginacao text-right">
							<?php previous_posts_link(">> mais novos") ?>
						</div>

						<?php
							else:
						 ?>
						 	<p>Ainda nao há posts</p>
						 <?php  
						 	endif;
						 ?>
					</div>
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('noticias'); ?>
					</aside>
				</div>	
			</div>
		</section>
	</main>	
</div> 
<?php get_footer(); ?>
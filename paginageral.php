<?php  
/*
Template Name: Páginas Gerais

*/
?>
<?php get_header(); ?>

<div class="conteudo-wrapper ">
	<main>
		<div class="container">
			<div class="conteudo">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php 
						//se tiver post
						if(have_posts()) :
						//enquanto houver posts, chame o post de determinada forma
							while(have_posts()) : the_post();
					 ?>
						 <h1><?php the_title(); ?></h1>
						 <p><?php the_content(); ?></p>
					 <?php  
						endwhile;
						else:
					 ?>
					 	<p>Ainda nao há posts</p>
					 <?php  
					 	endif;
					 ?>			
				</div>	
			</div>
		</div>
	</main>	
</div> 
<?php get_footer(); ?>

<?php get_header(); ?>

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">
					<div class="noticias col-md-9 col-sm-12 col-xs-12">
						
						<?php 
						$args = array(
							'type'  => 'post',
							'posts_per_page'   => 5,
							'category__not_in' => array(19,20,21,32,40,43),
							'category_in'    => array(1,4,5,6,18),
				
						);


						$noticias = new WP_Query($args); 

							if($noticias->have_posts()) :

								while($noticias->have_posts()) :
								 	$noticias->the_post();
								

						?>

					<?php get_template_part('content', get_post_format()); ?>

					<?php endwhile;	

					?>
						<div class="row">
							<div class="paginacao col-md-6 col-sm-6 col-xs-6 text-left">
								<?php next_posts_link("<< mais antigos") ?>
							</div>
							<div class="paginacao col-md-6 col-sm-6 col-xs-6 text-right">
								<?php previous_posts_link(">> mais novos") ?>
							</div>
						</div>

					<?php else: ?>

						<p>Não há posts</p>

					<?php endif; ?>

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
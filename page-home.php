<?php get_header(); ?>

<div class="conteudo">
	<main>
		<section class="primeiro">			
			<div class="container">
				<div class="row">
					<div class="slide col-md-8 col-sm-12">
						<?php motoPressSlider('home-slider'); ?>
					</div>
					<aside class="barra-lateral col-md-4">
						<?php get_sidebar('home'); ?>
					</aside>
				</div>
			</div>
		</section>
		<section class="curiosidades">
			<div class="container">
				<h1>Você sabia?</h1>
				<div class="row">					
					<div class="col-md-4">
						<div class="curiosidade-item">
							<div class="curiosidade-img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_curiosidade1')); ?>" alt="">
							</div>
							<h2><?php echo get_theme_mod('set_curiosidade1_titulo'); ?></h2>
							<p><?php echo get_theme_mod('set_curiosidade1_descricao'); ?></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="curiosidade-item">
							<div class="curiosidade-img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_curiosidade2')); ?>" alt="">
							</div>
							<h2><?php echo get_theme_mod('set_curiosidade2_titulo'); ?></h2>
							<p><?php echo get_theme_mod('set_curiosidade2_descricao'); ?></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="curiosidade-item">
							<div class="curiosidade-img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_curiosidade3')); ?>" alt="">
							</div>
							<h2><?php echo get_theme_mod('set_curiosidade3_titulo'); ?></h2>
							<p><?php echo get_theme_mod('set_curiosidade3_descricao'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="area-meio">
			<div class="container">
				<div class="area-centro">
					<div class="titulo">
						<h1>Cobertura de shows</h1>	
					</div>				
				<div class="row">
					<!-- Categoria de Cobertura -->
					<?php  

					$cobertura = new WP_Query("type=posts&posts_per_page=4&cat=19");

					if($cobertura-> have_posts()):
						while($cobertura->have_posts()):
							$cobertura->the_post();
					?>
					<div class="col-md-3">
						<?php get_template_part('content', 'cobertura') ?>
					</div>
				<?php endwhile; 
					wp_reset_postdata();
					endif;
					?>
				</div>
				<h1>Lollapalooza</h1>
				<div class="row">
				<!-- Categoria do Lollapalooza -->
				<?php  
				$args = array(
					'type'            => 'post',
					'posts_per_page'  => 3,
					'category__not_in'=> array(4,21,18,6,5,19,32,40,43),
					'category_in'     => array(1,20),
					'offset'          => 1,
				);

				$lollapalooza = new WP_Query($args);


				if($lollapalooza->have_posts()):
					while($lollapalooza->have_posts()):
						$lollapalooza->the_post();

				?>
				<div class="col-md-4">
				 <?php get_template_part('content', 'lollapalooza') ?>
				</div>
					<?php		
						endwhile;
						wp_reset_postdata();
					endif;
				?>
				</div>
				<h1>Cultura Pop</h1>
				<div class="row">					
				<!-- Categoria de Cultura e Pop -->
				<?php
				$cultura = new WP_Query("type=posts&posts_per_page=4&cat=21");

					if($cultura-> have_posts()):
						while($cultura->have_posts()):
							$cultura->the_post();
					?>
					<div class="col-md-3">
						<?php get_template_part('content', 'cultura') ?>
					</div>
				<?php endwhile; 
					wp_reset_postdata();
				endif;					

				?>	
				</div>
			</div>
		</div>
		</section>
		<section class="map">
			<div class="onde-estamos">
				<h1>Onde estamos?</h1>
			</div>
			<?php gmwd_map( 1, 1); ?>
		</section>
	</main>
</div>

<?php get_footer(); ?>
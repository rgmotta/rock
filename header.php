<!DOCTYPE>
<html <?php language_attributes(); ?>>
<head>
	<meta charset=" <?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="description" content=" <?php bloginfo('description'); ?>">
	<?php 
	?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header>
		<div class="barra-topo">
			<div class="container">
				<div class="row">
					<div class="logo col-md-12 text-left">
						Logo
					</div>
				</div>
			</div>
		</div>
		<div class="menus">
			<div class="area-menu">
					<div class="container">
						<div class="row">
							<div class="menu-principal col-md-12 text-left">
								<?php wp_nav_menu(array(
									'theme_location' => 'meu_menu_principal'
									)); 
								?>
							</div>
						</div>
					</div>
			</div>
			<div class="area-menu-sec">
				<div class="container">
					<div class="row">
						<div class="menu-secundario col-md-9 col-sm-9 col-xs-12 text-left">
							<?php wp_nav_menu(array('theme_location' => 'meu_menu_secundario')); ?>
						</div>
						<div class="pesquisa col-md-3 col-sm-3 text-right">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
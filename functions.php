
<?php  
//incluindo nosso arquivo customizer
require get_template_directory() . '/inc/customizer.php';

//incluindo arquivo navwalker
require get_template_directory() . '/bootstrap-navwalker.php';


remove_action('wp_head', 'wp_generator'); //removendo o gerador da versao do wordpress

//Função de carregamento dos scripts
function carrega_scripts(){

	// Enfileirando Bootstrap
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true);
	
	// Enfileirando estilos e scripts próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/assets/css/style.scss', array(), '1.0', 'all');
	wp_enqueue_script( 'template', get_template_directory_uri(). '/assets/js/template.js', array(), null, true);	

}
// a funcao é uma isca que chamará a funcao carrega_scripts como se fosse um anzol
add_action( 'wp_enqueue_scripts', 'carrega_scripts');

register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',
		'meu_menu_secundario'  => 'Menu Secundario'	
	)
);

// adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5', array('search-form'));

//Registrando Siderbar

if(function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'          => 'Siderbar Home',
			'id'            => 'sidebar-home',
			'description'   => 'barra lateral da página Home',
			'before-widget' => '<div class = "widget-wrapper">',
			'after-widget'  => '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',	
		)
	);
	register_sidebar(
		array(
			'name'          => 'Siderbar Noticias',
			'id'            => 'sidebar-noticia',
			'description'   => 'barra lateral da página de Noticias',
			'before-widget' => '<div class = "widget-wrapper">',
			'after-widget'  => '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',	
		)
	);
	register_sidebar(
		array(
			'name'           => 'Discos',
			'id'             => 'discos',
			'description'    => 'Área de discos',
			'before-widget'	 => '<div class="widget-wrapper">',
			'after-widget'   => '</div>',
			'before_title'   => '<h2 class="widget-titulo">',
			'after_title'    => '</h2>',	
		)
	);
	register_sidebar(
		array(
			'name'           => 'Redes sociais',
			'id'             => 'redes-sociais',
			'description'    => 'Área de redes sociais',
			'before-widget'	 => '<div class="widget-wrapper">',
			'after-widget'   => '</div>',
			'before_title'   => '<h2 class="widget-titulo">',
			'after_title'    => '</h2>',	
		)
	);
	register_sidebar(
		array(
			'name'           => 'Copyright',
			'id'             => 'copyright',
			'description'    => 'Área do Copyright',
			'before-widget'	 => '<div class="widget-wrapper">',
			'after-widget'   => '</div>',
			'before_title'   => '<h2 class="widget-titulo">',
			'after_title'    => '</h2>',	
		)
	);
	

}


?>
<?php  

function meupersonalizador($wp_customize){

//Seção Copyright
	$wp_customize->add_section( 'sec_copyright', array(
		'title'       => 'Copyright',  
		'description' => 'Seção para o Copyright'
	));
	$wp_customize->add_setting( 'set_copyright', array(
		'type'        => 'theme_mod',
		'default'     => 'Copyfight - Todos os direitos reservados'
	));
	
	$wp_customize->add_control( 'ctrl_copyright', array(
		'label'       => 'Copyright',
		'description' => 'Informe o copyright',
		'section'     => 'sec_copyright',
		'setting'     => 'set_copyright',
		'type'        => 'text'
	));


// Seção Curiosidade

	$wp_customize->add_section( 'sec_curiosidade', array(
		'title'			=> 'Curiosidade',
		'description'	=> 'Seção para curiosidade'
	));	

	// Curiosidade 1 - Título 
	$wp_customize->add_setting( 'set_curiosidade1_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_curiosidade1_titulo', array(
		'label' 	=> 'Título para o curiosidade 1',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_curiosidade',
		'settings'		=> 'set_curiosidade1_titulo',
		'type'			=> 'text'
	) );

	// curiosidade 1 - Descrição
	$wp_customize->add_setting( 'set_curiosidade1_descricao', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_curiosidade1_descricao', array(
		'label' 	=> 'Descrição para o curiosidade 1',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_curiosidade',
		'settings'		=> 'set_curiosidade1_descricao',
		'type'			=> 'textarea'
	) );

	// curiosidade 1 - Imagem
	$wp_customize->add_setting( 'set_curiosidade1', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_curiosidade_item1', array(
		'label'		=> 'Imagem do curiosidade 1',
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_curiosidade',
		'settings'	=> 'set_curiosidade1'
	)));



	// curiosidade 2 - Título 
	$wp_customize->add_setting( 'set_curiosidade2_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_curiosidade2_titulo', array(
		'label' 	=> 'Título para o curiosidade 2',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_curiosidade',
		'settings'		=> 'set_curiosidade2_titulo',
		'type'			=> 'text'
	) );

	// curiosidade 2 - Descrição
	$wp_customize->add_setting( 'set_curiosidade2_descricao', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_curiosidade2_descricao', array(
		'label' 	=> 'Descrição para o curiosidade 2',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_curiosidade',
		'settings'		=> 'set_curiosidade2_descricao',
		'type'			=> 'textarea'
	) );


	// curiosidade 2 - Imagem
	$wp_customize->add_setting( 'set_curiosidade2', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_curiosidade_item2', array(
		'label'		=> 'Imagem do curiosidade 2',
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_curiosidade',
		'settings'	=> 'set_curiosidade2'
	)));




	// curiosidade 3 - Título 
	$wp_customize->add_setting( 'set_curiosidade3_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_curiosidade3_titulo', array(
		'label' 	=> 'Título para o curiosidade 3',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_curiosidade',
		'settings'		=> 'set_curiosidade3_titulo',
		'type'			=> 'text'
	) );

	// curiosidade 3 - Descrição
	$wp_customize->add_setting( 'set_curiosidade3_descricao', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_curiosidade3_descricao', array(
		'label' 	=> 'Descrição para o curiosidade 3',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_curiosidade',
		'settings'		=> 'set_curiosidade3_descricao',
		'type'			=> 'textarea'
	) );


	// curiosidade 3 - Imagem
	$wp_customize->add_setting( 'set_curiosidade3', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_curiosidade_item3', array(
		'label'		=> 'Imagem do Serviço 3',
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_curiosidade',
		'settings'	=> 'set_curiosidade3'
	)));	

}
add_action( 'customize_register', 'meupersonalizador');


?>
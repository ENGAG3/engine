<?php

// Footer

 if (class_exists('elementor')) {

/**
 * Add header template toggle
 */

 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'toggle',
	'settings'    => 'footer_template_toggle',
	'label'       => __( 'Us a template for footer layout', 'engine' ),
	'section'     => 'footer',
	'default'     => '0',
	// 'priority'    => 10,
) );


/**
 * Add header template select
 */

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'select',
 'settings'    => 'footer_template',
 'label'       => __( 'Template', 'engine' ),
 'description' => esc_attr__( 'Select the a template to display.', 'engine' ),
 'section'     => 'footer',
 'default'     => '',
 // 'priority'    => 10,
 'multiple'    => 1,
 'choices'     =>  Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'fl-builder-template' ) ),
 'active_callback'  => array(
		array(
			'setting'  => 'footer_template_toggle',
			'operator' => '==',
			'value'    => 1,
		)
	)
) );


 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio-image',
	'settings'    => 'footer_widget_layout',
	'label'       => __( 'Footer Columns', 'engine' ),
	'section'     => 'footer',
	'default'     => 'sidebar-content',
	// 'priority'    => 50,
	'choices'     => array(
		'column-0'		=> get_template_directory_uri() . '/assets/images/icons/0-column.svg',
		'column-1'		=> get_template_directory_uri() . '/assets/images/icons/1-column.svg',
		'column-2'		=> get_template_directory_uri() . '/assets/images/icons/2-column.svg',
		'column-3'		=> get_template_directory_uri() . '/assets/images/icons/3-column.svg',
		'column-4'		=> get_template_directory_uri() . '/assets/images/icons/4-column.svg',
		'column-4'		=> get_template_directory_uri() . '/assets/images/icons/4-column.svg',
		'column-5'		=> get_template_directory_uri() . '/assets/images/icons/5-column.svg',
	),
	'active_callback'  => array(
 		array(
 			'setting'  => 'footer_template_toggle',
 			'operator' => '==',
 			'value'    => 0,
 		)
 	)
) );

} else {

  engine_Kirki::add_field( 'engine_theme', array(
   'type'        => 'radio-image',
   'settings'    => 'footer_widget_layout',
   'label'       => __( 'Footer Columns', 'engine' ),
   'section'     => 'footer',
   'default'     => 'sidebar-content',
   // 'priority'    => 50,
   'choices'     => array(
     'column-0'		=> get_template_directory_uri() . '/assets/images/icons/0-column.svg',
     'column-1'		=> get_template_directory_uri() . '/assets/images/icons/1-column.svg',
     'column-2'		=> get_template_directory_uri() . '/assets/images/icons/2-column.svg',
     'column-3'		=> get_template_directory_uri() . '/assets/images/icons/3-column.svg',
     'column-4'		=> get_template_directory_uri() . '/assets/images/icons/4-column.svg',
     'column-4'		=> get_template_directory_uri() . '/assets/images/icons/4-column.svg',
     'column-5'		=> get_template_directory_uri() . '/assets/images/icons/5-column.svg',
   )
  ) );

}


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'footer_background_color',
	'label'       => __( 'Footer Background Color', 'engine' ),
	'section'     => 'footer',
	'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'footer_link_color',
	'label'       => __( 'Footer Text Color', 'engine' ),
	'section'     => 'footer',
	'default'     => '#777777',
	'choices'     => array(
		'alpha' => false,
	),
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'footer_link_color_active',
	'label'       => __( 'Footer Link Color', 'engine' ),
	'section'     => 'footer',
	'default'     => '',
	'choices'     => array(
		'alpha' => false,
	),
) );


 /**
  * Add "Powered by ENGAG3" Toggle;
  */

	engine_Kirki::add_field( 'engine_theme', array(
	 'type'        => 'toggle',
	 'settings'    => 'e3_footer_link',
	 'label'       => __( 'Show link to ˘ Ξ Π G I Π Ξ', 'engine' ),
	 'section'     => 'footer',
	 'default'     => '1',
	 'priority'    => 100,
 ) );

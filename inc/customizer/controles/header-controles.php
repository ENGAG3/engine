<?php
// Header

 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio-image',
	'settings'    => 'header_layout',
	'label'       => __( 'Header Layout', 'engine' ),
	'section'     => 'header',
	'default'     => 'header-top',
	// 'priority'    => 20,
	'choices'     => array(
    'header-left'  	 => get_template_directory_uri() . '/assets/images/icons/header-left.svg',
		'header-top'   	 => get_template_directory_uri() . '/assets/images/icons/header-top.svg',
		'header-right'   => get_template_directory_uri() . '/assets/images/icons/header-right.svg',
	),
) );




engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'select',
	'settings'    => 'sticky_header',
	'label'       => __( 'Sticky Header', 'engine' ),
	'section'     => 'header',
	'default'     => 'disabled',
	// 'priority'    => 60,
	'choices'     => array(
		'disabled'   => esc_attr__( 'Disabled', 'engine' ),
		'enabled' 	 => esc_attr__( 'Enabled', 'engine' ),
		'mobile'  	 => esc_attr__( 'Only on mobile', 'engine' ),
		'desktop' 	 => esc_attr__( 'Only on Desktop', 'engine' ),
	),
  'active_callback'  => array(
    array(
      'setting'  => 'header_layout',
      'operator' => '==',
      'value'    => 'header-top',
    )
  )
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio',
	'settings'    => 'sticky_header_style',
	'label'       => __( 'Fixed Header Style', 'engine' ),
	'section'     => 'header',
	'default'     => 'fixed',
	// 'priority'    => 70,
	'multiple'    => 1,
	'choices'     => array(
		'fixed' 		 				=> esc_attr__( 'Fixed', 'engine' ),
		'slide' 	 					=> esc_attr__( 'Slide In', 'engine' ),
		'on-scroll-up' 	 		=> esc_attr__( 'On Scroll up', 'engine' ),
	),
	'active_callback'  => array(
    array(
      'setting'  => 'header_layout',
      'operator' => '==',
      'value'    => 'header-top',
    ),
 		array(
 			'setting'  => 'sticky_header',
 			'operator' => '!=',
 			'value'    => 'disabled',
 		)
 	)
) );

engine_Kirki::add_field( 'engine_theme', array(
  'type'        => 'slider',
	'settings'    => 'header_width_desktop',
	'label'       => esc_attr__( 'Header Width (desktop)', 'engine' ),
	'section'     => 'header',
	'default'     => 28,
	'choices'     => array(
		'min'  => '18',
		'max'  => '40',
		'step' => '1',
	),
	'active_callback'  => array(
    array(
      'setting'  => 'header_layout',
      'operator' => '!=',
      'value'    => 'header-top',
    )
 	)
) );

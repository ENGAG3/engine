<?php
// Typography

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'body_font_size',
	'label'       => esc_attr__( 'Body Font Size', 'engine' ),
	'section'     => 'Typography',
	'default'     => 15,
	'choices'     => array(
		'min'  => '8',
		'max'  => '32',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'body_line_height',
	'label'       => esc_attr__( 'Body Line Height', 'engine' ),
	'section'     => 'Typography',
	'default'     => 1.7,
	'choices'     => array(
		'min'  => '0.8',
		'max'  => '3',
		'step' => '0.1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'header_font_size',
	'label'       => esc_attr__( 'Header Font Size', 'engine' ),
	'section'     => 'Typography',
	'default'     => 32,
	'choices'     => array(
		'min'  => '22',
		'max'  => '72',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'header_letter_spacing',
	'label'       => esc_attr__( 'Header Letter Spacing', 'engine' ),
	'section'     => 'Typography',
	'default'     => 0,
	'choices'     => array(
		'min'  => '-4',
		'max'  => '12',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'header_line_height',
	'label'       => esc_attr__( 'Header Line Height', 'engine' ),
	'section'     => 'Typography',
	'default'     => 2.5,
	'choices'     => array(
		'min'  => '0.8',
		'max'  => '3',
		'step' => '0.1',
	),
) );



// engine_Kirki::add_field( 'engine_theme', array(
// 	'type'        => 'multicheck',
// 	'settings'    => 'header_font_style',
// 	'label'       => __( 'Header Font Style', 'engine' ),
// 	'section'     => 'typography',
// 	'priority'    => 10,
// 	'choices'     => array(
// 		'bold'   			=> esc_attr__( 'B', 'engine' ),
// 		'italic' 			=> esc_attr__( 'I', 'engine' ),
// 		'uppercase'  	=> esc_attr__( 'TT', 'engine' ),
// 		'underline'  	=> esc_attr__( 'U', 'engine' ),
// 	),
// ) );


/**
 * Add the body-typography control
 */
engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'typography',
	'settings'    => 'body_font',
	'label'       => esc_attr__( 'Body Font', 'engine' ),
	'description' => esc_attr__( 'Select the main typography options for your site.', 'engine' ),
	'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'engine' ),
	'section'     => 'typography',
	'priority'    => 10,
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '400',
		// 'font-size'      => '16px',
		// 'line-height'    => '1.5',
		// 'letter-spacing' => '0',
		// 'color'          => '#333333',
	),
	'output' => array(
		array(
			'element' => 'body',
		),
	),
) );

/**
 * Add the body-typography control
 */
engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'typography',
	'settings'    => 'headers_font',
	'label'       => esc_attr__( 'Headers Font', 'engine' ),
	'description' => esc_attr__( 'Select the typography options for your headers.', 'engine' ),
	'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).', 'engine' ),
	'section'     => 'typography',
	'priority'    => 10,
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '400',
		// 'font-size'      => '16px',
		// 'line-height'    => '1.5',
		// 'letter-spacing' => '0',
		// 'color'          => '#333333',
	),
	'output' => array(
		array(
			'element' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', '.h1', '.h2', '.h3', '.h4', '.h5', '.h6' ),
		),
	),
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'body_link_color',
	'label'       => __( 'Link Color', 'engine' ),
	'section'     => 'typography',
	'default'     => '#2ea3f2',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'body_text_color',
	'label'       => __( 'Body Text Color', 'engine' ),
	'section'     => 'typography',
	'default'     => '#666666',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'header_text_color',
	'label'       => __( 'Header Text Color', 'engine' ),
	'section'     => 'typography',
	'default'     => '#444444',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );







engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'toggle',
	'settings'    => 'extra_font_toggle',
	'label'       => __( 'Load Extra Fonts', 'engine' ),
	'section'     => 'typography',
	'default'     => '0',
	'priority'    => 90,
) );



/**
 * Add the body-typography control
 */
engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'typography',
	'settings'    => 'extra_font_1',
	'label'       => esc_attr__( 'Extra Font', 'engine' ),
	'description' => esc_attr__( 'Select the main typography options for your site.', 'engine' ),
	'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'engine' ),
	'section'     => 'typography',
	'priority'    => 95,
	'default'     => array(
		'font-family'    => 'Sans Serif',
		'variant'        => '400',
	),
	'active_callback'  => array(
		array(
			'setting'  => 'extra_font_toggle',
			'operator' => '==',
			'value'    => 1,
		)
	)
) );

/**
 * Add the body-typography control
 */
engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'typography',
	'settings'    => 'extra_font_2',
	'label'       => esc_attr__( 'Extra Font', 'engine' ),
	'description' => esc_attr__( 'Select the main typography options for your site.', 'engine' ),
	'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'engine' ),
	'section'     => 'typography',
	'priority'    => 96,
	'default'     => array(
		'font-family'    => 'Sans Serif',
		'variant'        => '400',
	),
	'active_callback'  => array(
		array(
			'setting'  => 'extra_font_toggle',
			'operator' => '==',
			'value'    => 1,
		)
	)
) );

/**
 * Add the body-typography control
 */
engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'typography',
	'settings'    => 'extra_font_3',
	'label'       => esc_attr__( 'Extra Font', 'engine' ),
	'description' => esc_attr__( 'Select the main typography options for your site.', 'engine' ),
	'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'engine' ),
	'section'     => 'typography',
	'priority'    => 97,
	'default'     => array(
		'font-family'    => 'Sans Serif',
		'variant'        => '400',
	),
	'active_callback'  => array(
		array(
			'setting'  => 'extra_font_toggle',
			'operator' => '==',
			'value'    => 1,
		)
	)
) );

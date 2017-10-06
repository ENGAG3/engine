<?php

// Buttions form

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'button_font_size',
	'label'       => esc_attr__( 'Text Size', 'engine' ),
	'section'     => 'forms',
	'default'     => 16,
	'choices'     => array(
		'min'  => '5',
		'max'  => '32',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'button_padding',
	'label'       => esc_attr__( 'Padding', 'engine' ),
	'section'     => 'forms',
	'default'     => 14,
	'choices'     => array(
		'min'  => '8',
		'max'  => '50',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_text_color',
	'label'       => __( 'Text Color', 'engine' ),
	'section'     => 'forms',
	'default'     => '#ffffff',
	// 'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_text_color_hover',
	'label'       => __( 'Text Color - Hover', 'engine' ),
	'section'     => 'forms',
	'default'     => '#ffffff',
	// 'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_background_color',
	'label'       => __( 'Background Color', 'engine' ),
	'section'     => 'forms',
	'default'     => 'rgba(50,50,50,1)',
	// 'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_background_color_hover',
	'label'       => __( 'Background Color - Hover', 'engine' ),
	'section'     => 'forms',
	'default'     => 'rgba(34, 121, 163, 1)',
	// 'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'typography',
	'settings'    => 'button_font',
	'label'       => esc_attr__( 'Button Font', 'engine' ),
	'section'     => 'forms',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '400',
	),
	'output' => array(
		array(
			'element' => array( 'button', 'input' ),
		),
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_border_color',
	'label'       => __( 'Border Color', 'engine' ),
	'section'     => 'forms',
	'default'     => 'rgba(0,0,0,1)',
	'choices'     => array(
		'alpha' => true,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'button_border_size',
	'label'       => esc_attr__( 'Border Width', 'engine' ),
	'section'     => 'forms',
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '10',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'button_border_radius',
	'label'       => esc_attr__( 'Border Radius', 'engine' ),
	'section'     => 'forms',
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '50',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'field_text_color',
	'label'       => __( 'Field Text', 'engine' ),
	'section'     => 'forms',
	'default'     => '#222222',
	'choices'     => array(
		'alpha' => true,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'field_text_color_focus',
	'label'       => __( 'Field Text - Focus', 'engine' ),
	'section'     => 'forms',
	'default'     => '#111111',
	'choices'     => array(
		'alpha' => true,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'field_background_color',
	'label'       => __( 'Field Background', 'engine' ),
	'section'     => 'forms',
	'default'     => 'rgba(240,240,240,1)',
	'choices'     => array(
		'alpha' => true,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'field_background_color_focus',
	'label'       => __( 'Field Background - Focus', 'engine' ),
	'section'     => 'forms',
	'default'     => 'rgba(245,245,245,1)',
	'choices'     => array(
		'alpha' => true,
	),
) );

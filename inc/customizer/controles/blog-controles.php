<?php


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'blog_background_color',
	'label'       => __( 'Background Color', 'engine' ),
	'section'     => 'blog',
	'default'     => '',
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'slider',
 'settings'    => 'blog_content_width',
 'label'       => esc_attr__( 'Website Content Width', 'engine' ),
 'section'     => 'blog',
 // 'priority'    => 1,
 'default'     => 1200,
 'choices'     => array(
   'min'  => '960',
   'max'  => '1920',
   'step' => '10',
 ),
) );

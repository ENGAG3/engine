<?php


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio',
	'settings'    => 'blog_desktop_columns',
	'label'       => __( 'Desktop Columns', 'engine' ),
	'section'     => 'blog',
	'default'     => 'column-1',
	'choices'     => array(
		'column-1'   => esc_attr__( '1 Column', 'engine' ),
		'column-2'   => esc_attr__( '2 Columns', 'engine' ),
		'column-3'   => esc_attr__( '3 Columns', 'engine' ),
		'column-4'   => esc_attr__( '4 Columns', 'engine' ),
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio',
	'settings'    => 'blog_tablet_columns',
	'label'       => __( 'Tablet Columns', 'engine' ),
	'section'     => 'blog',
	'default'     => 'column-1',
	'choices'     => array(
		'column-1'   => esc_attr__( '1 Column', 'engine' ),
		'column-2'   => esc_attr__( '2 Columns', 'engine' ),
		'column-3'   => esc_attr__( '3 Columns', 'engine' ),
		'column-4'   => esc_attr__( '4 Columns', 'engine' ),
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio',
	'settings'    => 'blog_phone_columns',
	'label'       => __( 'Phone Columns', 'engine' ),
	'section'     => 'blog',
	'default'     => 'column-1',
	'choices'     => array(
		'column-1'   => esc_attr__( '1 Column', 'engine' ),
		'column-2'   => esc_attr__( '2 Columns', 'engine' ),
		'column-3'   => esc_attr__( '3 Columns', 'engine' ),
		'column-4'   => esc_attr__( '4 Columns', 'engine' ),
	),
) );



engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'toggle',
 'settings'    => 'blog_sidebar',
 'label'       => __( 'Enable custom Blog Sidebar', 'engine' ),
 'section'     => 'blog',
 'default'     => '0',
  // 	'priority'    => 10,
  'active_callback'  => array(
    array(
      'setting'  => 'header_layout',
      'operator' => '==',
      'value'    => 'header-top',
    )
  )
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'radio-image',
 'settings'    => 'blog_sidebar_layout',
 'label'       => __( 'Sidebar Position', 'engine' ),
 'section'     => 'blog',
 'default'     => 'content-sidebar',
 // 'priority'    => 10,
 'choices'     => array(
   'no-sidebar'   				=> get_template_directory_uri() . '/assets/images/icons/sidebar-content.svg',
   'sidebar-content'   				=> get_template_directory_uri() . '/assets/images/icons/sidebar-content.svg',
   'sidebar-content-sidebar'   => get_template_directory_uri() . '/assets/images/icons/sidebar-content-sidebar.svg',
   'content-sidebar'   				=> get_template_directory_uri() . '/assets/images/icons/content-sidebar.svg',
 ),
 'active_callback'  => array(
   array(
     'setting'  => 'blog_sidebar',
     'operator' => '==',
     'value'    => '1',
   )
 )
) );

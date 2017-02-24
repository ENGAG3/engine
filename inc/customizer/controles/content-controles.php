<?php

// Content

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'toggle',
 'settings'    => 'boxed_layout',
 'label'       => __( 'Enable Boxed Layout', 'engine' ),
 'section'     => 'layout',
 'default'     => '0',
 'priority'    => 10,
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'slider',
 'settings'    => 'content_width',
 'label'       => esc_attr__( 'Website Content Width', 'engine' ),
 'section'     => 'layout',
 // 'priority'    => 1,
 'default'     => 1140,
 'choices'     => array(
   'min'  => '960',
   'max'  => '1920',
   'step' => '10',
 ),
) );


engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'slider',
 'settings'    => 'medium_device_breakpoint',
 'label'       => esc_attr__( 'Medium Device Breakpoint', 'engine' ),
 'section'     => 'layout',
 // 'priority'    => 1,
 'default'     => 992,
 'choices'     => array(
   'min'  => '900',
   'max'  => '1200',
   'step' => '10',
 ),
) );


engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'slider',
 'settings'    => 'small_device_breakpoint',
 'label'       => esc_attr__( 'small Device Breakpoint', 'engine' ),
 'section'     => 'layout',
 // 'priority'    => 2,
 'default'     => 768,
 'choices'     => array(
   'min'  => '200',
   'max'  => '900',
   'step' => '10',
 ),
) );


engine_Kirki::add_field( 'engine_theme', array(
  'type'        => 'radio-image',
  'settings'    => 'content_layout_style',
  'label'       => __( 'Content Layout Style', 'engine' ),
  'section'     => 'layout',
  'default'     => 'content-layout-single',
  // 'priority'    => 10,
  'choices'     => array(
    'content-layout-single' => get_template_directory_uri() . '/assets/images/icons/lined-containers.svg',
    'content-layout-boxed'  => get_template_directory_uri() . '/assets/images/icons/boxed-containers.svg',
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
 'type'        => 'toggle',
 'settings'    => 'page_sidebar',
 'label'       => __( 'Enable Sidebar', 'engine' ),
 'section'     => 'layout',
 'default'     => '1',
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
 'settings'    => 'page_sidebar_layout',
 'label'       => __( 'Sidebar Position', 'engine' ),
 'section'     => 'layout',
 'default'     => 'content-sidebar',
 // 'priority'    => 10,
 'choices'     => array(
   'sidebar-content'   				=> get_template_directory_uri() . '/assets/images/icons/sidebar-content.svg',
   'sidebar-content-sidebar'   => get_template_directory_uri() . '/assets/images/icons/sidebar-content-sidebar.svg',
   'content-sidebar'   				=> get_template_directory_uri() . '/assets/images/icons/content-sidebar.svg',
 ),
 'active_callback'  => array(
   array(
     'setting'  => 'header_layout',
     'operator' => '==',
     'value'    => 'header-top',
   ),
   array(
     'setting'  => 'page_sidebar',
     'operator' => '==',
     'value'    => '1',
   )
 )
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'slider',
 'settings'    => 'main_slider_width',
 'label'       => esc_attr__( 'SideBar Width', 'engine' ),
 'section'     => 'layout',
 'default'     => 28,
 'choices'     => array(
   'min'  => '5',
   'max'  => '40',
   'step' => '1',
 ),
 'active_callback'  => array(
   array(
     'setting'  => 'header_layout',
     'operator' => '==',
     'value'    => 'header-top',
   ),
   array(
     'setting'  => 'page_sidebar',
     'operator' => '==',
     'value'    => '1',
   )
 )
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'slider',
 'settings'    => 'secondary_slider_width',
 'label'       => esc_attr__( 'SideBar Width (Right Side)', 'engine' ),
 'section'     => 'layout',
 'default'     => 20,
 'choices'     => array(
   'min'  => '5',
   'max'  => '40',
   'step' => '1',
 ),
 'active_callback'  => array(
   array(
     'setting'  => 'header_layout',
     'operator' => '==',
     'value'    => 'header-top',
   ),
   array(
     'setting'  => 'page_sidebar',
     'operator' => '==',
     'value'    => '1',
   ),
   array(
     'setting'  => 'page_sidebar_layout',
     'operator' => '==',
     'value'    => 'sidebar-content-sidebar',
   )
 )
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'color',
 'settings'    => 'body_background_color',
 'label'       => __( 'Background Color', 'engine' ),
 'section'     => 'layout',
 'default'     => '#ffffff',
 'choices'     => array(
   'alpha' => false,
 ),
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'color',
 'settings'    => 'content_background_color',
 'label'       => __( 'Content Background Color', 'engine' ),
 'section'     => 'layout',
 'default'     => '#ffffff',
 'choices'     => array(
   'alpha' => false,
 ),
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'checkbox',
 'settings'    => 'body_background_toggle',
 'label'       => __( 'Background Image', 'engine' ),
 'section'     => 'layout',
 'default'     => '0',
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'image',
 'settings'    => 'body_background_image',
 'label'       => __( 'Background Image', 'engine' ),
 'description' => __( 'This is the control description', 'engine' ),
 'help'        => __( 'This is some extra help text.', 'engine' ),
 'section'     => 'layout',
 'active_callback'  => array(
   array(
     'setting'  => 'body_background_toggle',
     'operator' => '==',
     'value'    => '1',
   ),
 )
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'color',
 'settings'    => 'content_background_overlay',
 'label'       => __( 'Background Image Overlay', 'engine' ),
 'section'     => 'layout',
 'default'     => 'rgba(0,0,0,0)',
 'choices'     => array(
   'alpha' => true,
 ),
 'active_callback'  => array(
   array(
     'setting'  => 'body_background_toggle',
     'operator' => '==',
     'value'    => '1',
   ),
 )
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'radio-buttonset',
 'settings'    => 'body_background_repeat',
 'label'       => __( 'Background Repeat', 'engine' ),
 'section'     => 'layout',
 'default'     => 'cover',
 // 'priority'    => 10,
 'choices'     => array(
   'cover'   => esc_attr__( 'Cover', 'engine' ),
   'repeat'   => esc_attr__( 'Tile', 'engine' ),
   'repeat-x' => esc_attr__( 'Tile Horizontally', 'engine' ),
   'repeat-y'  => esc_attr__( 'Tile Vertically', 'engine' ),
 ),
 'active_callback'  => array(
   array(
     'setting'  => 'body_background_toggle',
     'operator' => '==',
     'value'    => '1',
   ),
 )
) );

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'radio-buttonset',
 'settings'    => 'body_background_style',
 'label'       => __( 'Background Repeat', 'engine' ),
 'section'     => 'layout',
 'default'     => 'scroll',
 'choices'     => array(
   'scroll' => esc_attr__( 'Scroll', 'engine' ),
   'fixed'  => esc_attr__( 'Fixed', 'engine' ),
 ),
 'active_callback'  => array(
   array(
     'setting'  => 'body_background_toggle',
     'operator' => '==',
     'value'    => '1',
   ),
 )
) );

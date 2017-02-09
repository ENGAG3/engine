<?php

// Check if Kirki plugin is active
if ( class_exists( 'kirki' ) ) {



  // Sections

  /**
   * Add the layout section
   */
  engine_Kirki::add_section( 'layout', array(
  	'title'      => esc_attr__( 'Layout', 'engine' ),
  	'priority'   => 30,
  	'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the header section
   */
  engine_Kirki::add_section( 'header', array(
    'title'      => esc_attr__( 'Header', 'engine' ),
    'priority'   => 20,
    // 'panel'      => 'colors',
    'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the header section
   */
  engine_Kirki::add_section( 'slideout', array(
    'title'      => esc_attr__( 'Slideout Menu', 'engine' ),
    'priority'   => 40,
    // 'panel'      => 'nav_menus',
    'capability' => 'edit_theme_options',
  ) );


  /**
   * Add the header section
   */
  engine_Kirki::add_section( 'announcement_bar', array(
    'title'      => esc_attr__( 'Announcement Bar', 'engine' ),
    'priority'   => 50,
    // 'panel'      => 'nav_menus',
    'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the header section
   */
   engine_Kirki::add_panel( 'nav_menus', array(
       'priority'    => 60,
       'title'       => __( 'Navigation', 'engine' ),
      //  'description' => __( 'My Description', 'engine' ),
   ) );


  /**
   * Add the Widgetssection
   */
  engine_Kirki::add_panel( 'widgets', array(
  	'title'      => esc_attr__( 'Widgets', 'engine' ),
  	'priority'   => 70,
  	'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the footer section
   */
  engine_Kirki::add_section( 'footer', array(
  	'title'      => esc_attr__( 'Footer', 'engine' ),
  	'priority'   => 80,
  	'capability' => 'edit_theme_options',
  ) );



 /*
  * General
  */

  /**
   * Add Color Panel
   */
  engine_Kirki::add_section( 'title_tagline', array(
      'priority'    => 90,
      'title'    => __( 'Site Identity' ),
      // 'description' => __( 'My Description', 'engine' ),
  ) );

  /**
   * Add Color Panel
   */
  engine_Kirki::add_panel( 'colors', array(
      'priority'    => 100,
      'title'       => __( 'Colors & Styles', 'engine' ),
      'description' => __( 'My Description', 'engine' ),
  ) );

      /**
       * Add the typography section
       */
      engine_Kirki::add_section( 'background', array(
      	'title'      => esc_attr__( 'background', 'engine' ),
      	// 'priority'   => 40,
        'panel'      => 'colors',
      	'capability' => 'edit_theme_options',
      ) );

      /**
       * Add the typography section
       */
      engine_Kirki::add_section( 'header_colors', array(
      	'title'      => esc_attr__( 'Header', 'engine' ),
      	// 'priority'   => 40,
        'panel'      => 'colors',
      	'capability' => 'edit_theme_options',
      ) );

      /**
       * Add the typography section
       */
      engine_Kirki::add_section( 'forms', array(
      	'title'      => esc_attr__( 'Buttions & Forms', 'engine' ),
      	// 'priority'   => 40,
        'panel'      => 'colors',
      	'capability' => 'edit_theme_options',
      ) );


  /**
   * Add the typography section
   */
  engine_Kirki::add_section( 'typography', array(
  	'title'      => esc_attr__( 'Typography', 'engine' ),
  	'priority'   => 110,
  	// 'panel'      => 'menus',
  	'capability' => 'edit_theme_options',
  ) );


  /**
   * Add the Social Media section
   */
  engine_Kirki::add_section( 'social', array(
  	'title'      => esc_attr__( 'Social Media', 'engine' ),
  	'priority'   => 120,
  	// 'panel'      => 'menus',
  	'capability' => 'edit_theme_options',
  ) );


  /*
   *  Advanced
   */

  /**
   * Add the Social Media section
   */
  engine_Kirki::add_section( 'error_page', array(
  	'title'      => esc_attr__( '404 / Page Not Found', 'engine' ),
  	'priority'   => 130,
  	// 'panel'      => 'menus',
  	'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the Social Media section
   */
  engine_Kirki::add_section( 'cookie_notice', array(
    'title'      => esc_attr__( 'EU Cookie Notice', 'engine' ),
    'priority'   => 140,
    // 'panel'      => 'menus',
    'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the Social Media section
   */
  engine_Kirki::add_section( 'code_injection', array(
  	'title'      => esc_attr__( 'Code Injection', 'engine' ),
  	'priority'   => 150,
  	// 'panel'      => 'menus',
  	'capability' => 'edit_theme_options',
  ) );


}

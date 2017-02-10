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
   engine_Kirki::add_panel( 'nav_menus', array(
       'priority'    => 50,
       'title'       => __( 'Navigation', 'engine' ),
      //  'description' => __( 'My Description', 'engine' ),
   ) );

   /**
    * Add the header section
    */
   engine_Kirki::add_section( 'announcement_bar', array(
     'title'      => esc_attr__( 'Announcement Bar', 'engine' ),
     'priority'   => 60,
     // 'panel'      => 'nav_menus',
     'capability' => 'edit_theme_options',
   ) );


   if ( class_exists( 'WooCommerce' ) ) {

     /**
      * Add the footer section
      */
     engine_Kirki::add_section( 'store', array(
       'title'      => esc_attr__( 'Store', 'engine' ),
       'priority'   => 70,
       'capability' => 'edit_theme_options',
     ) );

   }



   /**
    * Add the footer section
    */
   engine_Kirki::add_section( 'blog', array(
   	'title'      => esc_attr__( 'Blog', 'engine' ),
   	'priority'   => 80,
   	'capability' => 'edit_theme_options',
   ) );




 /* Only load code that needs BuddyPress to run once BP is loaded and initialized. */
 function engine_buddypress_panel() {

   /**
    * Add the footer section
    */
   engine_Kirki::add_section( 'buddypress', array(
   	'title'      => esc_attr__( 'Social Network', 'engine' ),
   	'priority'   => 90,
   	'capability' => 'edit_theme_options',
   ) );

 }
 add_action( 'bp_include', 'engine_buddypress_panel' );



  /**
   * Add the Widgetssection
   */
  engine_Kirki::add_panel( 'widgets', array(
  	'title'      => esc_attr__( 'Widgets', 'engine' ),
  	'priority'   => 100,
  	'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the footer section
   */
  engine_Kirki::add_section( 'footer', array(
  	'title'      => esc_attr__( 'Footer', 'engine' ),
  	'priority'   => 110,
  	'capability' => 'edit_theme_options',
  ) );


 /*
  * General
  */

  /**
   * Add Color Panel
   */
  engine_Kirki::add_section( 'title_tagline', array(
      'priority'    => 110,
      'title'    => __( 'Site Identity' ),
      // 'description' => __( 'My Description', 'engine' ),
  ) );

  /**
   * Add Color Panel
   */
  engine_Kirki::add_panel( 'colors', array(
      'priority'    => 120,
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
  	'priority'   => 130,
  	// 'panel'      => 'menus',
  	'capability' => 'edit_theme_options',
  ) );


  /**
   * Add the Social Media section
   */
  engine_Kirki::add_section( 'social', array(
  	'title'      => esc_attr__( 'Social Media', 'engine' ),
  	'priority'   => 140,
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
  	'priority'   => 150,
  	// 'panel'      => 'menus',
  	'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the Social Media section
   */
  engine_Kirki::add_section( 'cookie_notice', array(
    'title'      => esc_attr__( 'EU Cookie Notice', 'engine' ),
    'priority'   => 160,
    // 'panel'      => 'menus',
    'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the Social Media section
   */
  engine_Kirki::add_section( 'code_injection', array(
  	'title'      => esc_attr__( 'Code Injection', 'engine' ),
  	'priority'   => 170,
  	// 'panel'      => 'menus',
  	'capability' => 'edit_theme_options',
  ) );


}

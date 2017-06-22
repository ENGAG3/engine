<?php

// Check if Kirki plugin is active
if ( class_exists( 'kirki' ) ) {




   /*
    * Sections
    *
    *
    *
    */

  //
  // /**
  //  * Add the header section
  //  */
  // engine_Kirki::add_section( 'topbar', array(
  //   'title'      => esc_attr__( 'Top Bar', 'engine' ),
  //   'priority'   => 10,
  //   // 'panel'      => 'colors',
  //   'capability' => 'edit_theme_options',
  // ) );

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
       'title'       => __( 'Menus', 'engine' ),
      //  'description' => __( 'My Description', 'engine' ),
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
  *
  *
  *
  */

  /**
   * Add Color Panel
   */
  engine_Kirki::add_section( 'title_tagline', array(
      'priority'    => 10,
      'title'    => __( 'Site Identity' ),
      // 'description' => __( 'My Description', 'engine' ),
  ) );

  /**
   * Add the layout section
   */
  engine_Kirki::add_section( 'layout', array(
    'title'      => esc_attr__( 'Layout', 'engine' ),
    'priority'   => 20,
    'capability' => 'edit_theme_options',
  ) );

  /**
   * Add the typography section
   */
  engine_Kirki::add_section( 'typography', array(
  	'title'      => esc_attr__( 'Typography', 'engine' ),
  	'priority'   => 30,
  	// 'panel'      => 'menus',
  	'capability' => 'edit_theme_options',
  ) );



  /**
   * Add Color Panel
   */


      /**
       * Add the typography section
       */
    engine_Kirki::add_section( 'forms', array(
    	'title'      => esc_attr__( 'Buttions & Forms', 'engine' ),
    	'priority'   => 40,
    	'capability' => 'edit_theme_options',
    ) );


  /**
   * Add the Social Media section
   */
  engine_Kirki::add_section( 'social', array(
  	'title'      => esc_attr__( 'Social Media', 'engine' ),
  	'priority'   => 50,
  	'capability' => 'edit_theme_options',
  ) );


  /*
   *  Advanced
   */


  /**
   * Add the Social Media section
   */
  engine_Kirki::add_section( 'code_injection', array(
  	'title'      => esc_attr__( 'Code Injection', 'engine' ),
  	'priority'   => 30,
  	// 'panel'      => 'menus',
  	'capability' => 'edit_theme_options',
  ) );

}

<?php
// 404 page

// Check if beaver builder is active
if (class_exists('elementor')) {

   /**
    * Add error template toggle
    */

    engine_Kirki::add_field( 'engine_theme', array(
    	'type'        => 'toggle',
    	'settings'    => 'error_template_toggle',
    	'label'       => __( 'Us template for error layout', 'engine' ),
    	'section'     => 'error_page',
    	'default'     => '0',
    	// 'priority'    => 10,
    ) );


  /**
   * Add error template select
   */

   engine_Kirki::add_field( 'engine_theme', array(
  	 'type'        => 'select',
  	 'settings'    => 'error_template',
  	 'label'       => __( 'Template', 'engine' ),
  	 'description' => esc_attr__( 'Select the a template to display.', 'engine' ),
  	 'section'     => 'error_page',
  	 'default'     => '',
  	//  'priority'    => 10,
  	 'multiple'    => 1,
  	 'choices'     =>  Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'fl-builder-template' ) ),

  	'active_callback'  => array(
  		array(
  			'setting'  => 'error_template_toggle',
  			'operator' => '==',
  			'value'    => 1,
  		)
  	)
   ) );

  /**
   * Code Injection
   */

   engine_Kirki::add_field( 'engine_theme', array(
     'type'     => 'textarea',
  	 'settings' => 'header_code',
  	 'label'    => __( 'Header', 'engine' ),
     'description' => esc_attr__( 'Enter code that will be injected into the "head" tag on every page of your site.', 'engine' ),
  	 'section'  => 'code_injection',
  	 'default'  => esc_attr__( '', 'engine' ),
  	//  'priority' => 10,
   ) );

   engine_Kirki::add_field( 'engine_theme', array(
     'type'     => 'textarea',
  	 'settings' => 'footer_code',
  	 'label'    => __( 'Footer', 'engine' ),
     'description' => esc_attr__( 'Enter code that will be injected into the template-defined footer on every page of your site.', 'engine' ),
  	 'section'  => 'code_injection',
  	 'default'  => esc_attr__( '', 'engine' ),
  	//  'priority' => 10,
   ) );

   engine_Kirki::add_field( 'engine_theme', array(
     'type'        => 'checkbox',
    	'settings'    => 'cookie_notice_toggle',
    	'label'       => __( 'Enable Cookie Notice', 'my_textdomain' ),
    	'section'     => 'cookie_notice',
    	'default'     => '0',
    	// 'priority'    => 10,
   ) );

   

}

<?php

// Footer



engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'footer_background_color',
	'label'       => __( 'Footer Background Color', 'engine' ),
	'section'     => 'footer',
	'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'footer_link_color',
	'label'       => __( 'Footer Text Color', 'engine' ),
	'section'     => 'footer',
	'default'     => '#777777',
	'choices'     => array(
		'alpha' => false,
	),
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'footer_link_color_active',
	'label'       => __( 'Footer Link Color', 'engine' ),
	'section'     => 'footer',
	'default'     => '',
	'choices'     => array(
		'alpha' => false,
	),
) );




if ( class_exists( 'flbuilder' ) ) {

  /**
   * Add header template toggle
   */

   engine_Kirki::add_field( 'engine_theme', array(
  	'type'        => 'toggle',
  	'settings'    => 'footer_template_toggle',
  	'label'       => __( 'Enable Template Layout', 'engine' ),
  	'section'     => 'footer',
  	'default'     => '0',
  	'priority'    => 97,
  ) );


  /**
   * Add header template select
   */

  engine_Kirki::add_field( 'engine_theme', array(
   'type'        => 'select',
   'settings'    => 'footer_template',
   'label'       => __( 'Select Template', 'engine' ),
   'description' => esc_attr__( 'Select the a template to display as the site Footer.', 'engine' ),
   'section'     => 'footer',
   'default'     => '',
   'priority'    => 98,
   'multiple'    => 1,
   'choices'     =>  Kirki_Helper::get_posts( array( 'posts_per_page' => 999, 'post_type' => 'fl-theme-layout' ) ),
   'active_callback'  => array(
  		array(
  			'setting'  => 'footer_template_toggle',
  			'operator' => '==',
  			'value'    => 1,
  		)
  	)
  ) );



  engine_Kirki::add_field( 'engine_theme', array(
    'type'        => 'footer_template_link',
    'section'     => 'footer',
    'priority'    => 99,
    'active_callback'  => array(
       array(
         'setting'  => 'footer_template_toggle',
         'operator' => '==',
         'value'    => 1,
       )
     )
  ) );




}






 /**
  * Add "Powered by ENGAG3" Toggle;
  */

	engine_Kirki::add_field( 'engine_theme', array(
	 'type'        => 'toggle',
	 'settings'    => 'e3_footer_link',
	 'label'       => __( 'Show link to ˘ Ξ Π G I Π Ξ', 'engine' ),
	 'section'     => 'footer',
	 'default'     => '1',
	 'priority'    => 100,
 ) );

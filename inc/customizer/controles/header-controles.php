<?php
// Header

 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio-image',
	'settings'    => 'header_layout',
	'label'       => __( 'Header Layout', 'engine' ),
	'section'     => 'header',
	'default'     => 'header-top',
	// 'priority'    => 20,
	'choices'     => array(
    'header-left'  	 => get_template_directory_uri() . '/assets/images/icons/header-left.svg',
		'header-top'   	 => get_template_directory_uri() . '/assets/images/icons/header-top.svg',
		'header-right'   => get_template_directory_uri() . '/assets/images/icons/header-right.svg',
	),
) );




engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'select',
	'settings'    => 'sticky_header',
	'label'       => __( 'Sticky Header', 'engine' ),
	'section'     => 'header',
	'default'     => 'disabled',
	// 'priority'    => 60,
	'choices'     => array(
		'disabled'   => esc_attr__( 'Disabled', 'engine' ),
		'enabled' 	 => esc_attr__( 'Enabled', 'engine' ),
		'mobile'  	 => esc_attr__( 'Only on mobile', 'engine' ),
		'desktop' 	 => esc_attr__( 'Only on Desktop', 'engine' ),
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
	'type'        => 'radio',
	'settings'    => 'sticky_header_style',
	'label'       => __( 'Fixed Header Style', 'engine' ),
	'section'     => 'header',
	'default'     => 'fixed',
	// 'priority'    => 70,
	'multiple'    => 1,
	'choices'     => array(
		'fixed' 		 				=> esc_attr__( 'Fixed', 'engine' ),
		'slide' 	 					=> esc_attr__( 'Slide In', 'engine' ),
		'on-scroll-up' 	 		=> esc_attr__( 'On Scroll up', 'engine' ),
	),
	'active_callback'  => array(
    array(
      'setting'  => 'header_layout',
      'operator' => '==',
      'value'    => 'header-top',
    ),
 		array(
 			'setting'  => 'sticky_header',
 			'operator' => '!=',
 			'value'    => 'disabled',
 		)
 	)
) );

engine_Kirki::add_field( 'engine_theme', array(
  'type'        => 'slider',
	'settings'    => 'header_width_desktop',
	'label'       => esc_attr__( 'Header Width (desktop)', 'engine' ),
	'section'     => 'header',
	'default'     => 28,
	'choices'     => array(
		'min'  => '18',
		'max'  => '40',
		'step' => '1',
	),
	'active_callback'  => array(
    array(
      'setting'  => 'header_layout',
      'operator' => '!=',
      'value'    => 'header-top',
    )
 	)
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'header_background_color',
	'label'       => __( 'Header Background Color', 'engine' ),
	'section'     => 'header',
	'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'header_link_color',
	'label'       => __( 'Header Text Color', 'engine' ),
	'section'     => 'header',
	'default'     => '#777777',
	'choices'     => array(
		'alpha' => false,
	),
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'header_link_color_active',
	'label'       => __( 'Header Link Color', 'engine' ),
	'section'     => 'header',
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
    	'settings'    => 'header_template_toggle',
    	'label'       => __( 'Us template for Header layout', 'engine' ),
    	'section'     => 'header',
    	'default'     => '0',
    	// 'priority'    => 10,
    ) );


  /**
   * Add header template select
   */

   engine_Kirki::add_field( 'engine_theme', array(
  	 'type'        => 'select',
  	 'settings'    => 'header_template',
  	 'label'       => __( 'Template', 'engine' ),
  	 'description' => esc_attr__( 'Select the a template to display.', 'engine' ),
  	 'section'     => 'header',
  	 'default'     => '',
  	//  'priority'    => 10,
  	 'multiple'    => 1,
  	 'choices'     =>  Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'fl-theme-layout' ) ),

  	'active_callback'  => array(
  		array(
  			'setting'  => 'header_template_toggle',
  			'operator' => '==',
  			'value'    => 1,
  		)
  	)
   ) );

   engine_Kirki::add_field( 'engine_theme', array(
     'type'        => 'footer_template_link',
     'section'     => 'header',
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

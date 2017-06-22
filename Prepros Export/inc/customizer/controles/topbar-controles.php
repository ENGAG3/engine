<?php



// Top Bar

engine_Kirki::add_field( 'engine_theme', array(
  'type'        => 'toggle',
  'settings'    => 'topbar_toggle',
  'label'       => __( 'Enable Top Bar', 'engine' ),
  'section'     => 'topbar',
  'default'     => '0',
  // 'priority'    => 10,
) );


engine_Kirki::add_field( 'engine_theme', array(
  'type'        => 'checkbox',
  'settings'    => 'topbar_desktop',
  'label'       => __( 'Desktop', 'engine' ),
  'section'     => 'topbar',
  'default'     => '1',
  'active_callback'  => array(
    array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => '1',
    )
  )
) );

engine_Kirki::add_field( 'engine_theme', array(
  'type'        => 'checkbox',
  'settings'    => 'topbar_tablet',
  'label'       => __( 'Tablet', 'engine' ),
  'section'     => 'topbar',
  'default'     => '1',
  'active_callback'  => array(
    array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => '1',
    )
  )
) );

engine_Kirki::add_field( 'engine_theme', array(
  'type'        => 'checkbox',
  'settings'    => 'topbar_phone',
  'label'       => __( 'Phone', 'engine' ),
  'section'     => 'topbar',
  'default'     => '1',
  'active_callback'  => array(
    array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => '1',
    )
  )
) );


if ( class_exists( 'flbuilder' ) ) {

   /**
    * Add header template toggle
    */

    engine_Kirki::add_field( 'engine_theme', array(
    	'type'        => 'toggle',
    	'settings'    => 'topbar_template_toggle',
    	'label'       => __( 'Us template for Top Bar', 'engine' ),
    	'section'     => 'topbar',
    	'default'     => '0',
      'active_callback'  => array(
        array(
          'setting'  => 'topbar_toggle',
          'operator' => '==',
          'value'    => '1',
        )
     	)
    ) );


  /**
   * Add header template select
   */

   engine_Kirki::add_field( 'engine_theme', array(
  	 'type'        => 'select',
  	 'settings'    => 'topbar_template',
  	 'label'       => __( 'Template', 'engine' ),
  	 'description' => esc_attr__( 'Select the a template to display.', 'engine' ),
  	 'section'     => 'topbar',
  	 'default'     => '',
  	//  'priority'    => 10,
  	 'multiple'    => 1,
  	 'choices'     =>  Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'fl-theme-layout' ) ),

     'active_callback'  => array(
       array(
         'setting'  => 'topbar_toggle',
         'operator' => '==',
         'value'    => '1',
       ),
       array(
         'setting'  => 'topbar_template_toggle',
         'operator' => '==',
         'value'    => '1',
       )
     )
   ) );

}


engine_Kirki::add_field( 'engine_theme', array(
  'type'     => 'textarea',
	'settings' => 'topbar_content',
	'label'    => __( 'Content', 'engine' ),
	'section'  => 'topbar',
	'default'  => esc_attr__( 'This is a defualt value', 'engine' ),
  'active_callback'  => array(
    array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => '1',
    ),
    array(
      'setting'  => 'topbar_template_toggle',
      'operator' => '==',
      'value'    => '0',
    )
  )
) );

engine_Kirki::add_field( 'engine_theme', array(
  'type'        => 'toggle',
  'settings'    => 'topbar_social',
  'label'       => __( 'Show Social Icons', 'engine' ),
  'section'     => 'topbar',
  'default'     => '1',
  'active_callback'  => array(
    array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => '1',
    ),
    array(
      'setting'  => 'topbar_template_toggle',
      'operator' => '==',
      'value'    => '0',
    )
  )
  // 'priority'    => 10,
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'topbar_background_color',
	'label'       => __( 'Header Background Color', 'engine' ),
	'section'     => 'topbar',
	'default'     => '#080808',
	'choices'     => array(
		'alpha' => false,
	),
  'active_callback'  => array(
    array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => '1',
    )
  )
) );



engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'topbar_link_color',
	'label'       => __( 'Header Text Color', 'engine' ),
	'section'     => 'topbar',
	'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
  'active_callback'  => array(
    array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => '1',
    )
  )
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'topbar_link_color_active',
	'label'       => __( 'Header Link Color', 'engine' ),
	'section'     => 'topbar',
	'default'     => '',
	'choices'     => array(
		'alpha' => false,
	),
  'active_callback'  => array(
    array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => '1',
    )
  )
) );

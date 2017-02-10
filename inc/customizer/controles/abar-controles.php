<?php

engine_Kirki::add_field( 'abar_toggle', array(
  'type'     => 'toggle',
  'settings' => 'abar_toggle',
  'label'    => __( 'Inable Announcement Bar', 'engine' ),
  'section'  => 'announcement_bar',
  'default'  => 0,
  // 'priority' => 10,
) );


if (class_exists('Element_Base')) {
  /**
   * Add header template toggle
   */
   engine_Kirki::add_field( 'engine_theme', array(
  	'type'        => 'toggle',
  	'settings'    => 'abar_template_toggle',
  	'label'       => __( 'Us template for Announcement Bar', 'engine' ),
  	'section'     => 'announcement_bar',
  	'default'     => '0',
  	// 'priority'    => 90,
    'active_callback'  => array(
      array(
        'setting'  => 'abar_toggle',
        'operator' => '==',
        'value'    => '1',
      )
    )

  ) );

  engine_Kirki::add_field( 'engine_theme', array(
  	'type'        => 'select',
  	'settings'    => 'abar_template',
  	'label'       => __( 'Template', 'engine' ),
  	'description' => esc_attr__( 'Select the a template to display.', 'engine' ),
  	'section'     => 'announcement_bar',
  	'default'     => '',
  	// 'priority'    => 100,
  	'multiple'    => 1,
  	'choices'     =>  Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'fl-builder-template' ) ),
    'active_callback'  => array(
      array(
        'setting'  => 'abar_template_toggle',
        'operator' => '==',
        'value'    => 1,
      ),
      array(
        'setting'  => 'abar_toggle',
        'operator' => '==',
        'value'    => 1,
      )
    )
  ) );

  engine_Kirki::add_field( 'engine_theme', array(
    'type'     => 'textarea',
    'settings' => 'abar_message',
    'label'    => __( 'Message', 'engine' ),
    'section'  => 'announcement_bar',
    'default'  => esc_attr__( 'Free Shipping on all orders over $00', 'engine' ),
    'active_callback'  => array(
      array(
        'setting'  => 'abar_template_toggle',
        'operator' => '==',
        'value'    => 0,
      ),
      array(
        'setting'  => 'abar_toggle',
        'operator' => '==',
        'value'    => 1,
      )
    )
  ) );

  engine_Kirki::add_field( 'engine_theme', array(
    'type'     => 'text',
  	'settings' => 'abar_link',
  	'label'    => __( 'Link', 'engine' ),
  	'section'  => 'announcement_bar',
    'active_callback'  => array(
      array(
        'setting'  => 'abar_template_toggle',
        'operator' => '==',
        'value'    => 0,
      ),
      array(
        'setting'  => 'abar_toggle',
        'operator' => '==',
        'value'    => 1,
      )
    )
  ) );

  engine_Kirki::add_field( 'engine_theme', array(
    'type'     => 'text',
    'settings' => 'abar_button_title',
    'label'    => __( 'Button Title', 'engine' ),
    'section'  => 'announcement_bar',
    'default'  => esc_attr__( 'Show Now', 'engine' ),
    'active_callback'  => array(
      array(
        'setting'  => 'abar_template_toggle',
        'operator' => '==',
        'value'    => 0,
      ),
      array(
        'setting'  => 'abar_toggle',
        'operator' => '==',
        'value'    => 1,
      )
    )
  ) );


} else {

  engine_Kirki::add_field( 'abar_message', array(
    'type'     => 'textarea',
    'settings' => 'abar_message',
    'label'    => __( 'Message', 'engine' ),
    'section'  => 'announcement_bar',
    'default'  => esc_attr__( 'Free Shipping on all orders over $00', 'engine' ),
    'active_callback'  => array(
      array(
        'setting'  => 'abar_toggle',
        'operator' => '==',
        'value'    => 1,
      )
    )
  ) );

  engine_Kirki::add_field( 'engine_theme', array(
    'type'     => 'text',
    'settings' => 'abar_link',
    'label'    => __( 'Link', 'engine' ),
    'section'  => 'announcement_bar',
    'active_callback'  => array(
      array(
        'setting'  => 'abar_toggle',
        'operator' => '==',
        'value'    => 1,
      )
    )
  ) );

  engine_Kirki::add_field( 'engine_theme', array(
    'type'     => 'text',
    'settings' => 'abar_button_title',
    'label'    => __( 'Button Title', 'engine' ),
    'section'  => 'announcement_bar',
    'default'  => esc_attr__( 'Show Now', 'engine' ),
    'active_callback'  => array(
      array(
        'setting'  => 'abar_toggle',
        'operator' => '==',
        'value'    => 1,
      )
    )
  ) );

}


engine_Kirki::add_field( 'abar_positon', array(
  'type'        => 'select',
	'settings'    => 'abar_positon',
	'label'       => __( 'Position', 'engine' ),
	'section'     => 'announcement_bar',
	'default'     => 'top',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'top' => esc_attr__( 'Above Menu',     'engine' ),
		'menu' => esc_attr__( 'After Menu', 'engine' ),
    'bottom' => esc_attr__( 'Floating (Bottom)',  'engine' ),
	),
  'active_callback'  => array(
    array(
      'setting'  => 'abar_toggle',
      'operator' => '==',
      'value'    => '1',
    )
  )
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'abar_background_color',
	'label'       => __( 'Background Color', 'engine' ),
	'section'     => 'announcement_bar',
	'default'     => '#2ea3f2',
	'choices'     => array(
		'alpha' => false,
	),
  'active_callback'  => array(
    array(
      'setting'  => 'abar_toggle',
      'operator' => '==',
      'value'    => '1',
    )
  )
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'abar_text_color',
	'label'       => __( 'Text Color', 'engine' ),
	'section'     => 'announcement_bar',
	'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
  'active_callback'  => array(
    array(
      'setting'  => 'abar_toggle',
      'operator' => '==',
      'value'    => '1',
    )
  )
) );

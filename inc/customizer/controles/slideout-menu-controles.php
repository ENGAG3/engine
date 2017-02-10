<?php


/**
 * Add Slideout Menu enabler
 */

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'select',
	'settings'    => 'slideout_menu',
	'label'       => __( 'Slideout Menu', 'engine' ),
	'section'     => 'slideout',
	'default'     => 'mobile',
	// 'priority'    => 85,
	'choices'     => array(
		'disabled'   => esc_attr__( 'Disabled', 'engine' ),
		'enabled' 	 => esc_attr__( 'Enabled', 'engine' ),
		'mobile'  	 => esc_attr__( 'Only on mobile', 'engine' ),
		'desktop'  	 => esc_attr__( 'Only on Desktop', 'engine' ),
	),
) );



if (class_exists('Element_Base')) {


/**
 * Add header template toggle
 */

 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'toggle',
	'settings'    => 'slideout_menu_template_toggle',
	'label'       => __( 'Us template for Slideout Menu', 'engine' ),
	'section'     => 'slideout',
	'default'     => '0',
	// 'priority'    => 90,
	'active_callback'  => array(
		array(
			'setting'  => 'slideout_menu',
			'operator' => '!=',
			'value'    => 'disabled',
		)
	)
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'select',
	'settings'    => 'slideout_menu_template',
	'label'       => __( 'Template', 'engine' ),
	'description' => esc_attr__( 'Select the a template to display.', 'engine' ),
	'section'     => 'slideout',
	'default'     => '',
	// 'priority'    => 100,
	'multiple'    => 1,
	'choices'     =>  Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'fl-builder-template' ) ),
	'active_callback'  => array(
		array(
			'setting'  => 'slideout_menu_template_toggle',
			'operator' => '==',
			'value'    => 1,
		),
		array(
			'setting'  => 'slideout_menu',
			'operator' => '!=',
			'value'    => 'disabled',
		)
	)
) );

}


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'select',
	'settings'    => 'slideout_menu_style',
	'label'       => __( 'Slideout Menu Style', 'engine' ),
	'section'     => 'slideout',
	'default'     => 'off-canvas-left',
	// 'priority'    => 100,
	'multiple'    => 1,
	'choices'     => array(
		'off-canvas-left' 		=> esc_attr__( 'Slide Out Left', 'engine' ),
		'off-canvas-right' 		=> esc_attr__( 'Slide Out Right', 'engine' ),
		// 'swipe-left' 					=> esc_attr__( 'Swipe Left', 'engine' ),
		'overlay' 		 				=> esc_attr__( 'Overlay',   'engine' ),
		'dropdown' 	 					=> esc_attr__( 'DropDown',  'engine' ),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'slideout_menu',
			'operator' => '!=',
			'value'    => 'disabled',
		)
	)
) );




engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'slideout_background_color',
	'label'       => __( 'Slideout Background Color', 'engine' ),
	'section'     => 'slideout',
	'default'     => '#222222',
	'choices'     => array(
		'alpha' => true,
	),
	'active_callback'  => array(
		array(
			'setting'  => 'slideout_menu',
			'operator' => '!=',
			'value'    => 'disabled',
		)
	)
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'slideout_link_color',
	'label'       => __( 'Slideout Text Color', 'engine' ),
	'section'     => 'slideout',
	'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
	'active_callback'  => array(
		array(
			'setting'  => 'slideout_menu',
			'operator' => '!=',
			'value'    => 'disabled',
		)
	)
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'slideout_link_color_active',
	'label'       => __( 'Slideout Link Color', 'engine' ),
	'section'     => 'slideout',
	'default'     => '#2ea3f2',
	'choices'     => array(
		'alpha' => false,
	),
	'active_callback'  => array(
		array(
			'setting'  => 'slideout_menu',
			'operator' => '!=',
			'value'    => 'disabled',
		)
	)
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'slideout_overlay',
	'label'       => __( 'Slideout Overlay', 'engine' ),
	'section'     => 'slideout',
	'default'     => 'rgba(0,0,0,0.75)',
	'choices'     => array(
		'alpha' => true,
	),
	'active_callback'  => array(
		array(
			'setting'  => 'slideout_menu',
			'operator' => '!=',
			'value'    => 'disabled',
		),
		array(
			'setting'  => 'slideout_menu_style',
			'operator' => '!=',
			'value'    => 'dropdown',
		),
		array(
			'setting'  => 'slideout_menu_style',
			'operator' => '!=',
			'value'    => 'swipe-left',
		),
		array(
			'setting'  => 'slideout_menu_style',
			'operator' => '!=',
			'value'    => 'overlay',
		),
	)
) );

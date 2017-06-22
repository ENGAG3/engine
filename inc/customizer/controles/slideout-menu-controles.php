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





// }


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
	'default'     => '',
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

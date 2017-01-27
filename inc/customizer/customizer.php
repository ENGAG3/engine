<?php
/**
 * engine Theme Customizer.
 *
 * @package engine
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function engine_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'engine_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function engine_customize_preview_js() {
	wp_enqueue_script( 'engine_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'engine_customize_preview_js' );



// Check if bbPress plugin is loaded
if ( class_exists( 'kirki' ) ) {
    // bbPress is enabled so let's begin


/**
 * Add the theme configuration
 */
engine_Kirki::add_config( 'engine_theme', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );


/**
 * Add the layout section
 */
engine_Kirki::add_section( 'layout', array(
	'title'      => esc_attr__( 'Layout', 'engine' ),
	'priority'   => 30,
	'capability' => 'edit_theme_options',
) );

/**
 * Add the typography section
 */
engine_Kirki::add_section( 'colors', array(
	'title'      => esc_attr__( 'Colors', 'engine' ),
	'priority'   => 40,
	'capability' => 'edit_theme_options',
) );


/**
 * Add Advanced Panel
 */
engine_Kirki::add_panel( 'advanced', array(
    'priority'    => 200,
    'title'       => __( 'Advanced', 'engine' ),
    'description' => __( 'My Description', 'engine' ),
) );

/**
 * Add the typography section
 */
engine_Kirki::add_section( 'typography', array(
	'title'      => esc_attr__( 'Typography', 'engine' ),
	'priority'   => 50,
	// 'panel'      => 'menus',
	'capability' => 'edit_theme_options',
) );



/**
 * Add the header section
 */
engine_Kirki::add_section( 'header', array(
	'title'      => esc_attr__( 'Header', 'engine' ),
	'priority'   => 60,
	'capability' => 'edit_theme_options',
) );



/**
 * Add the footer section
 */
engine_Kirki::add_section( 'footer', array(
	'title'      => esc_attr__( 'Footer', 'engine' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
) );













// Site identaty

/**
 * Add site logo
 */

// engine_Kirki::add_field( 'engine_theme', array(
// 	'type'        => 'image',
// 	'settings'    => 'site_logo',
// 	'label'       => __( 'Logo', 'engine' ),
// 	// 'description' => __( 'This is the control description', 'engine' ),
// 	// 'help'        => __( 'This is some extra help text.', 'engine' ),
// 	'section'     => 'title_tagline',
// 	'default'     => '',
// 	'priority'    => 10,
// ) );
//
//
//
//
//
//
//





 // Content

 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'toggle',
	'settings'    => 'boxed_layout',
	'label'       => __( 'Enable Boxed Layout', 'engine' ),
	'section'     => 'layout',
	'default'     => '0',
	'priority'    => 10,
) );

 engine_Kirki::add_field( 'engine_theme', array(
 	'type'        => 'slider',
 	'settings'    => 'content_width',
 	'label'       => esc_attr__( 'Website Content Width', 'engine' ),
 	'section'     => 'layout',
	// 'priority'    => 1,
 	'default'     => 1080,
 	'choices'     => array(
 		'min'  => '960',
 		'max'  => '1920',
 		'step' => '10',
 	),
 ) );


 engine_Kirki::add_field( 'engine_theme', array(
 	'type'        => 'slider',
 	'settings'    => 'medium_device_breakpoint',
 	'label'       => esc_attr__( 'Medium Device Breakpoint', 'engine' ),
 	'section'     => 'layout',
	// 'priority'    => 1,
 	'default'     => 992,
 	'choices'     => array(
 		'min'  => '900',
 		'max'  => '1200',
 		'step' => '10',
 	),
 ) );


 engine_Kirki::add_field( 'engine_theme', array(
 	'type'        => 'slider',
 	'settings'    => 'small_device_breakpoint',
 	'label'       => esc_attr__( 'small Device Breakpoint', 'engine' ),
 	'section'     => 'layout',
	// 'priority'    => 2,
 	'default'     => 768,
 	'choices'     => array(
 		'min'  => '200',
 		'max'  => '900',
 		'step' => '10',
 	),
 ) );


 engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'radio-image',
 'settings'    => 'content_layout_style',
 'label'       => __( 'Content Layout Style', 'engine' ),
 'section'     => 'layout',
 'default'     => 'content-layout-single',
 // 'priority'    => 10,
 'choices'     => array(
	 'content-layout-single' => get_template_directory_uri() . '/assets/images/icons/lined-containers.svg',
	 'content-layout-boxed'  => get_template_directory_uri() . '/assets/images/icons/boxed-containers.svg',
 ),
) );



 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'toggle',
	'settings'    => 'page_sidebar',
	'label'       => __( 'Enable Sidebar', 'engine' ),
	'section'     => 'layout',
	'default'     => '1',
// 	'priority'    => 10,
) );

 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio-image',
	'settings'    => 'page_sidebar_layout',
	'label'       => __( 'Sidebar Posistion', 'engine' ),
	'section'     => 'layout',
	'default'     => 'content-sidebar',
	// 'priority'    => 10,
	'choices'     => array(
		'sidebar-content'   				=> get_template_directory_uri() . '/assets/images/icons/sidebar-content.svg',
		'sidebar-content-sidebar'   => get_template_directory_uri() . '/assets/images/icons/sidebar-content-sidebar.svg',
		'content-sidebar'   				=> get_template_directory_uri() . '/assets/images/icons/content-sidebar.svg',
	),
	'active_callback'  => array(
		array(
			'setting'  => 'page_sidebar',
			'operator' => '==',
			'value'    => '1',
		)
	)
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'main_slider_width',
	'label'       => esc_attr__( 'Side Bar Width', 'engine' ),
	'section'     => 'layout',
	'default'     => 28,
	'choices'     => array(
		'min'  => '5',
		'max'  => '40',
		'step' => '1',
	),
	'active_callback'  => array(
		array(
			'setting'  => 'page_sidebar',
			'operator' => '==',
			'value'    => '1',
		)
	)
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'secondary_slider_width',
	'label'       => esc_attr__( 'Second Side Bar Width', 'engine' ),
	'section'     => 'layout',
	'default'     => 20,
	'choices'     => array(
		'min'  => '5',
		'max'  => '40',
		'step' => '1',
	),
	'active_callback'  => array(
		array(
			'setting'  => 'page_sidebar',
			'operator' => '==',
			'value'    => '1',
		),
		array(
			'setting'  => 'page_sidebar_layout',
			'operator' => '==',
			'value'    => 'sidebar-content-sidebar',
		)
	)
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'body_background_color',
	'label'       => __( 'Background Color', 'engine' ),
	'section'     => 'layout',
	'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'content_background_color',
	'label'       => __( 'Content Background Color', 'engine' ),
	'section'     => 'layout',
	'default'     => '#ffffff',
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'body_background_toggle',
	'label'       => __( 'Background Image', 'engine' ),
	'section'     => 'layout',
	'default'     => '0',
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'image',
	'settings'    => 'body_background_image',
	'label'       => __( 'Background Image', 'engine' ),
	'description' => __( 'This is the control description', 'engine' ),
	'help'        => __( 'This is some extra help text.', 'engine' ),
	'section'     => 'layout',
	'active_callback'  => array(
		array(
			'setting'  => 'body_background_toggle',
			'operator' => '==',
			'value'    => '1',
		),
	)
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'content_background_overlay',
	'label'       => __( 'Background Image Overlay', 'engine' ),
	'section'     => 'layout',
	'default'     => 'rgba(0,0,0,0)',
	'choices'     => array(
		'alpha' => true,
	),
	'active_callback'  => array(
		array(
			'setting'  => 'body_background_toggle',
			'operator' => '==',
			'value'    => '1',
		),
	)
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'body_background_repeat',
	'label'       => __( 'Background Repeat', 'engine' ),
	'section'     => 'layout',
	'default'     => 'cover',
	// 'priority'    => 10,
	'choices'     => array(
		'cover'   => esc_attr__( 'Cover', 'engine' ),
		'repeat'   => esc_attr__( 'Tile', 'engine' ),
		'repeat-x' => esc_attr__( 'Tile Horizontally', 'engine' ),
		'repeat-y'  => esc_attr__( 'Tile Vertically', 'engine' ),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'body_background_toggle',
			'operator' => '==',
			'value'    => '1',
		),
	)
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'body_background_style',
	'label'       => __( 'Background Repeat', 'engine' ),
	'section'     => 'layout',
	'default'     => 'scroll',
	'choices'     => array(
		'scroll' => esc_attr__( 'Scroll', 'engine' ),
		'fixed'  => esc_attr__( 'Fixed', 'engine' ),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'body_background_toggle',
			'operator' => '==',
			'value'    => '1',
		),
	)
) );



























// Typography


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'body_font_size',
	'label'       => esc_attr__( 'Body Font Size', 'engine' ),
	'section'     => 'Typography',
	'default'     => 15,
	'choices'     => array(
		'min'  => '8',
		'max'  => '32',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'body_line_height',
	'label'       => esc_attr__( 'Body Line Height', 'engine' ),
	'section'     => 'Typography',
	'default'     => 1.7,
	'choices'     => array(
		'min'  => '0.8',
		'max'  => '3',
		'step' => '0.1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'header_font_size',
	'label'       => esc_attr__( 'Header Font Size', 'engine' ),
	'section'     => 'Typography',
	'default'     => 32,
	'choices'     => array(
		'min'  => '22',
		'max'  => '72',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'header_letter_spacing',
	'label'       => esc_attr__( 'Header Letter Spacing', 'engine' ),
	'section'     => 'Typography',
	'default'     => 0,
	'choices'     => array(
		'min'  => '-4',
		'max'  => '12',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'header_line_height',
	'label'       => esc_attr__( 'Header Line Height', 'engine' ),
	'section'     => 'Typography',
	'default'     => 2.5,
	'choices'     => array(
		'min'  => '0.8',
		'max'  => '3',
		'step' => '0.1',
	),
) );



// engine_Kirki::add_field( 'engine_theme', array(
// 	'type'        => 'multicheck',
// 	'settings'    => 'header_font_style',
// 	'label'       => __( 'Header Font Style', 'engine' ),
// 	'section'     => 'typography',
// 	'priority'    => 10,
// 	'choices'     => array(
// 		'bold'   			=> esc_attr__( 'B', 'engine' ),
// 		'italic' 			=> esc_attr__( 'I', 'engine' ),
// 		'uppercase'  	=> esc_attr__( 'TT', 'engine' ),
// 		'underline'  	=> esc_attr__( 'U', 'engine' ),
// 	),
// ) );


/**
 * Add the body-typography control
 */
engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'typography',
	'settings'    => 'body_font',
	'label'       => esc_attr__( 'Body Font', 'engine' ),
	'description' => esc_attr__( 'Select the main typography options for your site.', 'engine' ),
	'help'        => esc_attr__( 'The typography options you set here apply to all content on your site.', 'engine' ),
	'section'     => 'typography',
	'priority'    => 10,
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '400',
		// 'font-size'      => '16px',
		// 'line-height'    => '1.5',
		// 'letter-spacing' => '0',
		// 'color'          => '#333333',
	),
	'output' => array(
		array(
			'element' => 'body',
		),
	),
) );

/**
 * Add the body-typography control
 */
engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'typography',
	'settings'    => 'headers_font',
	'label'       => esc_attr__( 'Headers Font', 'engine' ),
	'description' => esc_attr__( 'Select the typography options for your headers.', 'engine' ),
	'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).', 'engine' ),
	'section'     => 'typography',
	'priority'    => 10,
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '400',
		// 'font-size'      => '16px',
		// 'line-height'    => '1.5',
		// 'letter-spacing' => '0',
		// 'color'          => '#333333',
	),
	'output' => array(
		array(
			'element' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', '.h1', '.h2', '.h3', '.h4', '.h5', '.h6' ),
		),
	),
) );


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'body_link_color',
	'label'       => __( 'Link Color', 'engine' ),
	'section'     => 'typography',
	'default'     => '#2ea3f2',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'body_text_color',
	'label'       => __( 'Body Text Color', 'engine' ),
	'section'     => 'typography',
	'default'     => '#666666',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'header_text_color',
	'label'       => __( 'Header Text Color', 'engine' ),
	'section'     => 'typography',
	'default'     => '#444444',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );



// engine_Kirki::add_field( 'my_config', array(
// 	'type'        => 'upload',
// 	'settings'    => 'display_font_woff2',
// 	'label'       => __( 'Display Font (WOFF2)', 'engine' ),
// 	'description' => __( 'This is the control description', 'engine' ),
// 	'help'        => __( 'This is some extra help text.', 'engine' ),
// 	'section'     => 'typography',
// 	// 'default'     => '',
// 	// 'priority'    => 10,
// ) );









// Colors

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'button_font_size',
	'label'       => esc_attr__( 'Text Size', 'engine' ),
	'section'     => 'colors',
	'default'     => 16,
	'choices'     => array(
		'min'  => '5',
		'max'  => '32',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'button_padding',
	'label'       => esc_attr__( 'Padding', 'engine' ),
	'section'     => 'colors',
	'default'     => 14,
	'choices'     => array(
		'min'  => '8',
		'max'  => '50',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_text_color',
	'label'       => __( 'Text Color', 'engine' ),
	'section'     => 'colors',
	'default'     => '#ffffff',
	// 'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_text_color_hover',
	'label'       => __( 'Text Color', 'engine' ),
	'section'     => 'colors',
	'default'     => '#ffffff',
	// 'priority'    => 10,
	'choices'     => array(
		'alpha' => false,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_background_color',
	'label'       => __( 'Background Color', 'engine' ),
	'section'     => 'colors',
	'default'     => 'rgba(50,50,50,1)',
	// 'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_background_color_hover',
	'label'       => __( 'Background Color', 'engine' ),
	'section'     => 'colors',
	'default'     => 'rgba(34, 121, 163, 1)',
	// 'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'typography',
	'settings'    => 'button_font',
	'label'       => esc_attr__( 'Button Font', 'engine' ),
	'section'     => 'colors',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '400',
	),
	'output' => array(
		array(
			'element' => array( 'button', 'input' ),
		),
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'button_border_color',
	'label'       => __( 'Border Color', 'engine' ),
	'section'     => 'colors',
	'default'     => 'rgba(0,0,0,1)',
	'choices'     => array(
		'alpha' => true,
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'button_border_size',
	'label'       => esc_attr__( 'Border Width', 'engine' ),
	'section'     => 'colors',
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '10',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'slider',
	'settings'    => 'button_border_radius',
	'label'       => esc_attr__( 'Border Radius', 'engine' ),
	'section'     => 'colors',
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '50',
		'step' => '1',
	),
) );

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'color',
	'settings'    => 'field_background_color',
	'label'       => __( 'Field Background', 'engine' ),
	'section'     => 'colors',
	'default'     => 'rgba(50,50,50,1)',
	'choices'     => array(
		'alpha' => true,
	),
) );









// Header


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
	 'choices'     =>  Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'fl-builder-template' ) ),

	'active_callback'  => array(
		array(
			'setting'  => 'header_template_toggle',
			'operator' => '==',
			'value'    => 1,
		)
	)
 ) );


 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio-image',
	'settings'    => 'header_layout',
	'label'       => __( 'Header Layout', 'engine' ),
	'section'     => 'header',
	'default'     => 'header-top',
	// 'priority'    => 20,
	'choices'     => array(
		'header-top'   	 => get_template_directory_uri() . '/assets/images/icons/header-top.svg',
		'header-left'  	 => get_template_directory_uri() . '/assets/images/icons/header-left.svg',
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
 			'setting'  => 'sticky_header',
 			'operator' => '!=',
 			'value'    => 'disabled',
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
	'default'     => '#2ea3f2',
	'choices'     => array(
		'alpha' => false,
	),
) );
















// Slideout Menu


/**
 * Add Slideout Menu enabler
 */

engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'select',
	'settings'    => 'slideout_menu',
	'label'       => __( 'Slideout Menu', 'engine' ),
	'section'     => 'header',
	'default'     => 'mobile',
	// 'priority'    => 85,
	'choices'     => array(
		'disabled'   => esc_attr__( 'Disabled', 'engine' ),
		'enabled' 	 => esc_attr__( 'Enabled', 'engine' ),
		'mobile'  	 => esc_attr__( 'Only on mobile', 'engine' ),
		'desktop'  	 => esc_attr__( 'Only on Desktop', 'engine' ),
	),
) );


/**
 * Add header template toggle
 */

 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'toggle',
	'settings'    => 'slideout_menu_template_toggle',
	'label'       => __( 'Us template for Slideout Menu', 'engine' ),
	'section'     => 'header',
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
	'section'     => 'header',
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


engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'select',
	'settings'    => 'slideout_menu_style',
	'label'       => __( 'Slideout Menu Style', 'engine' ),
	'section'     => 'header',
	'default'     => 'off-canvas-left',
	// 'priority'    => 100,
	'multiple'    => 1,
	'choices'     => array(
		'off-canvas-left' 		=> esc_attr__( 'Slide Out Left', 'engine' ),
		'off-canvas-right' 		=> esc_attr__( 'Slide Out Right', 'engine' ),
		'swipe-left' 					=> esc_attr__( 'Swipe Left', 'engine' ),
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
	'section'     => 'header',
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
	'section'     => 'header',
	'default'     => '#555555',
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
	'section'     => 'header',
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
	'section'     => 'header',
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
















// Footer


/**
 * Add header template toggle
 */

 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'toggle',
	'settings'    => 'footer_template_toggle',
	'label'       => __( 'Us a template for footer layout', 'engine' ),
	'section'     => 'footer',
	'default'     => '0',
	// 'priority'    => 10,
) );


/**
 * Add header template select
 */

engine_Kirki::add_field( 'engine_theme', array(
 'type'        => 'select',
 'settings'    => 'footer_template',
 'label'       => __( 'Template', 'engine' ),
 'description' => esc_attr__( 'Select the a template to display.', 'engine' ),
 'section'     => 'footer',
 'default'     => '',
 // 'priority'    => 10,
 'multiple'    => 1,
 'choices'     =>  Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'fl-builder-template' ) ),
 'active_callback'  => array(
		array(
			'setting'  => 'footer_template_toggle',
			'operator' => '==',
			'value'    => 1,
		)
	)
) );

 engine_Kirki::add_field( 'engine_theme', array(
	'type'        => 'radio-image',
	'settings'    => 'footer_widget_layout',
	'label'       => __( 'Footer Columns', 'engine' ),
	'section'     => 'footer',
	'default'     => 'sidebar-content',
	// 'priority'    => 50,
	'choices'     => array(
		'column-0'		=> get_template_directory_uri() . '/assets/images/icons/0-column.svg',
		'column-1'		=> get_template_directory_uri() . '/assets/images/icons/1-column.svg',
		'column-2'		=> get_template_directory_uri() . '/assets/images/icons/2-column.svg',
		'column-3'		=> get_template_directory_uri() . '/assets/images/icons/3-column.svg',
		'column-4'		=> get_template_directory_uri() . '/assets/images/icons/4-column.svg',
		'column-4'		=> get_template_directory_uri() . '/assets/images/icons/4-column.svg',
		'column-5'		=> get_template_directory_uri() . '/assets/images/icons/5-column.svg',
	),
	'active_callback'  => array(
 		array(
 			'setting'  => 'footer_template_toggle',
 			'operator' => '==',
 			'value'    => 0,
 		)
 	)
) );


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
	'default'     => '#2ea3f2',
	'choices'     => array(
		'alpha' => false,
	),
) );


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
}



// 
//
//  /**
//   * Add Code section;
//   */
// engine_Kirki::add_field( 'engine_theme', array(
// 	'type'        => 'code',
// 	'settings'    => 'css_code',
// 	'label'       => __( 'CSS', 'engine' ),
// 	'section'     => 'code',
// 	'default'     => 'body { background: #fff; }',
// 	'priority'    => 10,
// 	'choices'     => array(
// 		'language' => 'css',
// 		'theme'    => 'monokai',
// 		'height'   => 250,
// 	),
// ) );
//
//
//  /**
//   * Add Code section;
//   */
// engine_Kirki::add_field( 'engine_theme', array(
// 	'type'        => 'code',
// 	'settings'    => 'js_code',
// 	'label'       => __( 'JS', 'engine' ),
// 	'section'     => 'code',
// 	'default'     => 'body { background: #fff; }',
// 	'priority'    => 10,
// 	'choices'     => array(
// 		'language' => 'js',
// 		'theme'    => 'monokai',
// 		'height'   => 250,
// 	),
// ) );
//
//
//
// /**
//  * Add the code section
//  */
// engine_Kirki::add_section( 'code', array(
// 	'title'      => esc_attr__( 'Code', 'engine' ),
// 	'priority'   => 100,
// 	'panel'      => 'advanced',
// 	'capability' => 'edit_theme_options',
// ) );
//
//


 /**
  * Enqueue the stylesheet.
  */
 function my_enqueue_customizer_stylesheet() {

 	wp_register_style( 'my-customizer-css', get_template_directory_uri() . '/assets/css/admin/customizer.css', 'all' );
 	wp_enqueue_style( 'my-customizer-css' );

 }
 add_action( 'customize_controls_print_styles', 'my_enqueue_customizer_stylesheet' );



// Remove sections
 add_action( 'customize_register', 'prefix_remove_css_section', 15 );
 /**
  * Remove the additional CSS section, introduced in 4.7, from the Customizer.
  * @param $wp_customize WP_Customize_Manager
  */
 function prefix_remove_css_section( $wp_customize ) {
 	$wp_customize->remove_section( 'custom_css' );
 }

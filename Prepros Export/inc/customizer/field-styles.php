<?php
function engine_field_styles() {

  // Button

  $button_font_size 		   				= get_theme_mod( 'button_font_size', 16 );
  $button_text_color 	  	 				= get_theme_mod( 'button_text_color', '#ffffff');
  $button_text_color_hover 	 			= get_theme_mod( 'button_text_color_hover', '#ffffff');
  $button_background_color 				= get_theme_mod( 'button_background_color', 'rgba(50,50,50,1)');
  $button_background_color_hover 	= get_theme_mod( 'button_background_color_hover', 'rgba(34, 121, 163, 1)');
  $button_border_size 		 				= get_theme_mod( 'button_border_size', 0);
  $button_border_radius 	 				= get_theme_mod( 'button_border_radius', 0);
  $button_border_color 	 	 				= get_theme_mod( 'button_border_color', 'rgba(0,0,0,1)');
  $button_padding 	 	 		 				= get_theme_mod( 'button_padding', 14);

  $field_background_color 	 	 		= get_theme_mod( 'field_background_color', 'rgba(50,50,50,1)');

  // Setup header font styles

  $field_styles = "
  	/*Button*/

  	.button,
  	input[type='button'],
  	input[type='reset'],
  	input[type='submit'],
  	button,
  	.button:visited,
  	input[type='button']:visited,
  	input[type='reset']:visited,
  	input[type='submit']:visited,
  	button:visited,
    .fl-builder-content a.fl-button,
    .fl-builder-content a.fl-button:visited {
  		color: {$button_text_color};
  		background-color: {$button_background_color};
  		border: solid {$button_border_size} {$button_border_color};
  		border-radius: {$button_border_radius};
  		padding: {$button_padding}px;
  	}

  	.site .fl-builder-content a.fl-button * {
  		color: {$button_text_color};
  	}


  	.button:hover,
  	input[type='button']:hover,
  	input[type='reset']:hover,
  	input[type='submit']:hover,
  	button:hover,
    .fl-builder-content a.fl-button:hover{
  		color: {$button_text_color_hover};
  		background-color: {$button_background_color_hover};
  		border: solid {$button_border_size} {$button_background_color_hover};
  	}


  	.fl-builder-content a.fl-button:hover * {
  		color: {$button_text_color_hover};
  	}

  	input[type='text'],
  	input[type='tel'],
  	input[type='email'],
  	input[type='url'],
  	input[type='password'],
  	input[type='search'],
  	input[type='number'],
  	input[type='tel'],
  	input[type='range'],
  	input[type='date'],
  	input[type='month'],
  	input[type='week'],
  	input[type='time'],
  	input[type='datetime'],
  	input[type='datetime-local'],
  	input[type='color'],
  	input[type='file'],
  	textarea,
  	.input {
  		color: {$button_text_color};
  		background-color: {$field_background_color};
  		border: solid {$button_border_size}px {$button_border_color};
  		border-radius: {$button_border_radius}px;
  		padding: {$button_padding}px;
  	}

  	input[type='text']:focus,
  	input[type='tel']:focus,
  	input[type='email']:focus,
  	input[type='url']:focus,
  	input[type='password']:focus,
  	input[type='search']:focus,
  	input[type='number']:focus,
  	input[type='tel']:focus,
  	input[type='range']:focus,
  	input[type='date']:focus,
  	input[type='month']:focus,
  	input[type='week']:focus,
  	input[type='time']:focus,
  	input[type='datetime']:focus,
  	input[type='datetime-local']:focus,
  	input[type='color']:focus,
  	input[type='file']:focus,
  	textarea:focus,
  	.input:focus {
  		color: {$button_text_color_hover};
  	}
  ";

  wp_add_inline_style( 'engine-style', $field_styles );
}

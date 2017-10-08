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


  $field_text_color 	 	 		      = get_theme_mod( 'field_text_color', '#222222');
  $field_text_color_focus 	 	 		= get_theme_mod( 'field_text_color_focus', '#111111');
  $field_background_color 	 	 		= get_theme_mod( 'field_background_color', 'rgba(240,240,240,1)');
  $field_background_color_focus 	= get_theme_mod( 'field_background_color_focus', 'rgba(245,245,245,1)');

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
    .fl-builder-content a.fl-button:visited,
    html .woocommerce #respond input#submit.alt,
    html .woocommerce a.button.alt,
    html .woocommerce button.button.alt,
    html .woocommerce input.button.alt,
    html .woocommerce #respond input#submit,
    html .woocommerce a.button,
    html .woocommerce button.button,
    html .woocommerce input.button {
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
    .fl-builder-content a.fl-button:hover,
    html .woocommerce #respond input#submit.alt:hover,
    html .woocommerce a.button.alt:hover,
    html .woocommerce button.button.alt:hover,
    html .woocommerce input.button.alt:hover,
    html .woocommerce #payment #place_order,
    html .woocommerce span.onsale,
    html .woocommerce #respond input#submit:hover,
    html .woocommerce a.button:hover,
    html .woocommerce button.button:hover,
    html .woocommerce input.button:hover,
    .woocommerce #respond input#submit.disabled:hover,
    .woocommerce #respond input#submit:disabled:hover,
    .woocommerce #respond input#submit:disabled[disabled]:hover,
    .woocommerce a.button.disabled:hover,
    .woocommerce a.button:disabled:hover,
    .woocommerce a.button:disabled[disabled]:hover,
    .woocommerce button.button.disabled:hover,
    .woocommerce button.button:disabled:hover,
    .woocommerce button.button:disabled[disabled]:hover,
    .woocommerce input.button.disabled:hover,
    .woocommerce input.button:disabled:hover,
    .woocommerce input.button:disabled[disabled]:hover {
  		color: {$button_text_color_hover};
  		background-color: {$button_background_color_hover};
  		border: solid {$button_border_size} {$button_background_color_hover};
  	}


    .woocommerce #respond input#submit.disabled,
    .woocommerce #respond input#submit:disabled,
    .woocommerce #respond input#submit:disabled[disabled],
    .woocommerce a.button.disabled,
    .woocommerce a.button:disabled,
    .woocommerce a.button:disabled[disabled],
    .woocommerce button.button.disabled,
    .woocommerce button.button:disabled,
    .woocommerce button.button:disabled[disabled],
    .woocommerce input.button.disabled,
    .woocommerce input.button:disabled,
    .woocommerce input.button:disabled[disabled] {
      color: {$button_text_color};
    }

    html .woocommerce span.onsale {
  		color: {$button_text_color_hover} !important;
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
  		color: {$field_text_color};
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
  		color: {$field_text_color_focus};
      background-color: {$field_background_color_focus};
  	}

    .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover {
      background-color: {$button_background_color};
    }
  ";

  wp_add_inline_style( 'engine-style', $field_styles );
}

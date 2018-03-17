<?php
function engine_font_styles() {

  // Get typography settings
  $body_font_size 	  = get_theme_mod( 'body_font_size', 16 );
  $body_font_size_m 	= get_theme_mod( 'body_font_size_tablet', 16 );
  $body_font_size_s 	= get_theme_mod( 'body_font_size_mobile', 16 );

  $body_line_height   = get_theme_mod( 'body_line_height', 1.8 );
  $body_line_height_m = get_theme_mod( 'body_line_height_tablet', 1.8 );
  $body_line_height_s = get_theme_mod( 'body_line_height_mobile', 1.8 );


  // Get the font sizing for the main h1 tag
  $h1_font_size	        = get_theme_mod( 'header_font_size', 38 );
  $h1_font_size_m	      = get_theme_mod( 'header_font_size_tablet', 34 );
  $h1_font_size_s       = get_theme_mod( 'header_font_size_mobile', 32 );

  $header_line_height   = get_theme_mod( 'header_line_height', 2.5 );
  $header_line_height_m = get_theme_mod( 'header_line_height_tablet', 2.3 );
  $header_line_height_s = get_theme_mod( 'header_line_height_mobile', 2.0 );


  // Desktop Font Sizes
  // Generate font sizes for all headings bassed of of h1 size
  $h2_font_size = round($h1_font_size * ((72-$amount) / 100), 0);
  $h3_font_size = round($h1_font_size * ((54-$amount) / 100), 0);
  $h4_font_size = round($h1_font_size * ((44-$amount) / 100), 0);
  $h5_font_size = round($h1_font_size * ((38-$amount) / 100), 0);
  $h6_font_size = round($h1_font_size * ((34-$amount) / 100), 0);

  // Tablet Font Sizes
  // Generate font sizes for all headings bassed of of h1 size
  $h2_font_size_m = round($h1_font_size_m * ((72-$amount) / 100), 0);
  $h3_font_size_m = round($h1_font_size_m * ((54-$amount) / 100), 0);
  $h4_font_size_m = round($h1_font_size_m * ((44-$amount) / 100), 0);
  $h5_font_size_m = round($h1_font_size_m * ((38-$amount) / 100), 0);
  $h6_font_size_m = round($h1_font_size_m * ((34-$amount) / 100), 0);


  // Phone Font Sizes
  // Generate font sizes for all headings bassed of of h1 size
  $h2_font_size_s = round($h1_font_size_s * ((82-$amount) / 100), 0);
  $h3_font_size_s = round($h1_font_size_s * ((68-$amount) / 100), 0);
  $h4_font_size_s = round($h1_font_size_s * ((60-$amount) / 100), 0);
  $h5_font_size_s = round($h1_font_size_s * ((54-$amount) / 100), 0);
  $h6_font_size_s = round($h1_font_size_s * ((44-$amount) / 100), 0);








    // Desktop Font Lighnights
    // Generate font sizes for all headings bassed of of h1 size
    $h1_line_height = ($header_line_height * 50 / 100);
    $h2_line_height = ($header_line_height * 50 / 100);
    $h3_line_height = ($header_line_height * 50 / 100);
    $h4_line_height = ($header_line_height * 50 / 100);
    $h5_line_height = ($header_line_height * 50 / 100);
    $h6_line_height = ($header_line_height * 50 / 100);

    // Tablet Font Sizes
    // Generate font sizes for all headings bassed of of h1 size
    $h1_line_height_m = ($header_line_height_m * 50 / 100);
    $h2_line_height_m = ($header_line_height_m * 50 / 100);
    $h3_line_height_m = ($header_line_height_m * 50 / 100);
    $h4_line_height_m = ($header_line_height_m * 50 / 100);
    $h5_line_height_m = ($header_line_height_m * 50 / 100);
    $h6_line_height_m = ($header_line_height_m * 50 / 100);

    // Phone Font Sizes
    // Generate font sizes for all headings bassed of of h1 size
    $h1_line_height_s = ($header_line_height_s * 50 / 100);
    $h2_line_height_s = ($header_line_height_s * 50 / 100);
    $h3_line_height_s = ($header_line_height_s * 50 / 100);
    $h4_line_height_s = ($header_line_height_s * 50 / 100);
    $h5_line_height_s = ($header_line_height_s * 50 / 100);
    $h6_line_height_s = ($header_line_height_s * 50 / 100);








  // Get Brakepoints
  $small_breakpoint_value = get_theme_mod( 'small_device_breakpoint', 768 );
  $medium_breakpoint_value = get_theme_mod( 'medium_device_breakpoint', 992 );

  $small_breakpoint =  $small_breakpoint_value . "px";
  $medium_breakpoint = $medium_breakpoint_value . "px";

  // Setup header font styles

  $font_styles = "

    body {
      font-size: {$body_font_size_s}px;
      line-height: {$body_line_height_m}rem;
    }

    h1, .h1 {
      font-size: {$h1_font_size_s}px;
      line-height: {$h1_line_height_s}em;
    }
    h2, .h2 {
      font-size: {$h2_font_size_s}px;
      line-height: {$h2_line_height_s}em;
    }
    h3, .h3 {
      font-size: {$h3_font_size_s}px;
      line-height: {$h3_line_height_s}em;
    }
    h4, .h4 {
      font-size: {$h4_font_size_s}px;
      line-height: {$h4_line_height_s}em;
    }
    h5, .h5 {
      font-size: {$h5_font_size_s}px;
      line-height: {$h5_line_height_s}em;
    }
    h6, .h6 {
      font-size: {$h6_font_size_s}px;
      line-height: {$h6_line_height_s}em;
    }

  	@media only screen and (min-width : {$small_breakpoint}) {

  		body {
  			font-size: {$body_font_size_m}px;
  			line-height: {$body_line_height_m}rem;
  		}

  		h1, .h1 {
  			font-size: {$h1_font_size_m}px;
        line-height: {$h1_line_height_m}em;
  		}
  		h2, .h2 {
  			font-size: {$h2_font_size_m}px;
        line-height: {$h2_line_height_m}em;
  		}
  		h3, .h3 {
  			font-size: {$h3_font_size_m}px;
        line-height: {$h3_line_height_m}em;
  		}
  		h4, .h4 {
  			font-size: {$h4_font_size_m}px;
        line-height: {$h4_line_height_m}em;
  		}
  		h5, .h5 {
  			font-size: {$h5_font_size_m}px;
        line-height: {$h5_line_height_m}em;
  		}
  		h6, .h6 {
  			font-size: {$h6_font_size_m}px;
        line-height: {$h6_line_height_m}em;
  		}
  	}

  	@media only screen and (min-width : {$medium_breakpoint}) {

  		body {
  			font-size: {$body_font_size}px;
  		}

  		h1, .h1 {
  			font-size: {$h1_font_size}px;
        line-height: {$h1_line_height}em;
  		}
  		h2, .h2 {
  			font-size: {$h2_font_size}px;
        line-height: {$h2_line_height}em;
  		}
  		h3, .h3 {
  			font-size: {$h3_font_size}px;
        line-height: {$h3_line_height}em;
  		}
  		h4, .h4 {
  			font-size: {$h4_font_size}px;
        line-height: {$h4_line_height}em;
  		}
  		h5, .h5 {
  			font-size: {$h5_font_size}px;
        line-height: {$h5_line_height}em;
  		}
  		h6, .h6 {
  			font-size: {$h6_font_size}px;
        line-height: {$h6_line_height}em;
  		}
  	}
  ";

  wp_add_inline_style( 'engine-style', $font_styles );
}

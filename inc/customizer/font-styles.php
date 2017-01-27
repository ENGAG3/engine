<?php
function engine_font_styles() {

  // Get typography settings
  $body_font_size 	= get_theme_mod( 'body_font_size', 15 );
  $body_line_height = get_theme_mod( 'body_line_height', 1.7 );


  // Get the font sizing for the main h1 tag
  $h1_font_size	      = get_theme_mod( 'header_font_size', 32 );
  $header_line_height = get_theme_mod( 'header_line_height', 2.5 );


  // Desktop Font Sizes
  // Generate font sizes for all headings bassed of of h1 size
  $h2_font_size = round($h1_font_size * ((80-$amount) / 100), 0);
  $h3_font_size = round($h1_font_size * ((60-$amount) / 100), 0);
  $h4_font_size = round($h1_font_size * ((45-$amount) / 100), 0);
  $h5_font_size = round($h1_font_size * ((35-$amount) / 100), 0);
  $h6_font_size = round($h1_font_size * ((28-$amount) / 100), 0);

  // Tablet Font Sizes
  // Generate font sizes for all headings bassed of of h1 size
  $h1_font_size_m = round($h1_font_size * ((90-$amount) / 100), 0);
  $h2_font_size_m = round($h2_font_size * ((90-$amount) / 100), 0);
  $h3_font_size_m = round($h3_font_size * ((90-$amount) / 100), 0);
  $h4_font_size_m = round($h4_font_size * ((90-$amount) / 100), 0);
  $h5_font_size_m = round($h5_font_size * ((90-$amount) / 100), 0);
  $h6_font_size_m = round($h6_font_size * ((90-$amount) / 100), 0);

  // Phone Font Sizes
  // Generate font sizes for all headings bassed of of h1 size
  $h1_font_size_s = round($h1_font_size * ((70-$amount) / 100), 0);
  $h2_font_size_s = round($h2_font_size * ((75-$amount) / 100), 0);
  $h3_font_size_s = round($h3_font_size * ((80-$amount) / 100), 0);
  $h4_font_size_s = round($h4_font_size * ((85-$amount) / 100), 0);
  $h5_font_size_s = round($h5_font_size * ((90-$amount) / 100), 0);
  $h6_font_size_s = round($h6_font_size * ((95-$amount) / 100), 0);







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
    $h1_line_height_m = ($header_line_height * 50 / 100);
    $h2_line_height_m = ($header_line_height * 50 / 100);
    $h3_line_height_m = ($header_line_height * 50 / 100);
    $h4_line_height_m = ($header_line_height * 50 / 100);
    $h5_line_height_m = ($header_line_height * 50 / 100);
    $h6_line_height_m = ($header_line_height * 50 / 100);

    // Phone Font Sizes
    // Generate font sizes for all headings bassed of of h1 size
    $h1_line_height_s = ($header_line_height * 50 / 100);
    $h2_line_height_s = ($header_line_height * 50 / 100);
    $h3_line_height_s = ($header_line_height * 50 / 100);
    $h4_line_height_s = ($header_line_height * 50 / 100);
    $h5_line_height_s = ($header_line_height * 50 / 100);
    $h6_line_height_s = ($header_line_height * 50 / 100);








  // Get Brakepoints
  $small_breakpoint_value = get_theme_mod( 'small_device_breakpoint', 768 );
  $medium_breakpoint_value = get_theme_mod( 'medium_device_breakpoint', 992 );

  $small_breakpoint =  $small_breakpoint_value . "px";
  $medium_breakpoint = $medium_breakpoint_value . "px";

  // Setup header font styles

  $font_styles = "

    body {
      font-size: {$body_font_size_s}px;
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
  			line-height: {$body_line_height}rem;
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

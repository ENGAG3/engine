<?php

function blog_css() {


// Get Brakepoints
$small_breakpoint_value = get_theme_mod( 'small_device_breakpoint', 768 );
$medium_breakpoint_value = get_theme_mod( 'medium_device_breakpoint', 992 );

$small_breakpoint =  $small_breakpoint_value . "px";
$medium_breakpoint = $medium_breakpoint_value . "px";

// Blog
$blog_desktop_columns = get_theme_mod( 'blog_desktop_columns', 'column-1' );
$blog_tablet_columns = get_theme_mod( 'blog_tablet_columns', 'column-1' );
$blog_phone_columns = get_theme_mod( 'blog_phone_columns', 'column-1' );


?>

<style>

</style>


<?php } add_action('wp_head', 'blog_css');

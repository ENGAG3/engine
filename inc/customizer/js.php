<?php
function customizer_js() {

// Get Sticky Header style
$sticky_header = get_theme_mod( 'sticky_header', 'disabled' );
$sticky_header_style = get_theme_mod( 'sticky_header_style', 'fixed' );

// Get Slideout menu style
$slideout_menu_style = get_theme_mod( 'slideout_menu_style', 'off-canvas-left' );

// Get Brakepoints
$small_breakpoint  = get_theme_mod( 'small_device_breakpoint', 768 );
$medium_breakpoint = get_theme_mod( 'medium_device_breakpoint', 992 );
$large_breakpoint  = $medium_breakpoint - 1;
?>


<script type="text/javascript">

  // Setup theme brake points by adding a class to the body tag at spesafid breakpints
  (function($) {
    var $window = $(window),
        $html = $('html');

    $window.resize(function resize() {

        if ($window.width() < <?php echo $small_breakpoint; ?>) {
            return $html.addClass('small-device');
        }

        $html.removeClass('small-device');

    }).trigger('resize');

    $window.resize(function resize() {

        if ($window.width() < <?php echo $medium_breakpoint; ?>) {
            return $html.addClass('medium-device');
        }

        $html.removeClass('medium-device');

    }).trigger('resize');

    $window.resize(function resize() {

        if ($window.width() > <?php echo $large_breakpoint; ?>) {
            return $html.addClass('large-device');
        }

        $html.removeClass('large-device');

    }).trigger('resize');
  })(jQuery);




	jQuery(document).ready(function( $ ) {

		// If menu style is swipe
		<?php if (  $slideout_menu_style == 'swipe-left' ) {  ?>

			var slideout = new Slideout({
			  'panel': document.getElementById('page'),
			  'menu': document.getElementById('slideout-navigation'),
			  'padding': 500,
			  'tolerance': 100
			});

		<?php } ?>


	});

</script>

<?php } add_action('wp_head', 'customizer_js', 999);

<?php




 add_action( 'customize_register', function( $wp_customize ) {

 	/**
 	 * The custom control class
 	 */
 	class Kirki_Controls_Footer_Control extends WP_Customize_Control {
 		public $type = 'footer_template_link';
 		public function render_content() {

      $template = get_theme_mod( 'footer_template', 'Select' );
      $site_url = get_site_url();

      $template_edit_link =  $site_url . '/?p=' . $template . "&elementor";
      $template_library =  $site_url . "/wp-admin/edit.php?post_type=elementor_library";

			echo '<a class="button button-primary edit-template" href=" ' . $template_edit_link . '">Edit this Template <i class="fa fa-external-link" aria-hidden="true"></i></a>';

  		echo '<a class="template-library" href=" ' . $template_library . '">View Template Library</a>';

 		}
 	}

 	// Register our custom control with Kirki
 	add_filter( 'kirki/control_types', function( $controls ) {
 		$controls['footer_template_link'] = 'Kirki_Controls_Footer_Control';
 		return $controls;
 	} );
 } );

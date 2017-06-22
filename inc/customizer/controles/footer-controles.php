<?php

// Footer




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

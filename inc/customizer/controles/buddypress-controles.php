<?php

/* Only load code that needs BuddyPress to run once BP is loaded and initialized. */
function engine_buddypress_controles() {

}
add_action( 'bp_include', 'engine_buddypress_controles' );

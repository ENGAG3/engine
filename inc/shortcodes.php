<?php


//this callback function performs many actions depending on which shortcode ($tag) calls it
function display_my_shortcode($atts, $content, $tag){


  // Social Links
  $facebook_link   = get_theme_mod( 'facebook');
  $instagram_link  = get_theme_mod( 'instagram');
  $twitter_link    = get_theme_mod( 'twitter');
  $pinterest_link  = get_theme_mod( 'pinterest');
  $youtube_link    = get_theme_mod( 'youtube');
  $tumblr_link     = get_theme_mod( 'tumblr');
  $px500_link      = get_theme_mod( 'px500');
  $flickr_link     = get_theme_mod( 'flickr');

	if($tag == 'facebook_link'){
		echo $facebook_link;
	}
	else if($tag == 'instagram_link'){
		echo $instagram_link;
	}
	else if($tag == 'twitter_link'){
		echo $twitter_link;
	}
	else if($tag == 'pinterest_link'){
		echo $pinterest_link;
	}
	else if($tag == 'youtube_link'){
		echo $youtube_link;
	}
	else if($tag == 'tumblr_link'){
		echo $tumblr_link;
	}
	else if($tag == 'px500_link'){
		echo $px500_link;
	}
	else if($tag == 'flickr_link'){
		echo $flickr_link;
	}
	//default
	else{

	}
}
add_shortcode('facebook_link','display_my_shortcode');
add_shortcode('instagram_link','display_my_shortcode');
add_shortcode('twitter_link','display_my_shortcode');
add_shortcode('pinterest_link','display_my_shortcode');
add_shortcode('youtube_link','display_my_shortcode');
add_shortcode('tumblr_link','display_my_shortcode');
add_shortcode('px500_link','display_my_shortcode');
add_shortcode('flickr_link','display_my_shortcode');

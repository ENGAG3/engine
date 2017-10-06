<?php

  function engine_social_icons(){

    $facebook_link   = get_theme_mod( 'facebook');
    $instagram_link  = get_theme_mod( 'instagram');
    $twitter_link    = get_theme_mod( 'twitter');
    $pinterest_link  = get_theme_mod( 'pinterest');
    $youtube_link    = get_theme_mod( 'youtube');
    $tumblr_link     = get_theme_mod( 'tumblr');
    $px500_link      = get_theme_mod( 'px500');
    $flickr_link     = get_theme_mod( 'flickr');
    $email_link     = get_theme_mod( 'email');

    echo "<div class='engine-social-icons'>";

      if ( $facebook_link ) {
        echo '
        <a href="' . $facebook_link . '" target="_blank">
          <i class="fa fa-facebook-official" aria-hidden="true"></i>
        </a>
        ';
      }
      if ( $instagram_link ) {
        echo '
        <a href="' . $instagram_link . '" target="_blank">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        ';
      }
      if ( $twitter_link ) {
        echo '
        <a href="' . $twitter_link . '" target="_blank">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        ';
      }
      if ( $pinterest_link ) {
        echo '
        <a href="' . $pinterest_link . '" target="_blank">
          <i class="fa fa-pinterest" aria-hidden="true"></i>
        </a>
        ';
      }
      if ( $youtube_link ) {
        echo '
        <a href="' . $youtube_link . '" target="_blank">
          <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </a>
        ';
      }
      if ( $tumblr_link ) {
        echo '
        <a href="' . $tumblr_link . '" target="_blank">
          <i class="fa fa-tumblr" aria-hidden="true"></i>
        </a>
        ';
      }
      if ( $px500_link ) {
        echo '
        <a href="' . $px500_link . '" target="_blank">
          <i class="fa fa-500px" aria-hidden="true"></i>
        </a>
        ';
      }
      if ( $flickr_link  ) {
        echo '
        <a href="' . $flickr_link . '">
          <i class="fa fa-flickr" aria-hidden="true"></i>
        </a>
        ';
      }
      if ( $email_link  ) {
        echo '
        <a href="mailto:' . $email_link . '">
          <i class="fa fa-envelope" aria-hidden="true"></i>
        </a>
        ';
      }

    echo "</div>";
  }

  add_shortcode('social_links', 'engine_social_icons');





  function year_shortcode() {
    $year = date('Y');
    return $year;
  }
  add_shortcode('year', 'year_shortcode');

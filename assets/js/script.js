/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isWebkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    isOpera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    isIe     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( isWebkit || isOpera || isIe ) && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
})();


(function($) {

  if(!$) {
    return;
  }

  ////////////
  // Plugin //
  ////////////

  $.fn.headroom = function(option) {
    return this.each(function() {
      var $this   = $(this),
        data      = $this.data('headroom'),
        options   = typeof option === 'object' && option;

      options = $.extend(true, {}, Headroom.options, options);

      if (!data) {
        data = new Headroom(this, options);
        data.init();
        $this.data('headroom', data);
      }
      if (typeof option === 'string') {
        data[option]();

        if(option === 'destroy'){
          $this.removeData('headroom');
        }
      }
    });
  };

  //////////////
  // Data API //
  //////////////

  $('[data-headroom]').each(function() {
    var $this = $(this);
    $this.headroom($this.data());
  });

}(window.Zepto || window.jQuery));






jQuery(document).ready(function( $ ) {

	// Slideout Menu toggle(s)
	$('#menu-toggle, #slideout-overlay, #menu-close').on('click', function(e) {
      $('body').toggleClass("slideout-menu-is-active"); //you can list several class names
      $('#slideout-navigation').toggleClass("is-active"); //you can list several class names
      $('#slideout-overlay').toggleClass("is-active"); //you can list several class names
      e.preventDefault();
  });


		// Make top header sticky
		$(".header-top #masthead").sticky({topSpacing:0});
		// simple as this!
		// NOTE: init() is implicitly called with the plugin
		$(".header-top #masthead").headroom();


		// Abar
		$("#abar.bottom").sticky({topSpacing:0});

		// Make slideout Meny sticky
		$(".header-left #masthead .site-header-wrap").sticky({topSpacing:0});
		$(".header-right #masthead .site-header-wrap").sticky({topSpacing:0});

    // $(":file").jfilestyle({input: false});
});



// Add classes to header on scrolldown

jQuery(window).scroll(function( ) {


	var scroll = jQuery(window).scrollTop();
	 //console.log(scroll);
	if (scroll >= 100) {
			//console.log('a');
			jQuery(".site-header").addClass("scrolled-100");
	} else {
			//console.log('a');
			jQuery(".site-header").removeClass("scrolled-100");
	}
	if (scroll >= 500) {
			//console.log('a');
			jQuery(".site-header").addClass("scrolled-500");
	} else {
			//console.log('a');
			jQuery(".site-header").removeClass("scrolled-500");
	}
});

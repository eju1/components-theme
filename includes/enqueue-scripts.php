<?php
/**
 * Enqueue our stylesheets & scripts
 */
if ( ! function_exists( 'components_theme_enqueue' ) ) :
	function components_theme_enqueue(){

		// Enqueue the main Stylesheet.
		wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/styles.css?v='.CACHE_BUST );

		// Enqueue Javascript Files
		// jQuery
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );
		
		// Cookies	
		wp_enqueue_script( 'cookies', get_stylesheet_directory_uri() . '/assets/vendor/js-cookie/src/js.cookie.js', array('jquery'), '2.1.2', false);

		// Bootstrap	
		wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js', array('jquery'), '3.3.6', true );

		// Google Maps
		// wp_enqueue_script( 'googlemaps', 'https://maps.googleapis.com/maps/api/js?key='.GOOGLE_API_KEY, array('jquery'), '2.8.2', true );

		// Slick Carousel
		// wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/vendor/slick-carousel/slick/slick.min.js', array('jquery'), '1.8.1', true );
		
		// Scripts
		wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js?v='.CACHE_BUST, array('jquery', 'bootstrap'), '0.0.1', true );


		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}
	add_action( 'wp_enqueue_scripts', 'components_theme_enqueue' );
endif;
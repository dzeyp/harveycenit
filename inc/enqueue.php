<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();

		//wp_enqueue_script( 'jquery-mobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', array(), $the_theme->get( 'Version' ), true );

		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'sliderpro-styles', get_stylesheet_directory_uri() . '/css/slider-pro.min.css', array(), $the_theme->get( 'Version' ) );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false, true);
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), false, true);

		wp_enqueue_script( 'shuffle', get_template_directory_uri() . '/js/shuffle.min.js', array(), false, true );

		wp_enqueue_script( 'scrollreveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', array(), false, true );

		wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), false, true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,700|Six+Caps|Italiana', array(), $the_theme->get( 'Version' ) );
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

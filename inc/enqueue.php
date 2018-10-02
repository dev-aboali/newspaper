<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {

		// 	//Load slick Slider css
		wp_enqueue_style( 'slickSliderCss', get_stylesheet_directory_uri() . '/css/slick.css', array(), '1.9.0' );
		wp_enqueue_style( 'slickSliderCssTheme', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), '1.9.0' );
		
		// wp_enqueue_style( 'slickSliderCss', "//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css", array(), '1.9.0' );
		// wp_enqueue_style( 'slickSliderCssTheme', "//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css", array(), '1.9.0' );

		
		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		
		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery');

		//Load SlickSlider Js
		wp_enqueue_script( 'slickSliderJs', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.9.0' , true);
		// wp_enqueue_script( 'slickSliderJs', "//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.min.js", array('jquery'), '1.9.0' , true);
		
		
		
		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
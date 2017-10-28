<?php

if ( ! function_exists( 'webpack_gulp_starter_scripts' ) ) {
	function webpack_gulp_starter_scripts() {
		$the_theme = wp_get_theme();
		// jQuery使う場合は外す
		wp_deregister_script( 'jquery' );
		// インラインcssじゃない場合はコメントアウト外す
		// wp_enqueue_style( 'webpackstater-styles', get_stylesheet_directory_uri() . '/dist/css/bundle.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'webpack', get_template_directory_uri() . '/dist/js/bundle.js', array(), $the_theme->get( 'Version' ), true );
	}
}
add_action( 'wp_enqueue_scripts', 'webpack_gulp_starter_scripts' );

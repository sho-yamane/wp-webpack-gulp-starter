<?php

if ( ! function_exists( 'webpack_gulp_starter_widgets' ) ) {
	function webpack_gulp_starter_widgets() {
		register_nav_menus(
			array(
				'primary' => 'Primary Menu',
			)
		);
		register_nav_menus(
			array(
				'secondary' => 'Secondary Menu',
			)
		);
	}
}
add_action( 'after_setup_theme', 'webpack_gulp_starter_widgets' );

if ( ! function_exists( 'webpack_gulp_starter_widgets_init' ) ) {
	function webpack_gulp_starter_widgets_init() {
		register_sidebar(
			array(
				'name'          => 'Sidebar Widget',
				'id'            => 'sidebar-1',
				'description'   => 'Sidebar Widget area',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}
add_action( 'widgets_init', 'webpack_gulp_starter_widgets_init' );

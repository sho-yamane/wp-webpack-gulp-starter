<?php
if ( ! function_exists( 'customize_admin_bar_menu' ) ) {
    function customize_admin_bar_menu($wp_admin_bar){
        $wp_admin_bar->add_menu(array(
            'class' => 'no-barba'
        ));
    }
}
add_action('admin_bar_menu', 'customize_admin_bar_menu', 9999);

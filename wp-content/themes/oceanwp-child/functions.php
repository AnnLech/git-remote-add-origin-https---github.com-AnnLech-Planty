<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'oceanwp-woo-mini-cart','font-awesome','simple-line-icons','oceanwp-style','oceanwp-woocommerce','oceanwp-woo-star-font','oceanwp-woo-quick-view','ow-perfect-scrollbar' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// MENU NAV ADMIN 





function modifier_menu_admin( $items, $args ) {
    if(is_super_admin() && $args->theme_location == 'main_menu'){
    $items .= 
    '<li id="menu-admin" class="">
    <a href="http://localhost:8888/planty/wp-admin/" class="menu-link"><span class="text-wrap">Admin</span></a></li>' ;
  
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'modifier_menu_admin',10,2);
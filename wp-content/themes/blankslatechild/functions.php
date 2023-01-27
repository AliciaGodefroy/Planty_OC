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

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// MENU IF IS USER LOGGED IN
function add_admin_link($items, $args) {
    if (is_user_logged_in() && ($args->theme_location=='main-menu')) {
        $menu_items = array(wp_get_nav_menu_items('main-menu'));

        array_splice($menu_items, 1, 0, '<li id="navAdmin" class="navAdmin menu-item"><a href="'. get_admin_url() .'">Admin</a></li>');
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_link', 10, 2 );


// function add_admin_link($items, $args) {
//     if (is_user_logged_in() && ($args->theme_location=='main-menu')) {
//         $items .= '<li id="navAdmin" class="navAdmin menu-item"><a href="'. get_admin_url() .'">Admin</a></li>';
//     }
//     return $items;
// }
// add_filter( 'wp_nav_menu_items', 'add_admin_link', 10, 2 );


// add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
// function add_extra_item_to_nav_menu( $items, $args ) {
//     if (is_user_logged_in() && $args->theme_location == 'main-menu'  ) {
//       $items_array = array(); //creation tableau menu
//       while ( false !== ( $item_pos = strpos ( $items, '<li', 3 ) ) ) //limitation menu à trois éléments
//       {
//           $items_array[] = substr($items, 0, $item_pos);
//           $items = substr($items, $item_pos);
//       }
//       $items_array[] = $items;
//       array_splice($items_array, 1, 0, '<li class="menu-item"><a href="/Planty/wp-admin/">Admin</a></li>'); //insertion du lien en seconde position

//       $items = implode('', $items_array);
//       }
//     return $items;
// }


// END MENU IF IS USER LOGGED IN
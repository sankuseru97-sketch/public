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
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

/**
 * Ajoute un lien "Tableau de bord" à la fin du menu de navigation
 * pour les utilisateurs connectés.
 */
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10);

function ajouter_lien_admin_menu($items) {
    // On vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // On crée le lien vers l'administration
        $admin_link = '<li class="menu-item admin-link"><a href="' . admin_url() . '">Admin</a></li>';
        
        // On concatène le nouveau lien aux éléments existants
        $items .= $admin_link;
    }
    
    return $items;
}// END ENQUEUE PARENT ACTION
?>
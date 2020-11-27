<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_parent', 10);

function theme_enqueue_styles_parent() {

wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_child', 20);

function theme_enqueue_styles_child() {
wp_dequeue_style('wallstreet-style', get_template_directory_uri() );
wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ));
}


require_once('custom_post_type/plus_infos.php');

function wpc_dashicons() {
wp_enqueue_style('dashicons');
}

add_action('wp_enqueue_scripts', 'wpc_dashicons');



/* = Message custom dans le footer de l'admin */
/* ----------------------------- */
function change_footer_admin () {
    echo 'Interface d\'administration du site de <strong> l\'Office de tourisme de strasbourg </strong>';
}
add_filter('admin_footer_text', 'change_footer_admin');

/* = Netoyage du <head> */
/* ----------------------------- */
function lije_removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'lije_removeHeadLinks');
remove_action('wp_head', 'wp_generator');



















/* = Personnaliser le style de la zone d'administration */
/* ----------------------------- 
function add_custom_style() {
    wp_enqueue_style( 'custom-admin1', 'https://strasbourgtourisme.antoine-libert.com/wp-content/themes/wallstreet_child/css/admin-bar.css', false, '1.0' );
    wp_enqueue_style( 'custom-admin2', 'https://strasbourgtourisme.antoine-libert.com/wp-content/themes/wallstreet_child/css/thickbox.css', false, '1.0' );
    wp_enqueue_style( 'custom-admin3', 'https://strasbourgtourisme.antoine-libert.com/wp-content/themes/wallstreet_child/css/wp-admin.css', false, '1.0' );
    wp_enqueue_style( 'custom-admin4', 'https://strasbourgtourisme.antoine-libert.com/wp-content/themes/wallstreet_child/css/buttons.css', false, '1.0' );
    wp_enqueue_style( 'custom-admin5', 'https://strasbourgtourisme.antoine-libert.com/wp-content/themes/wallstreet_child/css/font.css', false, '1.0' );
}
add_action( 'admin_enqueue_scripts', 'add_custom_style' );

*/

/* = Supprimer le style de base de la zone d'administration */
/* ----------------------------- 
function your_remove_default_stylesheets() {
    wp_deregister_style('wp-admin');
	wp_deregister_style('wpsc-thickbox');
	wp_deregister_style('admin-bar');
	wp_deregister_style('thickbox');
}
add_action('admin_init','your_remove_default_stylesheets');

*/

?>
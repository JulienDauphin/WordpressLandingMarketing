<?php

function enqueue_theme_styles() {
 // Cette fonction inclut un fichier 'theme.css' du dossier 'css' dans le thème
 wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/theme.css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

function custom_theme_features() {
   // Cette fonction inclut la prise en charge des images à la une
add_theme_support('post-thumbnails'); 
}
add_action('after_setup_theme', 'custom_theme_features');

function register_my_menu() {
   // Cette fonction va créer un emplacement de menu
  register_nav_menu( 'header_menu', __( 'Header Menu', 'MédiaPulse360' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );

?> 
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

function load_font_awesome() {
   // Cette fonction intègre les icones fontawesome
   wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');

function add_contact_menu($items, $args) {
   // Cette fonction ajoute un/des lien(s) au menu
   if ($args->theme_location == 'header_menu') {
       $items .= '
       <li><a href="mailto:contact@juliendauphin.fr?subject=Demande de renseignements">Nous contacter</a></li>
       <li><a href="#"><i class="fab fa-github"></i>
       </a></li>
       <li><a href="#"><i class="fab fa-linkedin"></i>
       </a></li>';

   }
   return $items;
}

add_filter('wp_nav_menu_items', 'add_contact_menu', 10, 2);

?> 
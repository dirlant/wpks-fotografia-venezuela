<?php

//Configuracion del tema
add_action( 'after_setup_theme', 'wpks_fotografia_vzla');

function wpks_fotografia_vzla(){
  add_theme_support( 'post-thumbnails' );
}

if (function_exists('acf_add_options_page')) {

  $parent = acf_add_options_page(array(
    'page_title' => 'Configuraciones Generales',
    'menu_title' => 'General',
    'menu_slug' => 'general',
    'capability' => 'edit_posts',
    'position' => false,
    'icon_url' => false,
    'redirect' => false
  ));

}

add_filter('acf/settings/show_admin', '__return_false');

?>

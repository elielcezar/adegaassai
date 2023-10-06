<?php

function child_styles() {		
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('child-style', get_stylesheet_uri());		
}
add_action('wp_enqueue_scripts', 'child_styles');

function register_my_menus()
{
  register_nav_menus(
    array(
      'main-menu' => __('Menu Principal'),
      'secundario' => __('Menu Secundario')
    )
  );
}
add_action('init', 'register_my_menus');

add_theme_support('post-thumbnails');
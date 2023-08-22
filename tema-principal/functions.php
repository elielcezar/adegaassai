<?php

wp_enqueue_style( 'admin', get_template_directory_uri() . '/css/admin.css');

function searchfilter($query) { 
  if ($query->is_search && !is_admin() ) {
      $query->set('post_type',array('post','receita'));
  }
return $query;
}
add_filter('pre_get_posts','searchfilter');

function register_new_sidebars()
{
  register_sidebar(array(
    'id' => 'sidebar',
    'name' => __('Sidebar', 'estacoes'),
    'description' => __('Sidebar', 'estacoes'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
}
add_action('widgets_init', 'register_new_sidebars');
add_image_size('destaque-noticia', 540, 345, true);
add_image_size('thumb-noticia', 485, 329, true);
add_image_size('carrossel', 670, 420, true);
add_image_size('quadrado', 700, 700, true);
add_image_size('garrafa', 76, 300, true);

/*function register_my_menus()
{
  register_nav_menus(
    array(
      'main-menu' => __('Principal'),
      'secundario' => __('Menu Secundario')
    )
  );
}
add_action('init', 'register_my_menus');*/

add_theme_support('post-thumbnails');


function main_styles() {
  wp_enqueue_style('slick', get_template_directory_uri() . '/slick/slick.css');
  wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');	
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fontawesome/css/all.css');
  wp_enqueue_style('fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
  wp_enqueue_style( 'style', get_stylesheet_directory_uri());
}
add_action( 'wp_enqueue_scripts', 'main_styles' );

function add_my_script(){
  //wp_enqueue_script('slick', get_template_directory_uri() . '/js/jquery-3.6.0.min.js');  
  wp_enqueue_script('slick', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'));  
  wp_enqueue_script('mask', get_template_directory_uri() . '/js/jquery.mask.js', array('jquery'));    
  wp_enqueue_script('fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'));    
  wp_enqueue_script('fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', array('jquery'));    
  wp_enqueue_script('parent-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'));    
}
add_action('wp_footer', 'add_my_script');

function load_custom_wp_admin_style(){
  wp_register_style( 'custom_wp_admin_css', get_bloginfo('stylesheet_directory') . '/css/admin.css', false, '1.0.0' );
  wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

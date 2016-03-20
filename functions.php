<?php

  // theme setup
  if (!function_exists('custom_theme_setup')) :
  function custom_theme_setup() {
    if (function_exists('add_theme_support')) {
      // i18n
      load_theme_textdomain('custom_theme', get_template_directory());
      // thumbnails
      add_theme_support('post-thumbnails');
      set_post_thumbnail_size(600, 398, true);
      add_image_size('featured-thumb', 1280, 436, true);
      add_image_size('general-thumb', 500, 332, true);
      add_image_size('wide-thumb', 600, 211, true);
    }
  }
  endif;
  add_action('after_setup_theme', 'custom_theme_setup');


  // assets
  function custom_theme_assets() {
    // css
    wp_enqueue_style('main',          get_template_directory_uri() . '/assets/css/main.css');

    // fonts

    // js scripts
    wp_enqueue_script('main',       get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
  }
  add_action('wp_enqueue_scripts', 'custom_theme_assets');


  // remove front admin bar
  show_admin_bar( false );


  // register footer and header menus
  function register_menus() {
    register_nav_menus(array(
      'primary' => 'header',
      'footer' => 'footer'
    ));
  }
  add_action('init', 'register_menus');


  // remove emojis
  function disable_emoji_dequeue_script() {
    wp_dequeue_script( 'emoji' );
  }
  add_action( 'wp_print_scripts', 'disable_emoji_dequeue_script', 100 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_styles', 'print_emoji_styles');
  remove_action( 'admin_print_scripts','print_emoji_detection_script');

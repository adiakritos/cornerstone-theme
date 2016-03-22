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
    // js scripts
    wp_enqueue_script('jquery',             'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',                  '', '', true);
    wp_enqueue_script('bootstrap',          get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js',                array('jquery'), '', true);
    wp_enqueue_script('jquery_easing',      get_template_directory_uri() . '/assets/js/vendor/jquery.easing.min.js',            array('jquery'), '', true);
    wp_enqueue_script('jquery_ticker',      get_template_directory_uri() . '/assets/js/vendor/jquery.ticker.js',                array('jquery'), '', true);
    wp_enqueue_script('docs',               get_template_directory_uri() . '/assets/js/vendor/docs.min.js',                     array('jquery'), '', true);
    wp_enqueue_script('ie-fix',             get_template_directory_uri() . '/assets/js/vendor/ie10-viewport-bug-workaround.js', array('jquery'), '', true);
    wp_enqueue_script('ie-fix2',            get_template_directory_uri() . '/assets/js/vendor/ie-emulation-modes-warning.js',   array('jquery'), '', true);
    wp_enqueue_script('parallax',           get_template_directory_uri() . '/assets/js/vendor/parallax.min.js',                 array('jquery'), '', true);
    wp_enqueue_script('modernizer',         get_template_directory_uri() . '/assets/js/vendor/modernizr.custom.js',             array('jquery'), '', true);
    wp_enqueue_script('toucheffects',       get_template_directory_uri() . '/assets/js/vendor/toucheffects.js',                 array('jquery'), '', true);
    wp_enqueue_script('navigation',         get_template_directory_uri() . '/assets/js/vendor/navigation.js',                   array('jquery'), '', true);

    wp_enqueue_script('back_to_top',        get_template_directory_uri() . '/assets/js/back_to_top.js',        array('jquery'), '', true);
    wp_enqueue_script('tooltip',            get_template_directory_uri() . '/assets/js/tooltip.js',            array('jquery'), '', true);
    wp_enqueue_script('buttons',            get_template_directory_uri() . '/assets/js/buttons.js',            array('jquery'), '', true);
    wp_enqueue_script('background_overlay', get_template_directory_uri() . '/assets/js/background_overlay.js', array('jquery'), '', true);
    wp_enqueue_script('ticker',             get_template_directory_uri() . '/assets/js/ticker.js',             array('jquery'), '', true);
  }
  add_action('wp_enqueue_scripts', 'custom_theme_assets');


  // register widget areas
  function custom_widgets() {
    register_sidebar( array(
      'name'          => 'Home Ministries',
      'id'            => 'home_ministries',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
    ) );
    register_sidebar( array(
      'name'          => 'Home Missions',
      'id'            => 'home_missions',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
    ) );
    register_sidebar( array(
      'name'          => 'Home Aerial Map',
      'id'            => 'home_aerial_map',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
    ) );
  }
  add_action( 'widgets_init', 'custom_widgets' );
  add_filter('widget_text', 'do_shortcode');


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

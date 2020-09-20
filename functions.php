<?php
  function mywp_files() {
    wp_enqueue_script('carousel-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    // dependencies NULL, version any (1.0 for eg), load at bottom of page? true, better for performance
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=.....');
    wp_enqueue_style('font-aswesome', '//maxcdn.bootstrapcdn.com/font....');
    wp_enqueue_style('mywp_main_styles', get_stylesheet_uri());
  }

  function mywp_features() {
    add_theme_support('title-tag');
    // enable a feature to your theme, you tell which feature in particular you want
  }

  function scripts() {
    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');
    wp_enqueue_script('jquery');
    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
  }

  // first argument is the wordpress event that you hook onto. Second argument is the function you're calling

  // add_action('after_setup_theme', 'mywp_features');
  add_action('wp_enqueue_scripts', 'scripts');
?>

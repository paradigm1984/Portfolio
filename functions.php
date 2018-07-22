<?php

  // function used by add_action that can be used to call styles and scripts.
  function portfolio_css_js() {

    // wordpress function to load a custom stylesheet.
    wp_enqueue_style("portfolio_main_style", get_stylesheet_uri(), NULL, microtime());

    // wordpress function to load custom js
    wp_enqueue_script( "portfolio_main_js", get_template_directory_uri() . "/js/scripts.js", NULL, microtime(), true);

    // loads in the font-awesome icons
    wp_enqueue_script("font-awesome", "https://use.fontawesome.com/releases/v5.0.8/js/all.js");

    // wordpress function to load bootstrap css
    wp_enqueue_style( "bootstrap", get_template_directory_uri() . "/bootstrap/css/bootstrap.css");
    // wp_enqueue_style("bootstrap");

    // wordpress function to load bootstrap js
    wp_enqueue_script( "jquery.bootstrap", get_template_directory_uri() . "/bootstrap/js/bootstrap.js", array("jquery"));
    // wp_enqueue_style("jquery.bootstrap");
  }

  // adding a wordpress action to run a function.
  add_action("wp_enqueue_scripts", "portfolio_css_js");


  // include custom jQuery
  function shapeSpace_include_custom_jquery() {

  	wp_deregister_script("jquery");
  	wp_enqueue_script("jquery", "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js", array(), null, true);

  }
  add_action("wp_enqueue_scripts", "shapeSpace_include_custom_jquery");


  // Wordpress header
  function portfolio_features() {
    register_nav_menu("headerMenuLocation", "Header Menu Location");
    // passes the title to its respective page according to the wordpress gui.
    add_theme_support("title-tag");
    add_theme_support( "post-thumbnails");
  }

  // this wordpress action allows you to pass different functions to your theme that you make up.
  // the first param is what type of event hook, and the second is the name of the function you write.
  // in this case its university_features.
  add_action("after_setup_theme", "portfolio_features");



  // remove_action("wp_head", "_admin_bar_bump_cb");
?>

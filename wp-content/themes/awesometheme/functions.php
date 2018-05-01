<?php
// This is a very important file
// Wordpress will look at this before it loads the page

function awesome_script_enqueue() {
  // first hook adds css
  //wordpress uses absolute paths not relative paths
  wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/awesome.css',array(),'1.0.0','all');

  //connecting javascript
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true); //last parameter of true means it will be printed in the footer.

}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

//hook to activate theme support
// add_theme_support('menus'); //this isn't the best way to do this
//it's best to wrap this in a function
function awesome_theme_support() {
  add_theme_support('menus');
}

add_action('after_setup_theme', 'awesome_theme_support');

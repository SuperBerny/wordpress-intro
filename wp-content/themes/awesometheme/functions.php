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
function awesome_theme_setup() {
  add_theme_support('menus');

                                //second parameter is the menu description
  register_nav_menu('primary','Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Naviagtion');
}

add_action('init', 'awesome_theme_setup');

//Allow background image uploads on main page
//look at header.php header image to see how it's added to the page with custom height and width added by wordpress from the backend
add_theme_support('custom-background');

// Allow header image upload in header
add_theme_support('custom-header');

// post thumbnail support
add_theme_support('post-thumbnails');

//have to add more than just 'post-formats' to add_theme_support();
// reference https://codex.wordpress.org/Post_Formats
//post-formats is followed by an array to add each of the 9 types of post-formats
add_theme_support('post-formats', array('aside','image','video'));
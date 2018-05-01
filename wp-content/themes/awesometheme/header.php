<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title>Awesome Theme</title>
</head>

<?php 

//you can use is_home(); but wordpress sees the blog page as the "home page" so you need to use is_front_page and it will look for the page that you set as the homepage
if( is_front_page() ):
  //this function adds custom classes to the body tag
  $awesome_classes = array( 'awesome-class', 'my-class' );
else:
  //the else statement will look to see if this page is the "front page" or not
  //if not it will not add 'no-awesome-class' to the body tag
$awesome_classes = array( 'no-awesome-class' );
endif;

?>

<body <?php body_class( $awesome_classes ); ?>>
  
  <?php wp_nav_menu(array('theme_location' => 'primary')); ?>


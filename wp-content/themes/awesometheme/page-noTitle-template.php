<?php
//This is a template for a page to have no title - the name of the file does not matter, it's named for the developer
?>

<?php 
//By adding the comment(below) before the header you will now have access to using this file as a template through the admin panel when editing individual pages
?>

<?php 

/*
  Template Name: Page No Title
*/

?>

<?php get_header() //this grabs header.php by default ?>
  
  <?php 
  
    if( have_posts() ):
    
      while( have_posts() ): the_post(); ?>

        <h1>This my static title</h1>

        <small>Posted at: <?php the_time('F j, Y') ?> at <?php the_time('g:i a'); ?> <?php the_category(); ?></small>
        <p><?php the_content(); ?></p>
        <hr>

    <?php endwhile;

    endif;
    
  ?>

<?php get_footer() //this grabs footer.php by default ?>

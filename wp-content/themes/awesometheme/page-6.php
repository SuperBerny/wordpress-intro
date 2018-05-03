<?php 
//You need to add the header and footer to each page template you create, WordPress will no do that for you
?>

<?php get_header() //this grabs header.php by default ?>
  
  <?php 
  
    if( have_posts() ):
    
      while( have_posts() ): the_post(); ?>
       
        <p><?php the_content(); ?></p>

        <h3>I am the template for the About Me page</h3>

        <h3><?php the_title(); ?></h3>
        
        <hr>

    <?php endwhile;

    endif;
    
  ?>

<?php get_footer() //this grabs footer.php by default ?>
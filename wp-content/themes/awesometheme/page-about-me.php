<!-- 
This page has been commented so it won't run.
It has been copied and renamed to page-6.php which means it's the template for a WordPress About-Me page.  

This is just a template that shows that you can use page-slug.php so target a page's url to make it a template, but that's bad practice.
-->

<!-- <?php 
//You need to add the header and footer to each page template you create, WordPress will no do that for you
?>

<?php get_header() //this grabs header.php by default ?>
  
  <?php 
  
    if( have_posts() ):
    
      while( have_posts() ): the_post(); ?>
       
        <p><?php the_content(); ?></p>

        <h3><?php the_title(); ?></h3>
        
        <hr>

    <?php endwhile;

    endif;
    
  ?>

<?php get_footer() //this grabs footer.php by default ?> -->
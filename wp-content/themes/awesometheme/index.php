<?php get_header() //this grabs header.php by default ?>
  
  <?php 
  
  // The post loop
    if( have_posts() ):
    
      while( have_posts() ): the_post(); echo 'THIS IS THE FORMAT: '.get_post_format(); ?>
          <!-- get_template_part() looks to content.php as the standard post format -->
      <?php get_template_part('content', get_post_format()); ?>

    <?php endwhile;

    endif;
    
  ?>

<?php get_footer() //this grabs footer.php by default ?>

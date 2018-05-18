<!-- // This will be the standard post format -->
<h3><?php the_title(); ?></h3>
<!-- Post Thumbnail
support added in functions.php -> add_theme_support('post-thumbnails');
-->
<div class="thumbnail-image"><?php the_post_thumbnail('small'); ?></div>

<small>Posted at: <?php the_time('F j, Y') ?> at <?php the_time('g:i a'); ?> <?php the_category(); ?></small>

<p><?php the_content(); ?></p>

<hr>


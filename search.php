<?php
/**
* The template for displaying Search Results pages
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>
<div class="wraper">

<div id="primary" class="content-area">


<?php if ( have_posts() ) : ?>


<h5><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h5>


<?php
// Start the Loop.
while ( have_posts() ) : the_post();

/*
* Include the post format-specific template for the content. If you want to
* use this in a child theme, then include a file called called content-___.php
* (where ___ is the post format) and that will be used instead.
*/

?><div id="content" class="site-content" role="main">
                        <?php
 if ( has_post_thumbnail()) {?>	  
<a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('full');  ?></a>
<?php } ?>
                   
                  <a href="<?php the_permalink(); ?>">  <h2><?php the_title(); ?></h2>  </a>                          
              <?php the_content();  ?>
              </div>
<?php 
endwhile;


endif;
?>
           
           <div class="entry-content">
<p class="error-div"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>

</div>

</div><!-- #content -->
</div><!-- #primary -->
</div>
<?php

get_footer(); ?>
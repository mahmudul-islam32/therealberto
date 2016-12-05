<?php 
/**
* template name: blog
*/
get_header();?>
<div class="lavida_blog_section">
<div class="wraper">
<div class="lavida_blog_left">
<div class="lavida_text">
<?php 
	if (has_post_thumbnail() ): 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );
		$featured_image = $image[0]; 
	else :
		$featured_image = get_bloginfo( 'stylesheet_directory') . '/images/lavida_blog1.jpg';
		
	endif;
?>
<div class="lavida_img1"   style="background: url('<?php echo $featured_image; ?>') no-repeat !important;background-size:cover !important;">
<h1>"LA VIDA" 
<br />
     <span>BLOG</span></h1>
</div><!-- lavida_img1-->
<?php  dynamic_sidebar('blogtop'); ?>
</div><!--lavida_text-->

<div class="blog_section-lavida">
<ul>

<?php 
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('category_name=Blog&showposts=5&paged='.$paged);
while ( $wp_query->have_posts() ) : $wp_query->the_post();
  
  
?>
<li>

<div class="blog_section-lavida_img_sec">
<?php if(has_post_thumbnail()): the_post_thumbnail(); endif;  ?>

</div><!--blog_section-lavida_img_sec-->
<div class="blog_section-lavida_text">
<?php echo do_shortcode('[hupso]') ?> 
<p> <?php $content = get_the_content();
$content = strip_tags($content);
echo substr($content, 0, 150); 

?> 

<br /> 
<a href="<?php the_permalink(); ?>" class="read_more_lavida">Read More »</a></p>
</div><!--typo_graphy_text-->

<br class="clr" />
</li>

<?php endwhile;  ?>
</ul>

</div><!--ends blog_section-lavida -->

<div class="pages">
   <?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
</div>

<span><a href="#">BLOG HOME</a></span>


</div><!--ends lavida_blog_left -->
<div class="lavida_blog_right">
<?php  dynamic_sidebar('blogsidebar') ?>


 
</div><!--ends lavida_blog_right -->
<br class="clr" />
</div></div>
 



<?php get_footer();?>
<?php 
/**
* template name:media
*/
get_header();?>
<div class="baner_mediapages">
<?php 
	if (has_post_thumbnail() ): 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );
		$featured_image = $image[0]; 
	else :
		$featured_image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg';
		
	endif;
?>
<img src="<?php echo $featured_image; ?>" alt="" />

</div><!--baner_mediapages ends-->
<div class="media_section">
<div class="wraper">
<div class="videos_media_left">
<h1>VIDEOS</h1>
 <?php echo do_shortcode('[wonderplugin_gallery id="1"]'); ?>
</div><!--ends videos_media_left-->
<div class="topics_media_right">
<div class="topics_media">
<h3><?php echo get_field('topic_1'); ?></h3>
<ul>
<?php query_posts('category_name=print&post_type=press&showposts=3'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?> </a></li>
 <?php endwhile; ?> 
</ul>
</div><!-- topics_media ends -->
<div class="dreamer’s board">
<h3><?php echo get_field('topic_2', 10); ?></h3>
<ul>
<?php query_posts('category_name=empower-tabs&post_type=Empower&showposts=2'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?> </a></li>
 <?php endwhile; ?> </ul>
</div> <!-- dreamer’s board -->
<div class="connect_social">
<h4>COnnect WIth Roberto</h4>
<?php echo do_shortcode("[cn-social-icon selected_icons='1,2,3,4']"); ?>
</div><!--connect_social-->

</div><!--ends topics_media_right-->

<br class="clr" />
</div><!-- wraper ends-->
</div><!--ends media_section-->


<?php get_footer();?>
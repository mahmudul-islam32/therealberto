<?php 
/**
* template name: The man
*/
get_header();?>
<div class="beyond_ring1">
<div class="wraper">
<div class="scroll_section">
<ul>

<li><a href="<?php echo get_site_url(); ?>/about/"><?php echo get_field('about'); ?></a></li>
<li><a href="<?php echo get_site_url(); ?>/the-man/"><?php echo get_field('the_man'); ?></a></li>
<li><a href="<?php echo get_site_url(); ?>/beyond-the-ring/"><?php echo get_field('beyond_the_ring'); ?></a></li>
<li><a href="<?php echo get_site_url(); ?>/wellness-the-brand/"><?php echo get_field('wellness_&_the_brand'); ?></a></li><br class="clr" />

</ul>
</div>

</div><!-- wraper ends-->
</div><!-- beyond_ring-->
<?php 
	if (has_post_thumbnail() ): 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );
		$featured_image = $image[0]; 
	else :
		$featured_image = get_bloginfo( 'stylesheet_directory') . '/images/theman_banner.jpg';
		
	endif;
?>
<div class="themanpage_baner"  style="background: url('<?php echo $featured_image; ?>') no-repeat !important;background-size:cover !important;">
<div class="img_themanpage">
<?php global $dynamic_featured_image ?>
 <?php $featuredImages = $dynamic_featured_image->get_featured_images(); //here will be your image
	     $src = $featuredImages[0]['full'];
 ?>
<img src="<?php echo $src;?>"/>
</div>
<div class="wraper">
<h1><?php the_title(); ?></h1>
</div><!-- ends wraper-->
</div><!-- ends healthandwellness_baner-->
<div class="theman_textarea">
 <div class="wraper">
<?php if (have_posts()) : while (have_posts()) : the_post();?>  
<?php the_content(); ?>
<?php endwhile; endif; ?>
 </div><!-- ends wraper-->
</div><!-- ends theman_textarea-->

<?php get_footer();?>
<?php 
/**
* template name: About
*/
get_header();?>

<div class="inner_banner">
<?php 
	if (has_post_thumbnail() ): 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );
		$featured_image = $image[0]; 
	else :
		$featured_image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg';
		
	endif;
?>
   <div class="blog_banner" style="background-image: url('<?php echo $featured_image; ?>')! important;">
   
       
         <div class="pagetopcont">
           <div class="wraper">
               <h1 class="heading"> <?php echo get_field('heading'); ?> </h1>
              <p> <em> <?php echo get_field('tag_line'); ?> </em></p>
           </div><!-- wraper ends -->
           
           <div class="clr"></div>
       
       
       </div><!-- pagetopcont ends -->
       
   </div><!-- blog_banner ends -->
</div><!--inner_banner ends-->
<div class="scroll_text">
<div class="wraper">
<div class="scroll_section">
<ul>

<li><a href="<?php echo get_site_url(); ?>/about/"><?php echo get_field('first_post_name'); ?> </a></li>
<li><a href="<?php echo get_site_url(); ?>/the-man/"><?php echo get_field('second_post_name'); ?></a></li>
<li><a href="<?php echo get_site_url(); ?>/beyond-the-ring/"><?php echo get_field('third_post_name'); ?></a></li>
<li><a href="<?php echo get_site_url(); ?>/wellness-the-brand/"><?php echo get_field('fourth_post_name'); ?></a></li><br class="clr" />

</ul>
</div>
<br class="clr" />
<p><?php echo get_field('scroll_text'); ?></p>
<a href="#wellness-brand"><img src="<?php  bloginfo('template_directory') ;?>/images/scrollmore.png" class="scroll_read" /></a>
</div><!-- ends wraper-->
</div><!-- ends scroll_text-->
<div class="container_meet">
<div class="meet_roberto" id="about">
 <?php /* query_posts('category_name=about-posts&showposts=1&order=ASC');  */?>
	
<div class="wraper">
<h2><?php echo get_field('title_1'); ?></h2>
<div class="meet_left_text">
        <?php echo get_field('content_para_1'); ?>
		<?php echo get_field('link_1'); ?>
</div>
<br class="clr" />
</div><!-- ends wraper-->

</div>
<!-- ends meet_roberto-->

<div class="mass_appeal" id="the_man">

<div class="wraper">
<h2><?php echo get_field('title_2'); ?></h2>
<div class="mas_right_text">
	<?php echo get_field('content_para_2'); ?>
	<?php echo get_field('link_2'); ?>
</div>

<br class="clr" />
</div><!-- ends wraper-->

</div>
<!-- ends mass_appeal-->
<div class="Champion_ring" id="beyond-ring">
	

<div class="wraper">
<h2><?php echo get_field('title_3'); ?></h2>
<div class="champion_text_left">
	<?php echo get_field('content_para_3'); ?>
</div>
<div class="champion_text_right">
<img src="../wp-content/uploads/2016/11/aboutland_fan.png"  />

</div>

<br class="clr" />
</div><!-- ends wraper-->

</div>
<!-- ends meet_roberto-->

<div class="accolades" id="wellness-brand">
	
<div class="wraper">
<h2><?php echo get_field('title_4'); ?></h2>
<div class="accolades_right">
<?php echo get_field('content_para_4'); ?>
</div>
<br class="clr" />
</div><!-- ends wraper-->

</div>
<!-- ends accolades-->

</div><!--container_meet-->
<div class="sports">
<ul>
<?php
	$args = array( 'post_type' => 'FooterStrip', 'order' => 'ASC');
	$loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
?>
<li> <?php if ( has_post_thumbnail()){ the_post_thumbnail('large', array('class' => 'img-responsive')); } ?> </li>
<?php endwhile; wp_reset_postdata(); ?>
</ul>
</div><!-- ends sports-->
<footer class="footer_aboutpage">
<div class="wraper">
<div class="about_footer_nav">
<?php wp_nav_menu(array('theme_location'=>'footer-menu'));?> 
</div><!--about_footer_nav-->
<div class="copyright">
<div class="socialicon_aboutpage">
<?php dynamic_sidebar('About Footer Social Media Icon'); ?>
</div><!-- socialicon_aboutpage-->
<div class="beyond_wellness_aboutpage">
<ul>
<li><a href="http://therealroberto.com/new/the-man/">The Man</a></li>
<li><a href="http://therealroberto.com/new/beyond-the-ring/">Beyond The Ring </a></li>
<li><a href="http://therealroberto.com/new/wellness-the-brand/">Wellness & The Brand</a></li>

</ul>
</div><!-- beyond_wellness_aboutpage-->
<p><?php dynamic_sidebar('copy right'); ?></p>
</div>
<br class="clr" />
</div><!-- wraper ends-->
</footer><!-- footer_aboutpage_nav-->


<?php wp_footer();?>
</body>
</html>

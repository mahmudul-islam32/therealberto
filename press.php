<?php 
/**
* template name: Press
*/
get_header();?>
<div class="press_page">
<div class="wraper">
<div class="press_left">
<div class="print_commercial">
<a href="#" class="press_link">PRESS </a>
<h3>
<img src="<?php  bloginfo('template_directory') ;?>/images/press_left_img.png" class="press_link_img" /></h3>
<br class="clr" />
<div class="right_print_commercial">
<a href="#print-target" class="right_print_commercial1"> <?php echo get_cat_name(7);?> </a>
 
<a href="#commercial-target" class="right_print_commercial1"> <?php echo get_cat_name(9);?> </a></div><!--right_print_commercial-->
</div>
<!--print_commercial-->
<div class="print_section" id="print-target">
<h3> <?php echo get_cat_name(7);?> </h3>
<div class="row">
 <div class="col_press1">
 <ul>
<!-------------------------------------->
 <?php query_posts('category_name=print&showposts=3&post_type=press'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
 <li><?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
 <h3><p><?php the_title(); ?></p></h3>
 </li>    <?php endwhile; ?> 
  </ul>
 </div><!-- ends col1-->
  <div class="col_press2">
  <ul>
   <?php query_posts('category_name=print&post_type=press&showposts=3&offset=3'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
 <li><?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
 <h3><p><?php the_title(); ?></p></h3>
 </li>    <?php endwhile; ?> 
  </ul>
 </div><!-- ends col2-->
 
   <div class="col_press3">
  <ul>
   <?php query_posts('category_name=print&post_type=press&showposts=3&offset=6'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
 <li><?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
 <h3><p><?php the_title(); ?></p></h3>
 </li>    <?php endwhile; ?> 
  </ul>
 </div><!-- ends col3-->

 
</div><!--row ends--><br class="clr" />



<div class="commercial" id="commercial-target">

<h1> <?php echo get_cat_name(9);?> </h1>
<ul class="rockwear">
<?php query_posts('category_name=commercial&post_type=press&showposts=2'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
<li><?php echo do_shortcode("[featured-video-plus]"); ?>
<h5><?php the_title(); ?></h5>
<p> <?php the_content();

 $content = get_the_content();
?> 
<?php if ($content) { ?>
<a href="<?php the_permalink(); ?>"> <span>Read Full Article</span> </a>
<?php } ?>
</p>
</li>
<?php endwhile; ?>
</ul>


</div><!--commercial--><br class="clr" />

</div><!--print_section-->

</div><!-- press_left-->
<div class="press_right">

<a href="#"><img src="http://therealroberto.com/new/wp-content/uploads/2016/10/press_right_img1.png" 
/></a>
</div><!-- press_right-->



<br class="clr" />
</div><!--end wraper-->
</div><!-- press_page-->


<?php get_footer();?>
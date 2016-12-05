<?php get_header();?>
<?php/* echo do_shortcode('[rev_slider Home]'); */?>

<?php echo do_shortcode('[rev_slider HomeNew]'); ?>

<div class="subscribe_updates">
<div class="wraper">
<p>subscribe for updates from roberto</p>

<?php echo do_shortcode('[mc4wp_form id="535"]'); ?>
</div><!-- wraper ends-->
</div><!--subscribe_updates ends-->
<?php dynamic_sidebar('Home Top'); ?>


<div class="testimonial_text">
<div class="wraper">
<img src="<?php  bloginfo('template_directory') ;?>/images/cottetion_mark1.png" class="cottesion" alt=""/>
<?php echo do_shortcode('[quoteRotator]'); ?>

<br class="clr"/>
</div><!-- wraper ends-->
</div><!--testimonial_text-->
<div class="mr_personality">
<?php dynamic_sidebar('MR PERSONALITY'); ?>

<br class="clr" />
</div><!--mr_personality ends-->
<div class="latest">
<div class="wraper">
<div class="latest_left">
<h1>The Latest</h1>
<div class="geally_edits">
<script type="text/javascript">
		//From
		function showdiv(valdiv){ //alert('message');  
			if(valdiv=="step1"){
				document.getElementById('first').style.display="block";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="none";
				document.getElementById('a1').className = "geally_photo active-div";
				document.getElementById('a2').className = "geally_photo";
				document.getElementById('a3').className = "geally_photo";
				
				
			}else if(valdiv=="step2"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="block";
				document.getElementById('third').style.display="none";
				document.getElementById('a1').className = "geally_photo";
				document.getElementById('a2').className = "geally_photo active-div";
				document.getElementById('a3').className = "geally_photo";
				

			}else if(valdiv=="step3"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="block";
				document.getElementById('a1').className = "geally_photo";
				document.getElementById('a2').className = "geally_photo";
				document.getElementById('a3').className = "geally_photo active-div";
			
			
			}	
		}
		
		</script>
<a id="a1" style="cursor:pointer;"  class="geally_photo active-div"  onClick="return showdiv('step1');">NEWS</a>
<a id="a2" style="cursor:pointer;"  class="geally_photo"  onClick="return showdiv('step2');">BLOG</a>
<a id="a3" style="cursor:pointer;" class="geally_photo"  onClick="return showdiv('step3');">PHOTO</a>
</div><!--geally_edits-->
<div class="row" style="display:block;" id="first">
 <div class="col1">
 <ul>
 <?php query_posts('category_name=news&showposts=1'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
 <li><?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
 <h3><p><?php the_title(); ?></p></h3>
 </li>    <?php endwhile; ?> 
 
 <?php query_posts('category_name=news&showposts=1&offset=1'.'&order=DESC'); ?>
  <?php global $dynamic_featured_image ?>
 <?php while (have_posts()) : the_post(); ?>
 <li> 	  <?php $featuredImages = $dynamic_featured_image->get_featured_images(); //here will be your image
	     $src = $featuredImages[0]['full'];
 ?>
	<a href="<?php the_permalink(); ?>"> <img src="<?php echo $src;?>"/></a>		
 <h3><p><?php the_title(); ?></p></h3>
 </li>    <?php endwhile; ?> 
  </ul>
  
 </div><!-- ends col1-->
  <div class="col2">
  <ul>
 <?php query_posts('category_name=news&showposts=3&offset=2'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
 <li> <?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
 <h3><p><?php the_title(); ?></p></h3>
 </li>    <?php endwhile; ?> 
  </ul>
 </div><!-- ends col2-->
  <br class="clr" />
</div><!--row ends-->

<div class="row" style="display:none;" id="second">
 <div class="col1">
 <ul>
 <?php query_posts('category_name=blog&showposts=3'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
 <li><?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
 <h3><p><?php the_title(); ?></p></h3>
 </li>    <?php endwhile; ?> 
 
  </ul>
  
 </div><!-- ends col1-->
  <div class="col2">
  <ul>
 <?php query_posts('category_name=blog&showposts=3&offset=3'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
 <li> <?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
 <h3><p><?php the_title(); ?></p></h3>
 </li>    <?php endwhile; ?> 
  </ul>
 </div><!-- ends col2-->
 <br class="clr" />
</div><!--row ends-->

<div class="row" style="display:none;float:left;" id="third">
<?php echo do_shortcode('[Best_Wordpress_Gallery id="2" gal_title="Photos"]'); ?>

</div><!--row ends-->
</div><!-- latest_left-->

    <?php dynamic_sidebar('Contact and Image 1'); ?>


<br class="clr" />
</div><!-- wraper ends-->
</div><!--latest ends-->
<div class="blog_section">
<div class="wraper">
<h1>BLOG</h1>
<ul><?php query_posts('category_name=blog&showposts=3'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
<li>
<div class="blog_imgli">
      <?php  if ( has_post_thumbnail()) {?>						   
				<div class="hovereffect"> <?php echo the_post_thumbnail('full');  ?>
				<div class="overlay">
               
				<p> 
				<a href="<?php the_permalink(); ?>">Read More >></a>
				</p> 
            </div>
				</div>
					<?php } ?>
<h6><?php echo get_the_date('d<\b\\r>M'); ?></h6>
<br class="clr" / >
</div>
<!--blog_imgli ends -->
<h4><?php the_title(); ?></h4>
<p><?php echo get_excerpt(100);  ?></p>
 <?php endwhile; ?> 
</li>   

</ul>

<br class="clr" />
</div><!-- wraper ends-->
</div><!--ends blog section-->

<div class="strong_women_children">
 <?php query_posts('category_name=home-posts&showposts=1'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
<div class="strong_women_children_left">
<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>

</div><!--strong_women_children_left ends-->
<div class="strong_women_childrenright">

<div class="strong_women_children_text">
<h6>01</h6>
<?php the_title(); ?>
<?php the_content('LEARN MORE'); ?>
</div><!--strong_women_children_text -->
</div><!--strong_women_children_right ends--> <?php endwhile; ?> 
<br class="clr"/>

<div class="strong_women_childrenright1">
<?php query_posts('category_name=home-posts&showposts=1&offset=1'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
<div class="strong_women_children_text">
<h6>02</h6>
<?php the_title(); ?>
<?php the_content('LEARN MORE'); ?>

</div><!--strong_women_children_text -->
</div><!--strong_women_children_right ends-->

<div class="strong_women_children_left1">
<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>

</div><!--strong_women_children_left ends--><br class="clr" /><?php endwhile; ?> 
</div><!--strong_women_children ends-->
<div class="father_persinality">
<h5>BEYOND THE RING</h5>

<h4>FATHER, ATHLETE,COACH, PERSONALITY</h4>

</div><!-- ends father_persinality-->




<?php get_footer();?>
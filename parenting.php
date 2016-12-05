<?php 
/**
* template name: PARENTING
*/
?>
<?php $global=$more;
$more=0; ?>
<?php
get_header();?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  var jq = jQuery.noConflict(true);
  jq( function() {
    jq( "#accordion" )
      .accordion({
        header: "> div > h3"
      })
      .sortable({
        axis: "y",
        handle: "h3",
        stop: function( event, ui ) {
          // IE doesn't register the blur when sorting
          // so trigger focusout handlers to remove .ui-state-focus
          ui.item.children( "h3" ).triggerHandler( "focusout" );
 
          // Refresh accordion to handle new order
          $( this ).accordion( "refresh" );
        }
      });
  } );
  </script>
<?php 
	if (has_post_thumbnail() ): 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );
		$featured_image = $image[0]; 
	else :
		$featured_image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg';
		
	endif;
?>
<div class="parenting_living_baner" style="background-image: url('<?php echo $featured_image; ?>')! important;">
<div class="wraper">

<div class="parenting_living_baner_text">
<div class="liv_text"><img src="<?php  bloginfo('template_directory') ;?>/images/border-top.png" style="width:100%"/>
<img src="<?php  bloginfo('template_directory') ;?>/images/parentingg_baner_textimg.png" alt=""  class="baner-textimg"/>
<div class="ban_text">
<h3><?php echo get_field('banner_text'); ?>
<img src="<?php  bloginfo('template_directory') ;?>/images/parentingg_baner_textimg2.png" alt="" class="baner-textimg1" />
 </h3>
</div><!--ban_text -->

<br class="clr" />
<img src="<?php  bloginfo('template_directory') ;?>/images/border-top.png" style="width:100%"/>
</div><!-- liv_text-->
</div><!--parenting_living_baner_text-->
<br class="clr" />
</div><!--wraper-->
</div><!--parenting_living_baner-->

<div class="healthy_living_page">
<div class="wraper">
<div class="healthy_living_left">
<script type="text/javascript">
		//From
		function showdiv(valdiv){ //alert('message');  
			if(valdiv=="step1"){
				document.getElementById('first').style.display="block";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="none";
				document.getElementById('fourth').style.display="none";
				document.getElementById('a1').className = "active-div-parenting";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "";
				document.getElementById('a4').className = "";
				
			}else if(valdiv=="step2"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="block";
				document.getElementById('third').style.display="none";
				document.getElementById('fourth').style.display="none";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "active-div-parenting";
				document.getElementById('a3').className = "";
				document.getElementById('a4').className = "";
				

			}else if(valdiv=="step3"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="block";
				document.getElementById('fourth').style.display="none";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "active-div-parenting";
				document.getElementById('a4').className = "";
			
			
			}	
			else if(valdiv=="step4"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="none";
				document.getElementById('fourth').style.display="block";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "";
				document.getElementById('a4').className = "active-div-parenting";
			
			
			}	
		}
		
		</script>
<ul class="top_ul_parenting">
<li id="a1" class="active-div-parenting"><a  style="cursor:pointer;"  onClick="return showdiv('step1');">Positive Parent</a></li>
<li  id="a2" class=""><a  id="a2" style="cursor:pointer;"   onClick="return showdiv('step2');">Children</a></li>
<li  id="a3" class=""><a  id="a3" style="cursor:pointer;"  onClick="return showdiv('step3');">Preteen</a></li>
<li  id="a4" class=""><a  id="a4" style="cursor:pointer;"  onClick="return showdiv('step4');">Teens</a></li>
</ul>

<div class="typo_graphy_cont"  style="display:block;" id="first">
 <?php query_posts('category_name=positive-parent&showposts=4&post_type=parenting'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>

<div class="typo_graphy">
<div class="typo_img_sec">
<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
<h1><?php echo get_field('sub_heading'); ?></h1>
</div><!--typo_img_sec-->
<div class="typo_graphy_text">
<h2><?php the_title(); ?></h2>
<p><?php the_content('Read More »'); ?></p>
<div class="social_area">
<span>comments<em><?php comments_popup_link('No Comments', '1 Comments', '% Comments'); ?></em></span>
<ul>
<li><?php echo do_shortcode('[feather_share]'); ?></li>
</ul>
<br class="clr" />
</div><!--social_area-->
</div><!--typo_graphy_text-->
</div>
<!--typo_graphy-->
<?php endwhile; ?>
</div><!--typo_graphy_cont-->
<div class="typo_graphy_cont"  style="display:none;" id="second">
 <?php query_posts('category_name=children&showposts=4&post_type=parenting'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>

<div class="typo_graphy">
<div class="typo_img_sec">
<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
<h1><?php echo get_field('sub_heading'); ?></h1>
</div><!--typo_img_sec-->
<div class="typo_graphy_text">
<h2><?php the_title(); ?></h2>
<p><?php the_content('Read More »'); ?></p>
<div class="social_area">
<span>comments<em><?php comments_popup_link('No Comments', '1 Comments', '% Comments'); ?></em></span>
<ul>
<li><?php echo do_shortcode('[feather_share]'); ?></li>
</ul>
<br class="clr" />
</div><!--social_area-->
</div><!--typo_graphy_text-->
</div>
<!--typo_graphy-->
<?php endwhile; ?>
</div><!--typo_graphy_cont-->



<div class="typo_graphy_cont"  style="display:none;" id="third">
 <?php query_posts('category_name=preteen&showposts=4&post_type=parenting'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>

<div class="typo_graphy">
<div class="typo_img_sec">
<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
<h1><?php echo get_field('sub_heading'); ?></h1>
</div><!--typo_img_sec-->
<div class="typo_graphy_text">
<h2><?php the_title(); ?></h2>
<p><?php the_content('Read More »'); ?></p>
<div class="social_area">
<span>comments<em><?php comments_popup_link('No Comments', '1 Comments', '% Comments'); ?></em></span>
<ul>
<li><?php echo do_shortcode('[feather_share]'); ?></li>
</ul>
<br class="clr" />
</div><!--social_area-->
</div><!--typo_graphy_text-->
</div>
<!--typo_graphy-->
<?php endwhile; ?>
</div><!--typo_graphy_cont-->



<div class="typo_graphy_cont"  style="display:none;" id="fourth">
 <?php query_posts('category_name=teens&showposts=4&post_type=parenting'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>

<div class="typo_graphy">
<div class="typo_img_sec">
<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
<h1><?php echo get_field('sub_heading'); ?></h1>
</div><!--typo_img_sec-->
<div class="typo_graphy_text">
<h2><?php the_title(); ?></h2>
<p><?php the_content('Read More »'); ?></p>
<div class="social_area">
<span>comments<em><?php comments_popup_link('No Comments', '1 Comments', '% Comments'); ?></em></span>
<ul>
<li><?php echo do_shortcode('[feather_share]'); ?></li>
</ul>
<br class="clr" />
</div><!--social_area-->
</div><!--typo_graphy_text-->
</div>
<!--typo_graphy-->
<?php endwhile; ?>
</div><!--typo_graphy_cont-->
<br class="clr" />




<div class="happy_ag">
<h4>Ah ha! so you thought living happy AND ageless was impossible?</h4>
<p>Get simple, delicious life recipes sent directly to you<br class="clr" /><span>To begin making healther mindful choices everyday!</span></p>
<?php echo do_shortcode('[mc4wp_form id="535"]'); ?>

</div><!--happy_ag-->

<div class="trending_sec">
<h3><span>TRENDING</span></h3>
<?php
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('cat=10&post_type=parenting&showposts=4&paged='.$paged);
while ($wp_query->have_posts()) : $wp_query->the_post();
?>
<div class="typo_graphy">

<div class="typo_img_sec">
<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
					<?php } ?>
<h1><?php echo get_field('sub_heading'); ?></h1>
</div><!--typo_img_sec-->
<div class="typo_graphy_text">
<h2><?php the_title(); ?></h2>
<p><?php the_content('Read More »'); ?></p>
<div class="social_area">
<span>comments<em><?php comments_popup_link('No Comments', '1 Comments', '% Comments'); ?></em></span><br />

<ul>
<li><?php echo do_shortcode('[feather_share]'); ?></li>
</ul>
<br class="clr" />
</div><!--social_area-->
</div><!--typo_graphy_text-->
<div class="clr"></div>
</div>
<?php endwhile; ?>
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
<!--typo_graphy-->





<br class="clr" />

</div><!--trending_sec-->






</div><!--healthy_living_left-->

<div class="healthy_living_right">

<?php dynamic_sidebar('About1'); ?>

<div class="topic_popular_post">

<div id="accordion">
  
  
  <div class="group">
    <h3>Topics</h3>
    <div>
     <ul>
        
   <?php query_posts('category_name=print&post_type=press'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?> </a></li>
  <?php endwhile; ?> 
       
      </ul>
    </div>
  </div><!--group-->
  
    <div class="group">
    <h3>Popular Posts</h3>
    <div>
     <ul>
    <?php query_posts('category_name=empower-tabs&post_type=Empower'.'&order=DESC'); ?>
    <?php while (have_posts()) : the_post(); ?>
	    <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?> </a></li> 
	<?php endwhile; ?>
      </ul>
    </div>
  </div><!--group-->
  <br class="clr" />
  
  
</div><!--accordion-->
</div><!--topic_popular_post-->


<div class="insta_sec">
<h4>Instagram</h4>
<ul>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<br class="clr" />
</ul>
</div><!--insta_sec-->

<div class="connect_social">
<h4>COnnect WIth Roberto</h4>
<?php echo do_shortcode("[cn-social-icon selected_icons='1,2,3,4']"); ?>
</div><!--connect_social-->

<div class="mantra">
<h3>Roberto's Mantra</h3>
</div><!--mantra-->

<div class="news_side">
<div class="news_side_head">
<a href="#"><img src="<?php  bloginfo('template_directory') ;?>/images/img/mail-box.jpg" /></a>
<h4>Stay in the Loop<br /><span>Subscribe to Our Newsletter</span></h4>
<br class="clr" />
</div><!--news_side_head-->
<div class="news_side_form"><?php echo do_shortcode('[mc4wp_form id="535"]'); ?>
<br class="clr"/>
</div>
</div><!--news_side-->
<div class="bottom_section">
<img src="<?php  bloginfo('template_directory') ;?>/images/img/instag_back.jpg" />
</div>

</div><!--healthy_living_right-->
<br class="clr" />
</div><!--wraper-->
</div><!--healthy_living_page-->




<?php get_footer();?>
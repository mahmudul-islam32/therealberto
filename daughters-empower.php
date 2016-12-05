<?php 
/**
* template name: DAUGHTER’S EMPOWER
*/
get_header();?>

<div class="daughter_empower_baner">
<?php if (have_posts()) : while (have_posts()) : the_post();?>  
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div><!--daughter's_empower_baner ends-->


<div class="why_girlchange">
<div class="wraper"> 

<?php echo get_field('banner_menu'); ?>
<div class="clr"> </div>
</div><!-- wraper ends-->
</div><!--why_girlchange-->

<div class="did_u_know">
<div class="wraper">
<?php echo get_field('banner_bottom_facts'); ?>
</div><!-- wraper ends-->
</div><!--did_u_know-->
<div class="over_average">
<div class="wraper">
<?php echo get_field('over_average'); ?>
</div><!-- wraper ends-->
</div><!--over_average-->

<div class="clr"> </div>
<?php echo get_field('explore'); ?>
</div>
<!--over_average-->
<!----------------------------------------------------TABS START------------------------------------------------------------------------>
<div class="girl_powerful">
<div class="wraper">
<?php echo get_field('power'); ?>
<div class="work_with">
<script type="text/javascript">
		//From
		function showdiv(valdiv){ //alert('message');  
			if(valdiv=="step1"){
				document.getElementById('first').style.display="block";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="none";
				document.getElementById('fourth').style.display="none";
				document.getElementById('fifth').style.display="none";
				document.getElementById('sixth').style.display="none";
				document.getElementById('a1').className = "work-active-div";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "";
				document.getElementById('a4').className = "";
				document.getElementById('a5').className = "";
				document.getElementById('a6').className = "";
				
			}else if(valdiv=="step2"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="block";
				document.getElementById('third').style.display="none";
				document.getElementById('fourth').style.display="none";
				document.getElementById('fifth').style.display="none";
				document.getElementById('sixth').style.display="none";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "work-active-div";
				document.getElementById('a3').className = "";
				document.getElementById('a4').className = "";
				document.getElementById('a5').className = "";
				document.getElementById('a6').className = "";

			}else if(valdiv=="step3"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="block";
				document.getElementById('fourth').style.display="none";
				document.getElementById('fifth').style.display="none";
				document.getElementById('sixth').style.display="none";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "work-active-div";
				document.getElementById('a4').className = "";
				document.getElementById('a5').className = "";
				document.getElementById('a6').className = "";

			}else if(valdiv=="step4"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="none";
				document.getElementById('fourth').style.display="block";
				document.getElementById('fifth').style.display="none";
				document.getElementById('sixth').style.display="none";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "";
				document.getElementById('a4').className = "work-active-div";
				document.getElementById('a5').className = "";
				document.getElementById('a6').className = "";

			}else if(valdiv=="step5"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="none";
				document.getElementById('fourth').style.display="none";
				document.getElementById('fifth').style.display="block";
				document.getElementById('sixth').style.display="none";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "";
				document.getElementById('a4').className = "";
				document.getElementById('a5').className = "work-active-div";
				document.getElementById('a6').className = "";

			}else if(valdiv=="step6"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="none";
				document.getElementById('fourth').style.display="none";
				document.getElementById('fifth').style.display="none";
				document.getElementById('sixth').style.display="block";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "";
				document.getElementById('a4').className = "";
				document.getElementById('a5').className = "";
				document.getElementById('a6').className = "work-active-div";

			}
		}
		
		</script>

<ul>
<li id="a1" class="work-active-div"><a style="cursor:pointer;" onClick="return showdiv('step1');">Work With Me</a></li>
<li id="a2" class=""><a style="cursor:pointer;"  onClick="return showdiv('step2');">Education</a></li>
<li id="a3" class=""><a style="cursor:pointer;"  onClick="return showdiv('step3');">Men</a></li>
<li id="a4" class=""><a style="cursor:pointer;"  onClick="return showdiv('step4');">Media</a></li>
<li id="a5" class=""><a style="cursor:pointer;"  onClick="return showdiv('step5');">Economics</a></li>
<li id="a6" class=""><a style="cursor:pointer;"  onClick="return showdiv('step6');">Rights</a></li>
</ul>

</div><!-- ends work_with-->
<!------------------------------------------------------------------->
<div class="education" style="display:block;" id="first">
<div class="educatio_left">
<?php query_posts('category_name=empower-tabs&showposts=1&post_type=Empower'.'&order=ASC'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
		<?php } ?>
	<?php endwhile; ?>
</div><!--education_left-->

<div class="educatio_right">
<?php echo get_field('edu_img'); ?>
<h4><?php the_title(); ?></h4>

<p><?php the_content(); ?></p>
<?php
$post_id = 12;
$value = get_field( 'arrows', $post_id );
echo $value;
?>


</div>
<!--education_right-->


</div><!--education-->
<!------------------------------------------------------------------->
<div class="education" style="display:none;" id="second">
<div class="educatio_left">
<?php query_posts('category_name=empower-tabs&post_type=Empower&showposts=1&offset=1'.'&order=ASC'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
		<?php } ?>
	<?php endwhile; ?>
</div><!--education_left-->

<div class="educatio_right">
<?php echo get_field('edu_img'); ?>
<h4><?php the_title(); ?></h4>

<p><?php the_content(); ?></p>
<?php
$post_id = 12;
$value = get_field( 'arrows', $post_id );
echo $value;
/* echo get_field( 'arrows', 12); */
?>

</div>
<!--education_right-->


</div><!--education-->
<!------------------------------------------------------------------->
<div class="education" style="display:none;" id="third">
<div class="educatio_left">
<?php query_posts('category_name=empower-tabs&post_type=Empower&showposts=1&offset=2'.'&order=ASC'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
		<?php } ?>
	<?php endwhile; ?>
</div><!--education_left-->

<div class="educatio_right">
<?php echo get_field('edu_img'); ?>
<h4><?php the_title(); ?></h4>

<p><?php the_content(); ?></p>
<?php
$post_id = 12;
$value = get_field( 'arrows', $post_id );
echo $value;
?>

</div>
<!--education_right-->


</div><!--education-->
<!------------------------------------------------------------------->
<div class="education" style="display:none;" id="fourth">
<div class="educatio_left">
<?php/* query_posts('category_name=news&showposts=1'.'&order=DESC'); */?>
<?php query_posts('category_name=empower-tabs&post_type=Empower&showposts=1&offset=3'.'&order=ASC'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
		<?php } ?>
	<?php endwhile; ?>
</div><!--education_left-->

<div class="educatio_right">
<?php echo get_field('edu_img'); ?>
<h4><?php the_title(); ?></h4>

<p><?php the_content(); ?></p>
<?php
$post_id = 12;
$value = get_field( 'arrows', $post_id );
echo $value;
?>

</div>
<!--education_right-->


</div><!--education-->
<!------------------------------------------------------------------->
<div class="education" style="display:none;" id="fifth">
<div class="educatio_left">
<?php query_posts('category_name=empower-tabs&post_type=Empower&showposts=1&offset=4'.'&order=ASC'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
		<?php } ?>
	<?php endwhile; ?>
</div><!--education_left-->

<div class="educatio_right">
<?php echo get_field('edu_img'); ?>
<h4><?php the_title(); ?></h4>

<p><?php the_content(); ?></p>
<?php
$post_id = 12;
$value = get_field( 'arrows', $post_id );
echo $value;
?>

</div>
<!--education_right-->
</div><!--education-->
<!------------------------------------------------------------------->
<div class="education" style="display:none;" id="sixth">
<div class="educatio_left">
<?php query_posts('category_name=empower-tabs&post_type=Empower&showposts=1&offset=5'.'&order=ASC'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php  if ( has_post_thumbnail()) {?>						   
				<a href="<?php the_permalink(); ?>"> 	<?php echo the_post_thumbnail('full');  ?></a>
		<?php } ?>
	<?php endwhile; ?>
</div><!--education_left-->

<div class="educatio_right">
<?php echo get_field('edu_img'); ?>
<h4><?php the_title(); ?></h4>

<p><?php the_content(); ?></p>

<?php
$post_id = 12;
$value = get_field( 'arrows', $post_id );
echo $value;
?>
</div>
<!--education_right-->


</div><!--education-->
<!------------------------------------------------------------------->

<div class="clr"> </div>
</div><!-- wraper ends-->
</div><!--girl_powerful-->
<!--------------------------------------------------TABS END-------------------------------------------------------------------------->

<div class="women_supported">
<div class="wraper">

<?php /* echo get_field('slogan'); */ ?>
<?php
$post_id = 12;
$value = get_field( 'slogan', $post_id );
echo $value;
?>

<div class="clr"> </div>
</div><!-- wraper ends-->
</div><!--women_supported-->
<div class="power_women">
<div class="wraper">
<?php  
$edu_id = 255;
$queried_post = get_post($edu_id );
$title = $queried_post->post_title;
$content = $queried_post->post_content; 
?>
<?php /* query_posts('post_id=255');  */?>
 <?php while (have_posts()) : the_post(); ?>
<h1><?php echo $title; ?></h1>
<div class="power_women_left">
<p><?php echo $content; ?></p>
</div><!--power_women_left -->
<?php endwhile; ?> 
<div class="power_women_right">


<div class="row">
 
<?php echo do_shortcode('[Best_Wordpress_Gallery id="3" gal_title="Women Power"]'); ?>
 
</div><!--row ends--><div class="clr"> </div>





</div><!--power_women_right -->
<div class="clr"> </div>
</div><!-- wraper ends-->
</div><!--power_women-->
<div class="face_facts">
<?php /* echo get_field('face_facts'); */ ?>
<?php
$post_id = 12;
$value = get_field( 'face_facts', $post_id );
echo $value;
?>

</div><!--face_facts-->


<div class="ready_pledge">
<?php
$post_id = 12;
$value = get_field( 'join_pledge', $post_id );
echo $value;
?>

<div class="clr"> </div>
</div>

<!--ready_pledge-->
<div class="support_movement">

<?php echo get_field('support'); ?>

</div><!-- ends support_movement-->
<div class="blog_newtitle">
<div class="wraper">
<h1><?php $blog = strtoupper(get_cat_name(3)); echo $blog; ?></h1>
<ul class="blog-img">
<!--------------------------------------------------------->
 <?php query_posts('category_name=blog&showposts=4'.'&order=DESC'); ?>
 <?php while (have_posts()) : the_post(); ?>
<!--------------------------------------------------------->
<li>
<?php  if ( has_post_thumbnail()) {?>
	<a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('full'); ?> </a>
			 <?php } ?>
<h4><?php the_title(); ?></h4>
<p><?php echo apply_filters('the_content', substr(get_the_content(), 0, 85)); ?></p>

<span><a href="<?php the_permalink(); ?>" class="read_morestitle">Read more</a></span>
</li>
<?php endwhile; ?>
</ul>

<div class="clr"> </div>
</div><!-- ends wraper-->
</div><!-- ends blog_newtitle-->

<?php get_footer();?>
<div class="work_with_meform">
<div class="form_work">
<h2>WORK WITH ME</h2>
<p>Thank you for your interest  to join me on this mission to support the well being of our Women and Girls.  
Father, Champion, Fighter with a flair to bring unity to do the Right Thing!</p>
<span>* FILL OUT FORM </span>
<?php echo do_shortcode('[contact-form-7 id="472" title="WORK WITH ME"]'); ?>

</div><!--ends form_work -->
</div><!-- end work_with_meform-->
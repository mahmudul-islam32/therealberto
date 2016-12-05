<?php 
/**
* template name: Contact Us
*/
get_header();?>

<div class="contact_page healthy_living_page">
<div class="wraper">
<h1><span>Contact</span></h1>
<div class="contact_page_left healthy_living_left">
<div class="contact_text_sec">
<?php  dynamic_sidebar('contact1'); ?>
</div><!--contact_text_sec-->



<div class="contact_form">
<div class="contact_form_left">
<?php echo do_shortcode('[contact-form-7 id="365" title="Media/Press/spokesperson/Etc."]'); ?>
</div>

<div class="contact_form_right">
<?php echo do_shortcode('[contact-form-7 id="366" title="Speaking Engagement/ Appearance"]'); ?>
</div><!--contact_form_right-->
<br class="clr" />
</div><!--contact_form-->

</div><!--contact_page_left-->

<div class="healthy_living_right">
<?php dynamic_sidebar('contact2');  ?>


<div class="cont_media_outer">
<div class="cont_media">
	<?php dynamic_sidebar('Contributor'); ?>
</div><!--cont_media-->
</div><!--cont_media_outer-->





</div><!--healthy_living_right-->
<br class="clr" />
</div><!--wraper-->
</div><!--healthy_living_page-->

<div class="testimonial_sec">
<div class="wraper">
<h1>testimonials</h1>

<?php $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 3 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

?>
  <?php $id= get_the_id(); ?>
<ul>
<li>
<div class="testimonial_text"><h3><?php the_title(); ?></h3>
<p><img class="left_comma" src="<?php  bloginfo('template_directory') ;?>/images/img/left-comma.png" /> 
<?php 

$content = get_the_content(); 
$content = strip_tags($content);
echo substr($content, 0, 140).  '<a href="'.get_the_permalink($id). '" class="read_more"> ...Read More </a>';

?>
<img class="right_comma" src="<?php  bloginfo('template_directory') ;?>/images/img/right-comma.png" /></p></div><!--testimonial_text-->

<?php  $post_id = get_the_ID() ?>

<h4>-<?php echo get_field('name_of_client') ?> <img src="<?php echo get_field('client_icon') ?>" /></h4>
</li>
<?php   endwhile;  ?>



<br class="clr" />
</ul>
</div><!--wraper-->
</div><!--testimonial_sec-->


<?php get_footer();?>
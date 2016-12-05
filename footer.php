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
<div class="footer">
<div class="wraper">
<img src="<?php  bloginfo('template_directory') ;?>/images/updates1.png" class="newupdates" />
<a href="#" class="join_roberto">JOIN ROBERRTO'S NEWS & UPDATES</a>
<div class="news_updates">
<?php echo do_shortcode('[mc4wp_form id="535"]'); ?>



</div><br class="clr" />
<h5>SITEMAP</h5>



<div class="footer_nav">

<?php wp_nav_menu(array('theme_location'=>'footer-menu'));?> 

</div>
<h3>GET IN TOUCH WITH ROBERTO</h3>
<div class="footer_socialicon">
<?php dynamic_sidebar('Footer Social Media Icon'); ?>
</div><!--footer_socialicon-->
<p><?php dynamic_sidebar('copy right'); ?></p>
<br class="clr" />
</div><!-- ends wraper-->
</div><!-- ends footer-->




 <?php wp_footer();?>
</body>
</html>

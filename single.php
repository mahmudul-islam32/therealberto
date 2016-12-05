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

<div class="healthy_living_page">
<div class="wraper">
<div class="healthy_living_left">

<?php if (have_posts()) : while (have_posts()) : the_post();?>  
<h1 class="page-heading"> <?php the_title(); ?></h1>
<P><?php the_content(); ?></P>
<?php endwhile; endif; ?>

</div><!--healthy_living_left-->

<div class="healthy_living_right">
<div class="healthy_living_right_top"><a href="#"><img src="<?php  bloginfo('template_directory') ;?>/images/healthy-living-right-1.jpg" /></a></div>
<div class="right_about_us">
<h3><?php the_title(); ?></h3>
<ul>
<li><a href="<?php echo get_site_url(); ?>/wellness-the-brand/">Wellness<br />&<br />The Brand</a></li>
<li><a href="<?php echo get_site_url(); ?>/beyond-the-ring/">Beyond<br />The Ring</a></li>
<li><a href="<?php echo get_site_url(); ?>/the-man/">The Man</a></li>
<br class="clr" />
</ul>
</div><!--right_about_us-->


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
<?php 
/**
* template name:  Beyond The Ring
*/
get_header();?>
<div class="beyond_ring">
<div class="wraper">
<h1>Beyond the Ring</h1>
<div class="scroll_section">
<ul>

<li><a href="<?php echo get_site_url(); ?>/about/"><?php echo get_field('about'); ?></a></li>
<li><a href="<?php echo get_site_url(); ?>/the-man/"><?php echo get_field('the_man'); ?></a></li>
<li><a href="<?php echo get_site_url(); ?>/beyond-the-ring/"><?php echo get_field('beyond_the_ring'); ?></a></li>
<li><a href="<?php echo get_site_url(); ?>/wellness-the-brand/"><?php echo get_field('wellness_the_brand'); ?></a></li><br class="clr" />

</ul>
</div>

</div><!-- wraper ends-->
</div><!-- beyond_ring-->
<div class="kids_humanity_links">
<script type="text/javascript">
		//From
		function showdiv(valdiv){ //alert('message');  
			if(valdiv=="step1"){
				document.getElementById('first').style.display="block";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="none";
				document.getElementById('a1').className = "active-div1";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "";
				
				
			}else if(valdiv=="step2"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="block";
				document.getElementById('third').style.display="none";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "active-div1";
				document.getElementById('a3').className = "";
				

			}else if(valdiv=="step3"){
				document.getElementById('first').style.display="none";
				document.getElementById('second').style.display="none";
				document.getElementById('third').style.display="block";
				document.getElementById('a1').className = "";
				document.getElementById('a2').className = "";
				document.getElementById('a3').className = "active-div1";
			
			
			}	
		}</script>
<div class="wraper">
<ul class="kids_nature">
<li id="a1" class="active-div1"><a  style="cursor:pointer;" onClick="return showdiv('step1');"><?php echo get_field('mr_single_dad'); ?></a></li>
<li id="a2" class=""><a  style="cursor:pointer;" onClick="return showdiv('step2');"><?php echo get_field('girls_&_womens_champion_title'); ?></a></li>
<li id="a3" class=""><a  style="cursor:pointer;" onClick="return showdiv('step3');"><?php echo get_field('parent_&_kids_leader_title'); ?>r</a></li>

</ul>
<br class="clr" />
</div><!-- wraper ends-->
</div><!-- kids_humanity_links ends-->
<div style="display:block;" id="first">
<?php echo get_field('mr_single_dad_contant'); ?>
<br class="clr"/>
<!-- singleded_section ends --></div>
<div style="display:none;" id="second">
<?php echo get_field('girls_&_womens_champion_contant'); ?>
<br class="clr"/>
<!-- championing_woman_text-->
</div>
<div style="display:none;" id="third">
<?php echo get_field('parent_&_kids_leader_contant'); ?>
<br class="clr"/>
</div>
<?php get_footer();?>
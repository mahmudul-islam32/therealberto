<?php
//get theme options

$options = get_option( 'RB_theme_settings' );


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
/*
* Print the <title> tag based on what is being viewed.
*/
global $page, $paged;
wp_title( '|', true, 'right' );
// Add the blog name.
bloginfo( 'name' );
// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
echo " | $site_description";

// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
echo ' | ' . sprintf( __( 'Page %s', 'RB' ), max( $paged, $page ) );	?>

</title>
<link href="<?php echo get_stylesheet_directory_uri();?>/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri();?>/responsive.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,400i,500,500i,700,700i" rel="stylesheet">
<link href="//db.onlinewebfonts.com/c/b6099b9771c0ad9f37fde16ed5d5c783?family=Dirty+Headline" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet"> 
 <?php wp_head();?> 
</head>

<body <?php body_class( $class ); ?>>
<header class="header_top">
<div class="wraper">
<?php if(isset($options['upload_mainlogo']) && $options['upload_mainlogo'] != '' ) { ?>
<a class="logo" href="<?php bloginfo('url');?>"><img src="<?php echo $options['upload_mainlogo']; ?>" border="0"/></a>
<?php }else { ?>

<a href="<?php bloginfo('url');?>"><img src="<?php // bloginfo('template_directory') ;?>/images/logo.png" border="0" /></a>
<?php } ?> 
<div class="header_right">

  <?php dynamic_sidebar('multilanguage'); ?> 

<?php if ( is_user_logged_in() ) {
?>
<span class="span_head"><a href="http://therealroberto.com/new/Logout/">SIGN OUT</a> </span>

<?php } if ( !is_user_logged_in() ) {   ?> <span class="span_head_s"> <a href="http://therealroberto.com/new/signin/">SIGN IN</a> | <a href="http://therealroberto.com/new/register/"> SIGN UP</a></span> <?php } ?>

<div class="socialicon">
<?php dynamic_sidebar('Header Social Media Icon'); ?>
</div><!--socialicon ends-->
<div class="search_bar">
<a href="#"><img src="<?php  bloginfo('template_directory') ;?>/images/search1.png" alt=""/></a>
                <div class="searchform1">
          
					<form role="search" method="get" id="searchform"
   class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
   <div>
       <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
       <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
       <input type="submit" id="searchsubmit"
           value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
   </div>
</form>
                    </div><!--searchform ends-->
</div>
<!--search_bar-->
</div><!--header_right ends-->
<br class="clr" />
</div><!-- wraper ends-->
</header><!--header_top ends-->
<nav class="nav">
<div class="wraper">
<?php wp_nav_menu(array('theme_location'=>'navigation-menu'));?> 
</div><!-- wraper ends-->
</nav><!-- nav-->
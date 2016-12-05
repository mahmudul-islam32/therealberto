<?php
require('inc/RB.php');
$options = get_option( 'RB_theme_settings' );





register_nav_menus( array(
'navigation-menu' => __( 'navigation Menu', 'RB' ),
) );

register_nav_menus( array(
'footer-menu' => __( 'footer Menu', 'RB' ),
) );

register_nav_menus( array(
'blog-menu' => __( 'Blog Menu', 'RB' ),
) );





function RB_widgets_init() {

 


register_sidebar( array(
'id' => 'Header Social Media Icon',
'name' => __( 'Header Social Media Icon', 'Header Social Media Icon' ),
'before_widget' => '<div class="social-media-header">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
) );
register_sidebar( array(
'id' => 'Home Top',
'name' => __( 'Home Top', 'Home Top' ),
'before_widget' => '<div class="home-top">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',	
) );
register_sidebar( array(
'id' => 'MR PERSONALITY',
'name' => __( 'MR PERSONALITY', 'MR PERSONALITY' ),
'before_widget' => '<div class="personality-div">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
) );
register_sidebar( array(
'id' => 'Footer Social Media Icon',
'name' => __( 'Footer Social Media Icon', 'Footer Social Media Icon' ),
'before_widget' => '<div class="social-media-footer">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
	) );
	register_sidebar( array(
'id' => 'About Footer Social Media Icon',
'name' => __( 'About Footer Social Media Icon', 'About Footer Social Media Icon' ),
'before_widget' => '<div class="about-social-media-footer">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
	) );
	register_sidebar( array(
'id' => 'Contributor',
'name' => __( 'Contributor', 'Contributor' ),
	) );
	register_sidebar( array(
'id' => 'Contact and Image 1',
'name' => __( 'Contact and Image 1', 'Contact and Image 1' ),
'before_widget' => '<div class="latest_right img1">',
'after_widget' => '</div>',
	) );
	register_sidebar( array(
'id' => 'Contact and Image 2',
'name' => __( 'Contact and Image 2', 'Contact and Image 2' ),
'before_widget' => '<div class="latest_right img2">',
'after_widget' => '</div>',
	) );
	register_sidebar( array(
'id' => 'About1',
'name' => __( 'About1', 'About1' ),
'before_widget' => '<div class="latest img3">',
'after_widget' => '</div>',
	) );
}
add_action( 'widgets_init', 'RB_widgets_init' );

 
/* ------------------ feature image ----------*/
add_theme_support('post-thumbnails');

/* for content limit */
/*function excerpt_read_more_link($output) {
 global $post;
 return $output . '<br> <br><a href="'. get_permalink($post->ID) . '" class="more"> Read More</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');


function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...&nbsp; <a href="'.get_permalink().'" class="more">more</a>';

  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}*/



/*Extra function for excerpt Working Properly */

function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.'... <br> <br> <a href="'.$permalink.'" class="more">Read More >></a>';
  return $excerpt;
}




/*  ----------  pagination ---------- */

function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1; 
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }  
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 5 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}


register_post_type( 'slides',
		array(
		  'labels' => array(
			'name' => _x( 'Slides', 'post type general name' ),
			'singular_name' => _x( 'Slide', 'post type singular name' ),
			'add_new' => _x( 'Add New', 'Slide' ),
			'add_new_item' => __( 'Add New Slide' ),
			'edit_item' => __( 'Edit Slide' ),
			'new_item' => __( 'New Slide' ),
			'view_item' => __( 'View Slide' ),
			'search_items' => __( 'Search Slides' ),
			'not_found' =>  __( 'No Slides found' ),
			'not_found_in_trash' => __( 'No Slides found in Trash' ),
			'parent_item_colon' => ''
		  ),
		  'public' => true,
		  'show_in_nav_menus' => false,
		  'exclude_from_search' => true,
		  'supports' => array('title','editor','thumbnail'),
		)
);
if ( ! function_exists( 'RB_comment' ) ) :
/**
* Template for comments and pingbacks.
*
* To override this walker in a child theme without modifying the comments template
* simply create your own RB_comment(), and that function will be used instead.
*
* Used as a callback by wp_list_comments() for displaying the comments.
*
*/
function RB_comment( $comment, $args, $depth ) {
$GLOBALS['comment'] = $comment;
switch ( $comment->comment_type ) :
case '' :
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
<div id="comment-<?php comment_ID(); ?>">
<div class="comment-author vcard">
<?php echo get_avatar( $comment, 40 ); ?>
<?php printf( __( '%s <span class="says">says:</span>', 'RB' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
</div><!-- .comment-author .vcard -->
<?php if ( $comment->comment_approved == '0' ) : ?>
<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'RB' ); ?></em>
<br />
<?php endif; ?>

<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
<?php
/* translators: 1: date, 2: time */
printf( __( '%1$s at %2$s', 'RB' ), get_comment_date(), get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'RB' ), ' ' );
?>
</div><!-- .comment-meta .commentmetadata -->

<div class="comment-body"><?php comment_text(); ?></div>


<div class="reply">
<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
</div><!-- .reply -->
</div><!-- #comment-## -->

<?php
break;
case 'pingback' :
case 'trackback' :
?>
<li class="post pingback">
<p><?php _e( 'Pingback:', 'RB' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'RB' ), ' ' ); ?></p>
<?php
break;
endswitch;
}
endif;

remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );

add_action( 'init', 'register_cpt_Press' );

function register_cpt_Press() {

	$labels = array(
		'name' => __( 'Press', 'Press' ),
		'singular_name' => __( 'Press', 'Press' ),
		'add_new' => __( 'Add New', 'Press' ),
		'add_new_item' => __( 'Add New Press', 'Press' ),
		'edit_item' => __( 'Edit Press', 'Press' ),
		'new_item' => __( 'New Press', 'Press' ),
		'view_item' => __( 'View Press', 'Press' ),
		'search_items' => __( 'Press studies', 'Press' ),
		'not_found' => __( 'No Press found', 'Press' ),
		'not_found_in_trash' => __( 'No Press found in Trash', 'Press' ),
		'parent_item_colon' => __( 'Parent Press:', 'Press' ),
		'menu_name' => __( 'Press', 'Press' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title','editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'menu_position' => 100,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => false,
		'capability_type' => 'post'
	);

	register_post_type( 'Press', $args );
}
add_action( 'init', 'register_cpt_Parenting' );

function register_cpt_Parenting() {

	$labels = array(
		'name' => __( 'Parenting', 'Parenting' ),
		'singular_name' => __( 'Parenting', 'Parenting' ),
		'add_new' => __( 'Add New', 'Parenting' ),
		'add_new_item' => __( 'Add New Parenting', 'Parenting' ),
		'edit_item' => __( 'Edit Parenting', 'Parenting' ),
		'new_item' => __( 'New Parenting', 'Parenting' ),
		'view_item' => __( 'View Parenting', 'Parenting' ),
		'search_items' => __( 'Parenting studies', 'Parenting' ),
		'not_found' => __( 'No Parenting found', 'Parenting' ),
		'not_found_in_trash' => __( 'No Parenting found in Trash', 'Parenting' ),
		'parent_item_colon' => __( 'Parent Parenting:', 'Parenting' ),
		'menu_name' => __( 'Parenting', 'Parenting' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title','editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'menu_position' => 100,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => false,
		'capability_type' => 'post'
	);

	register_post_type( 'Parenting', $args );
}


add_action( 'init', 'register_cpt_Empower' );

function register_cpt_Empower() {

	$labels = array(
		'name' => __( 'Empower', 'Empower' ),
		'singular_name' => __( 'Empower', 'Empower' ),
		'add_new' => __( 'Add New', 'Empower' ),
		'add_new_item' => __( 'Add New Empower', 'Empower' ),
		'edit_item' => __( 'Edit Empower', 'Empower' ),
		'new_item' => __( 'New Empower', 'Empower' ),
		'view_item' => __( 'View Empower', 'Empower' ),
		'search_items' => __( 'Empower studies', 'Empower' ),
		'not_found' => __( 'No Empower found', 'Empower' ),
		'not_found_in_trash' => __( 'No Empower found in Trash', 'Empower' ),
		'parent_item_colon' => __( 'Parent Empower:', 'Empower' ),
		'menu_name' => __( 'Empower', 'Empower' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title','editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'menu_position' => 100,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => false,
		'capability_type' => 'post'
	);

	register_post_type( 'Empower', $args );
}




function custom_post_type() {

	$labels = array(
		'name' => __( 'Testimonials', 'Testimonials' ),
		'singular_name' => __( 'Testimonials', 'Testimonials' ),
		'add_new' => __( 'Add New', 'Testimonials' ),
		'add_new_item' => __( 'Add New Testimonials', 'Testimonials' ),
		'edit_item' => __( 'Edit Testimonials', 'Testimonials' ),
		'new_item' => __( 'New Testimonials', 'Testimonials' ),
		'view_item' => __( 'View Testimonials', 'Testimonials' ),
		'search_items' => __( 'Testimonials studies', 'Testimonials' ),
		'not_found' => __( 'No Testimonials found', 'Testimonials' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash', 'Testimonials' ),
		'parent_item_colon' => __( 'Parent Testimonials:', 'Testimonials' ),
		'menu_name' => __( 'Testimonials', 'Testimonials' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title','editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'menu_position' => 100,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => false,
		'capability_type' => 'post'
	);

	register_post_type( 'Testimonials', $args );
}


function custom_post_typefr() {

	$labels = array(
		'name' => __( 'FooterStrip', 'FooterStrip' ),
		'singular_name' => __( 'FooterStrip', 'FooterStrip' ),
		'add_new' => __( 'Add New', 'FooterStrip' ),
		'add_new_item' => __( 'Add New FooterStrip', 'FooterStrip' ),
		'edit_item' => __( 'Edit FooterStrip', 'FooterStrip' ),
		'new_item' => __( 'New FooterStrip', 'FooterStrip' ),
		'view_item' => __( 'View FooterStrip', 'FooterStrip' ),
		'search_items' => __( 'FooterStrip studies', 'FooterStrip' ),
		'not_found' => __( 'No FooterStrip found', 'FooterStrip' ),
		'not_found_in_trash' => __( 'No FooterStrip found in Trash', 'FooterStrip' ),
		'parent_item_colon' => __( 'Parent FooterStrip:', 'FooterStrip' ),
		'menu_name' => __( 'FooterStrip', 'FooterStrip' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title','editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'menu_position' => 100,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => false,
		'capability_type' => 'post'
	);

	register_post_type( 'FooterStrip', $args );
}
add_action( 'init', 'custom_post_typefr', 0 );



add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Contact Page Content Left', 'Contact Page Content Left' ),
        'id' => 'contact1',
        'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>',
    ) );


    register_sidebar( array(
        'name' => __( 'Contact Page Content Right', 'Contact Page Content Right' ),
        'id' => 'contact2',
        'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>',
) );

register_sidebar( array(
        'name' => __( 'Multilanguage', 'Multilanguage' ),
        'id' => 'multilanguage',
        'before_widget' => '',
		'after_widget' => '',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>',
) );
register_sidebar( array(
        'name' => __( 'Blog Top', 'Blog Top' ),
        'id' => 'blogtop',
        'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>',
) );

register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'Blog Sidebar' ),
        'id' => 'blogsidebar',
        'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>',
) );

register_sidebar( array(
        'name' => __( 'Copy Right', 'Copy Right' ),
        'id' => 'copyright',
        'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>',
) );
}

?>

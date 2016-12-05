<?php
/*-----------------------------------------------------------------------------------*/
/* Edit Theme Activation Message */
/*-----------------------------------------------------------------------------------*/


function optionsframework_admin_message() { 
	?>
    <script type="text/javascript">
    jQuery(function(){
    	
        var message = '<p><?php _e('New theme activated. This theme comes with an', 'RB'); ?> <a href="<?php echo admin_url('admin.php?page=RB-settings'); ?>"><?php _e('options panel', 'RB'); ?></a>';
    	jQuery('.themes-php #message2').html(message);
		
    });
    </script>
    <?php
	
}

add_action('admin_head', 'optionsframework_admin_message'); 

/*-----------------------------------------------------------------------------------*/
/* START Admin */
/*-----------------------------------------------------------------------------------*/

//Init theme options to white list our options
function RB_settings_init(){
register_setting( 'RB_settings', 'RB_theme_settings' );
}

// add js for admin
function RB_scripts() {
	wp_enqueue_script("theme-admin",  get_template_directory_uri(). "/inc/js/admin-scripts.js", false, "1.0");
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_script('bbq',  get_template_directory_uri(). '/inc/js/jquery.ba-bbq.min.js');
	wp_enqueue_script( 'mfields-colorpicker', get_template_directory_uri().'/inc/color-picker/colorpicker.js', array( 'jquery' ), false, true );
}

//add css for admin
function RB_style() {
	wp_enqueue_style('thickbox');
	wp_enqueue_style('admin-style',  get_template_directory_uri(). '/inc/css/admin-style.css' );
	wp_enqueue_style('mfields-colorpicker',  get_template_directory_uri(). '/admin/color-picker/colorpicker.css' );
}
function RB_echo_scripts()
{
?>

<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function() {

// Media Uploader
window.formfield = '';

jQuery('.upload_image_button').live('click', function() {
	window.formfield = jQuery('.upload_field',jQuery(this).parent());
	tb_show('', 'media-upload.php?type=image&TB_iframe=true');
	return false;
});

window.original_send_to_editor = window.send_to_editor;
window.send_to_editor = function(html) {
	if (window.formfield) {
		imgurl = jQuery('img',html).attr('src');
		window.formfield.val(imgurl);
		tb_remove();
	}
	else {
		window.original_send_to_editor(html);
	}
	window.formfield = '';
	window.imagefield = false;
}

});
//]]> 
</script>
<?php
}

if (isset($_GET['page']) && $_GET['page'] == 'RB-settings') {
	add_action('admin_print_scripts', 'RB_scripts'); 
	add_action('admin_print_styles', 'RB_style');
	add_action('admin_head', 'RB_echo_scripts');
}

/**
* Load up the menu page
*/
function RB_add_settings_page() {
add_theme_page( __( 'Theme Options', 'RB' ), __( 'Theme Options', 'RB' ), 'manage_options', 'RB-settings', 'RB_theme_settings_page');
}

add_action( 'admin_init', 'RB_settings_init' );
add_action( 'admin_menu', 'RB_add_settings_page' );

/************************************
* set up all the select field options
************************************/
$enable_disable = array('enable','disable');
$disable_enable = array('disable','enable');
$slider_types = array('RB');
$slider_effects = array('random', 'fade', 'fold', 'slideInRight', 'slideInLeft', 'sliceDown', 'sliceDownLeft', 'sliceUp', 'sliceUpLeft', 'sliceUpDown', 'sliceUpDownLeft', 'boxRandom', 'boxRain', 'boxRainReverse', 'boxRainGrow', 'boxRainGrowReverse');
$post_orderby = array('date','title');
$post_order = array('DESC','ASC');

/**********************************
* Create the options page
*********************************/
function RB_theme_settings_page() {


if ( ! isset( $_REQUEST['updated'] ) )
$_REQUEST['updated'] = false;

?>
<div class="wrap">

<?php
// If the form has just been submitted, this shows the notification
if ( $_GET['settings-updated'] ) { ?>
<div id="message" class="updated fade RB-message"><p><?php _e('Options Saved','RB'); ?></p></div>
<?php } ?>

<h2 class="dummy-heading"></h2>

<div id="options-header">
	<h2><?php _e( 'Theme Settings','RB'); ?><div id="icon-options-general" class="icon32"></div></h2>
</div>
<!-- END header -->

<div id="panel-content">
<form method="post" action="options.php">

<?php
settings_fields( 'RB_settings' );
$options = get_option( 'RB_theme_settings' );
?>


<div id="wrap-left">
    <ul class="tabs">
        <li><a href="#tab1"><?php _e('General Settings','RB'); ?></a></li>
        
    </ul>
</div><!-- END wrap-left -->


<div id="wrap-right">
<div class="tab_container">


<!--  General Settings -->
<div id="tab1" class="tab_content">
<ul>

<!-- option block -->
<li class="clearfix">
<h4><?php _e('Logo','RB'); ?></h4>

<div class="one_half">
<input id="RB_theme_settings[upload_mainlogo]" class="regular-text upload_field" type="text" size="36" name="RB_theme_settings[upload_mainlogo]" value="<?php echo $options['upload_mainlogo']; ?>" />
<input class="upload_image_button button-secondary" type="button" value="Choose Image" />

<?php if($options['upload_mainlogo']) { ?>
<br /><br />
<img src="<?php echo $options['upload_mainlogo']; ?>" alt="logo" width="220" class="ta_image_preview" />
<?php } ?>

</div><!-- End one_half -->

<div class="one_half">
<label class="description" for="RB_theme_settings[upload_mainlogo]"><?php _e( 'Upload an image, choose an image from your media libray (make sure to hit "insert to post") or type in the URL for the main logo. This is the main logo for your website','RB'); ?></label>
</div><!-- End one_half -->

</li>
<!-- option block --> 

<!-- option block -->
<li class="clearfix">
<h4><?php _e('Favicon','RB'); ?></h4>

<div class="one_half">
<input id="RB_theme_settings[upload_favicon]" class="regular-text upload_field" type="text" size="36" name="RB_theme_settings[upload_favicon]" value="<?php echo $options['upload_favicon'] ; ?>" />
<input class="upload_image_button button-secondary" type="button" value="Choose Image" />

<?php if($options['upload_favicon']) { ?>
<br /><br />
<img src="<?php echo $options['upload_favicon']; ?>" alt="logo" width="32" class="ta_image_preview" />
<?php } ?>

</div><!-- End one_half -->

<div class="one_half">
<label class="description" for="RB_theme_settings[upload_favicon]"><?php _e( 'Upload an image, choose an image from your media libray (make sure to hit "insert to post") or type in the URL for the main logo. This is the main logo for your website','RB'); ?></label>
</div><!-- End one_half -->

</li>

<!-- option block -->
<li class="clearfix">
<h4><?php _e( 'Phone Number' ,'RB' ); ?></h4>

<div class="one_half">
<input id="RB_theme_settings[phone]" class="regular-text" type="text" name="RB_theme_settings[phone]" value="<?php echo $options['phone'] ; ?>" />
</div><!-- End one_half -->

<div class="one_half">
<label class="description" for="RB_theme_settings[phone]"><?php _e( 'Enter a phone number for your header region above the search bar. Leave blank to disable.<br />HTML is allowed.' ,'RB' ); ?></label>
</div><!-- End one_half -->

</li>
<!-- option block --> 



</li>
<!-- option block -->
<li class="clearfix">
<h4><?php _e( 'Analytics Code', 'RB' ); ?></h4>

<div class="one_half">
<textarea id="RB_theme_settings[analytics]" class="regular-text" name="RB_theme_settings[analytics]" rows="5"><?php echo $options['analytics'] ; ?></textarea>
</div><!-- End one_half -->

<div class="one_half">
<label class="description" for="RB_theme_settings[analytics]"><?php _e( 'Enter your analytics tracking code. This code is added to your header tag.' ,'RB' ); ?></label>
</div><!-- End one_half -->

</li>
<!-- option block -->




</ul>
</div>
<!--end main tab-->


</div><!--end tab container-->
</div><!-- END wrap-right -->
<div class="clear"></div>

<p class="submit-changes">
<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'RB' ); ?>" />
</p>
</form>
</div><!-- END panel-content -->
</div><!-- END wrap -->
<?php
}
/**
* Sanitize and validate input. Accepts an array, return a sanitized array.
*/
function RB_options_validate( $input ) {
global $select_options, $radio_options;

// Our checkbox value is either 0 or 1
if ( ! isset( $input['option1'] ) )
$input['option1'] = null;
$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

// Say our text option must be safe text with no HTML tags
$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );


// Our radio option must actually be in our array of radio options
if ( ! isset( $input['radioinput'] ) )
$input['radioinput'] = null;
if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
$input['radioinput'] = null;

// Say our textarea option must be safe text with the allowed tags for posts
$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

return $input;
}
<?php
//CONSTANTS
	require_once ('php/constants.php');

//OTHER FUNCTIONS
	require_once ('php/other-functions.php');

//TITLE
	function baseTheme_filter_wp_title( $currenttitle, $sep, $seplocal ) {
		//Grab the site name
		$site_name = get_bloginfo( 'name' );
		// Add the site name after the current page title
		$full_title = $site_name . $currenttitle;
		// If we are on the front_page or homepage append the description
		if ( is_front_page() || is_home() ) {
			//Grab the Site Description
			$site_desc = get_bloginfo( 'description' );
			//Append Site Description to title
			$full_title .= ' ' . $sep . ' ' . $site_desc;
		}
		return $full_title;
	}
	// Hook into 'wp_title'
	add_filter( 'wp_title', 'baseTheme_filter_wp_title', 10, 3 );
	
//SCRIPTS
	function jQueryBaseTheme_scripts(){
	//Register and enqueue second script (custom)
		//Register the script(s) like this for a theme:
		wp_register_script('custom_script', get_template_directory_uri().'/scripts/custom.js', array('jquery'));
		//For either a plugin or a theme, you can then enqueue the script(s):
		wp_enqueue_script('custom_script');
	}
	add_action('wp_enqueue_scripts', 'jQueryBaseTheme_scripts');

?>
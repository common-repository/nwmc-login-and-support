<?php
/*
Plugin Name: NWMC Login and Support
Plugin URI: http://northwestmediacollective.com
Description: Displays a logo under login and admin branding
Version: 1.6.0
Author: Travis Buck
License: GPLv3
*/


// adds viewport meta
add_action('wp_head', 'nwmc_viewport_meta');
function nwmc_viewport_meta(){
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
}

// Adds to do_action('login_footer'); 

add_action('login_form', 'nwmc_add_to_login_footer');
function nwmc_add_to_login_footer() {
     echo '<div style="text-align: center; padding:2px;">';
	echo ' <div style="float:left;">';
	echo '<img src="' . plugins_url( 'nwmc-login-and-support/imgs/nwmc-pill.jpg', '_FILE_' ) . '" > ';
	echo ' </div>';
	 echo '<div style="float:left;"><h4>NW Media Collective</h4></div>';
	echo ' <br />';
	echo ' <br />';
	echo ' </div>';
}
// modifys the default wordpress admin text in footer
function nwmc_remove_footer_admin () {
 
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Maintenance by <a href="https://northwestmediacollective.com" target="_blank">NW Media Collective Inc</a> | Trouble Ticket: <a href="https://help.northwestmediacollective.com/portal/sign_in" target="_blank">Submit a ticket</a></p>';
 
}
 
add_filter('admin_footer_text', 'nwmc_remove_footer_admin');
?>
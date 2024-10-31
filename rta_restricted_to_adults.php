<?php
/**
 * @package rta_restricted_to_adults
 * @version 1.01
 */
/*
Plugin Name: RTA - Restricted To Adults Header
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: The RTA label is free to use, voluntary, and universally available to any website that wishes to clearly and effectively label itself as being inappropriate for viewing by minors - this plugin adds the RTA header to all of the pages on your website. 
Author: Adult Web Host
Version: 1.0
Author URI: https://www.adultwebhost1.com
Text Domain: rta_restricted_to_adults
*/

add_action('wp_head','rta_restricted_to_adults_meta_tag');

add_action( 'send_headers', 'rta_restricted_to_adults_add_header_RTA' );
// ADD RTA to response header
function rta_restricted_to_adults_add_header_RTA() {header( 'Rating: RTA-5042-1996-1400-1577-RTA' );}
// Add RTA meta tag
function rta_restricted_to_adults_meta_tag() {
	echo '<meta name="RATING" content="RTA-5042-1996-1400-1577-RTA" />';}
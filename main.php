<?php
/**
 * Plugin name: Feed noindex
 * Plugin URI: https://github.com/yat8823jp/feed-noindex
 * Description: Define noindex for WordPress feeds
 * Version: 1.0.0
 * Author: yat8823jp
 * Author URI: https:rish.style
 * Text Domain: feed-noindex
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 */

/*
 * function feed noindex
 */
add_action( 'template_redirect', function() {
	if ( is_feed() && headers_sent() === false ) {
		header( 'X-Robots-Tag: noindex, follow', true );
	}
} );

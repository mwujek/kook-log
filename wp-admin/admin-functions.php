<?php
/**
 * Administration Functions
 *
 * This file is deprecated, use 'wp-admin/includes/admin.php' instead.
 *
 * @deprecated 2.5.0
 * @package WordPress
 * @subpackage Administration
 */

_deprecated_file( basename(__FILE__), '2.5.0', 'wp-admin/includes/admin.php' );
update_option( 'siteurl', 'http://localhost' );
update_option( 'home', 'http://localhost' );

/** WordPress Administration API: Includes all Administration functions. */
require_once(ABSPATH . 'wp-admin/includes/admin.php');

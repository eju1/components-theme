<?php
/**
 * 
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 * 
 */

// Cleanup Wordpress defaults
include_once('includes/cleanup.php');

// Add theme support
include_once('includes/theme-support.php');

// File routing helpers
include_once('includes/routing.php');

// Enqueue Scripts
include_once('includes/enqueue-scripts.php');

?>
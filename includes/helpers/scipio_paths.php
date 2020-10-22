<?php

/**
 * Define directory path constants 
 * 
 * @package Scipio
 * @subpackage WordPress
 * @since Scipio 1.0.0
 */


// JS
if (!defined('SCIPIO_JS_PATH')) {
  define('SCIPIO_JS_PATH', untrailingslashit(get_template_directory()) . '/assets/dist/js');
}
//  JS URI
if (!defined('SCIPIO_JS_URI')) {
  define('SCIPIO_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/dist/js');
}


//  CSS
if (!defined('SCIPIO_CSS_PATH')) {
  define('SCIPIO_CSS_PATH', untrailingslashit(get_template_directory()) . '/assets/dist/css');
}
// CSS URI
if (!defined('SCIPIO_CSS_URI')) {
  define('SCIPIO_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/dist/css');
}

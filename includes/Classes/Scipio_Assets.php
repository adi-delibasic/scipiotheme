<?php

/**
 * Scipio Theme Assets 
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */

namespace SCIPIO\Classes;

use SCIPIO\Traits\Scipio_Singleton;


class Scipio_Assets {
  use Scipio_Singleton;

  protected function __construct() {
    $this->scipio_enqueue_assets();
  }

  public function register_styles() {
    wp_register_style('main-css', SCIPIO_CSS_URI . '/main.css', array(), filemtime(SCIPIO_CSS_PATH . '/main.css'), 'all');
    wp_enqueue_style('main-css');
  }
  public function register_scripts() {
    wp_register_script('main-js', SCIPIO_JS_URI . '/main.js', array(), filemtime(SCIPIO_JS_PATH . '/main.js'), false);
    wp_enqueue_script('main-js');
  }

  protected function scipio_enqueue_assets() {
    add_action('wp_enqueue_scripts', array($this, 'register_styles'));
    add_action('wp_enqueue_scripts', array($this, 'register_scripts'));
  }
}

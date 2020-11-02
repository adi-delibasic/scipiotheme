<?php

/**
 * Theme Bootstrap Class
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */

namespace SCIPIO\Classes;

use SCIPIO\Classes\Scipio_Customizer;
use SCIPIO\Traits\Scipio_Singleton;

class Scipio_Bootstrap {
  use Scipio_Singleton;
  protected function __construct() {
    //Load Classes
    Scipio_Assets::get_instance();
    Scipio_Callbacks::get_instance();
    Scipio_Menus::get_instance();
    Scipio_Customizer::get_instance();
    //Call method containing filters & actions
    $this->scipio_actions();
  }

  //Init theme actions
  protected function scipio_actions() {
    add_action('after_setup_theme', array($this, 'scipio_setup'));
  }

  public function scipio_setup() {

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     * 
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

    //Logo
    add_theme_support('custom-logo', array(
      'height'      => 100,
      'width'       => 100,
      'flex-height' => false,
      'flex-width'  => true,
    ));
    //Title tag
    add_theme_support('title-tag');

    //Post Thumbnails
    add_theme_support('post-thumbnails');

    //Feed links
    add_theme_support('automatic-feed-links');

    //Valid HTML5 
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption',
      'script',
      'style'
    ));

    //Gutenberg
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');

    /** In case of using TinyMCE
     * @param editor-style.css
     */

    add_editor_style();
  }
}

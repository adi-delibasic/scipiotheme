<?php

/**
 * Theme Bootstrap Class
 * 
 * @package Scipio
 * @subpackage WordPress
 * @since Scipio 1.0.0
 */

namespace SCIPIO\Classes;

use SCIPIO\Traits\Scipio_Singleton;

class Scipio_Bootstrap {
  use Scipio_Singleton;
  protected function __construct() {
    //Load Classes
    Scipio_Assets::get_instance();

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
  }
}

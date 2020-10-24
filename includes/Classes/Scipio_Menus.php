<?php

/**
 * Class for registering menus
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */

namespace SCIPIO\Classes;

use SCIPIO\Traits\Scipio_Singleton;

class Scipio_Menus {
  use Scipio_Singleton;

  protected function __construct() {
    $this->register_scipio_menus();
  }

  protected function register_scipio_menus() {
    add_action('init', array($this, 'register_menus'));
  }
  public function register_menus() {
    register_nav_menus(
      array(
        'scipio-header-menu' => esc_html__('Header Menu', 'scipio'),
        'scipio-footer-menu' => esc_html__('Footer Menu', 'scipio'),
        'scipio-extra-menu' => esc_html__('Extra Menu', 'scipio'),
      )
    );
  }
}

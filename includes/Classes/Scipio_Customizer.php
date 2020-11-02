<?php

/**
 * Theme customizer class
 * Add custom sections and settings to the Admin Customizer
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0.
 */


namespace SCIPIO\Classes;

use SCIPIO\Traits\Scipio_Singleton;
use WP_Customize_Control;

class Scipio_Customizer {
  use Scipio_Singleton;
  protected function __construct() {
    add_action('customize_register', array($this, 'register_scipio_customizer'));
  }


  /**
   * Init customizer sections
   */
  public function register_scipio_customizer($wp_customize) {
    $this->scipio_customize_header($wp_customize);
  }


  /**
   * Scipio Header panel
   * Section, Settings and Controls
   */
  private function scipio_customize_header($wp_customize) {

    /**
     * Sections
     */
    $wp_customize->add_section('scipio-header-section', array(
      'title' => 'Scipio Header',
      'priority' => 2,
      'description' => esc_html__('Edit website header', 'scipio')
    ));
    $wp_customize->add_section('scipio-header-socials', array(
      'title' => 'Social Links',
      'priority' => 3,
      'description' => esc_html__('Edit your social links', 'scipio'),
    ));

    /**
     * Settings
     */

    // Setting - Header Aligment
    $wp_customize->add_setting('scipio-header-settings', array(
      'deafult' => 'align-right',
    ));
    //Setting - Display Social Links
    $wp_customize->add_setting('scipio-display-links-settings', array(
      'default' => '',
    ));
    // Social Links
    $wp_customize->add_setting('scipio-header-soc-settings', array(
      'default' => '',
      'sanitize_callback' => array($this, 'sanitize_custom_url')
    ));




    /**
     * Control
     * Scipio Header
     * Header Aligment
     */
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'scipio-header-control', array(
      'label' => 'Scipio Header Customization',
      'section' => 'scipio-header-section',
      'settings' => 'scipio-header-settings',
      'type' => 'select',
      'choices' => array(
        'align-left' => 'Align Left',
        'align-right' => 'Align Right',
      )

    )));
    /**
     * Control 
     * Scipio Header
     * Select Social Links To Display
     */

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'scipio-select-social', array(
      'label' => 'Select social links to display',
      'section' => 'scipio-header-section',
      'settings' => 'scipio-display-links-settings',
      'type' => 'checkbox',


    )));


    /**
     * Control
     * Social Media Links  
     */
    $this->scipio_social_control($wp_customize, 'scipio-facebook-control', 'Facebook');
    $this->scipio_social_control($wp_customize, 'scipio-instagram-control', 'Instagram');
    $this->scipio_social_control($wp_customize, 'scipio-youtube-control', 'You Tube');
    $this->scipio_social_control($wp_customize, 'scipio-twitter-control', 'Twitter');
    $this->scipio_social_control($wp_customize, 'scipio-linkedin-control', 'LinkedIn');
  }
  /**
   * Sanitization
   * @param input to be sanitized on callback
   */
  public function sanitize_custom_url($input) {
    return filter_var($input, FILTER_SANITIZE_URL);
  }
  /**
   *Controls for social media links
   * 
   * @param wp_customize
   * @param name unique control name
   * @param pretty_name control label
   * 
   */
  public function scipio_social_control($wp_customize, $name, $pretty_name) {

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $name, array(
      'label' => $pretty_name,
      'section' => 'scipio-header-socials',
      'settings' => 'scipio-header-soc-settings',
      'type' => 'url',
    )));
  }
}

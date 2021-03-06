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
   * Scipio Header Panel
   * Section, Settings and Controls
   */
  private function scipio_customize_header($wp_customize) {

    /**
     * Section
     */
    $wp_customize->add_section('scipio-header-section', array(
      'title' => 'Scipio Header',
      'priority' => 2,
      'description' => esc_html__('Edit website header', 'scipio')
    ));

    /**
     *  Settings
     */

    //Default option
    $wp_customize->add_setting('scipio-header-settings', array(
      'default' => 'align-center',
    ));

    // Align center


    /**
     * Controls
     */
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'scipio-header-control', array(
      'label' => 'Scipio Header Customization',
      'section' => 'scipio-header-section',
      'settings' => 'scipio-header-settings',
      'type' => 'select',
      'choices' => array(
        'align-center' => 'Align Center',
        'align-right' => 'Align Right',
        'align-left' => 'Align Left'
      )

    )));



    /**
     * Social Links Panel
     * Section, Settings & Control
     */

    $wp_customize->add_section('scipio-header-socials', array(
      'title' => 'Social Links',
      'priority' => 3,
      'description' => esc_html__('Edit your social links', 'scipio'),
    ));

    /**
     * Settings
     */
    $wp_customize->add_setting('facebook-settings', array(
      'default' => '',
      'sanitize_callback' => array($this, 'sanitize_custom_url')
    ));
    $wp_customize->add_setting('instagram-settings', array(
      'default' => '',
      'sanitize_callback' => array($this, 'sanitize_custom_url')
    ));
    $wp_customize->add_setting('youtube-settings', array(
      'default' => '',
      'sanitize_callback' => array($this, 'sanitize_custom_url')
    ));
    $wp_customize->add_setting('twitter-settings', array(
      'default' => '',
      'sanitize_callback' => array($this, 'sanitize_custom_url')
    ));
    $wp_customize->add_setting('linkedin-settings', array(
      'default' => '',
      'sanitize_callback' => array($this, 'sanitize_custom_url')
    ));


    /**
     * Controls
     */
    $this->scipio_social_control($wp_customize, 'facebook-settings', 'scipio-facebook-control', 'Facebook');
    $this->scipio_social_control($wp_customize, 'instagram-settings', 'scipio-instagram-control', 'Instagram');
    $this->scipio_social_control($wp_customize, 'youtube-settings',  'scipio-youtube-control', 'You Tube');
    $this->scipio_social_control($wp_customize, 'twitter-settings',  'scipio-twitter-control', 'Twitter');
    $this->scipio_social_control($wp_customize, 'linkedin-settings',  'scipio-linkedin-control', 'LinkedIn');
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
  public function scipio_social_control($wp_customize, $setting, $name, $pretty_name) {

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $name, array(
      'label' => $pretty_name,
      'section' => 'scipio-header-socials',
      'settings' => $setting,
      'type' => 'url',
    )));
  }
}

<?php

/**
 * Navigation links component
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */

use SCIPIO\Classes\Scipio_Nav_Walker;

$header_nav = new Scipio_Nav_Walker();
wp_nav_menu(
  array(
    'container_class' => 'navigation-links h-nav mx-auto',
    'menu' => 'scipio-header-menu ',
    'menu_class' => 'absolute top-full md:top-0 bg-blue-800 md:bg-transparent text-gray-800 left-0 w-1/2 md:relative md:w-full md:flex justify-center items-center md:h-full font-semibold tracking-wide text-gray-100 md:gap-x-10',
    'location' => 'scipio-header-menu',
    'walker' => $header_nav,
  )
);

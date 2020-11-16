<?php

/**
 * Header Template File
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */

use SCIPIO\Classes\Scipio_Nav_Walker;
use SCIPIO\Classes\Scipio_Walker;

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>">
  <!-- Backward compactibility for version lower then 5.2 -->
  <?php function_exists('wp_body_open') ? wp_body_open() : ''; ?>


  <?php
  /**
   * Display header
   */
  if (has_nav_menu('scipio-header-menu')) { ?>

    <header id="site-header">

      <?php
      if (get_theme_mod('scipio-header-settings') === 'align-center') {
        //  header center
        get_template_part('template-parts/header/header', 'center');
      } else if (get_theme_mod('scipio-header-settings') === 'align-left') {
        // header left
        get_template_part('template-parts/header/header', 'left');
      } else if (get_theme_mod('scipio-header-settings') === 'align-right') {
        // header right
        get_template_part('template-parts/header/header', 'right');
      }
      ?>
    </header>

  <?php
  } else {
    echo 'There is no menu created';
  }

  ?>
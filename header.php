<?php

/**
 * Header Template File
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */

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
  <header id="site-header">
    <div class="nav-container text-4xl  bg-green-200">
      <?php
      $header_nav = new Scipio_Walker();
      wp_nav_menu(
        array(
          'container' => 'nav',
          'menu' => 'Header Menu',
          'menu_class' => '',
          'walker' => $header_nav
        )
      );
      ?>
    </div>

  </header>
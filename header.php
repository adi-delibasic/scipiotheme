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
  <!-- Website navigation -->
  <header id="site-header">
    <?php

    /**
     * Display header navigation menu
     */
    if (has_nav_menu('scipio-header-menu')) {
      get_template_part('template-parts/header/header', 'center');
    } else {
      echo 'There is no menu created';
    }
    ?>
  </header>
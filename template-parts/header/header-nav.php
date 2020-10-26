<?php

/**
 * Header navigation template part
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */

use SCIPIO\Classes\Scipio_Nav_Walker;
?>
<div class="site-header__inner">
  <?php
  $header_nav = new Scipio_Nav_Walker();
  wp_nav_menu(
    array(
      'container' => 'nav',
      'container_class' => 'h-20 bg-green-200',
      'menu' => 'scipio-header-menu',
      'menu_class' => 'md:flex md:justify-around md:items-center md:h-full',
      'location' => 'scipio-header-menu',
      'walker' => $header_nav,
    )
  );
  ?>
</div>
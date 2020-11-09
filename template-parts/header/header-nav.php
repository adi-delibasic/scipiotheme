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
<div class="site-header__inner relative mx-auto flex justify-around items-center h-navH bg-blue-900">
  <!-- Nav Links -->
  <div class="site-header__inner--links order-2">
    <?php
    $header_nav = new Scipio_Nav_Walker();
    wp_nav_menu(
      array(
        'container_class' => 'navigation-links h-navH',
        'menu' => 'scipio-header-menu ',
        'menu_class' => 'absolute top-full md:top-0 bg-blue-800 md:bg-transparent text-red-500 left-0 md:relative w-1/2 md:w-full md:flex justify-around items-center md:h-full font-semibold tracking-wide text-gray-100',
        'location' => 'scipio-header-menu',
        'walker' => $header_nav,
      )
    );
    ?>
  </div>
  <!-- Logo -->
  <?php if (!empty(has_custom_logo()) || !empty(get_bloginfo('title')) || !empty(get_bloginfo('description'))) { ?>
    <!-- Check if the site has logo enabled and uploaded-->
    <!-- Create container -->
    <div class="site-header__inner--logo flex justify-center items-center gap-4">
      <!-- Backward compacitbility check -->
      <?php function_exists('the_custom_logo') ? the_custom_logo() : '' ?>
      <div class="site-header__inner--desc text-gray-200">
        <?php

        /**
         * Title
         * 
         * If its not empty display the site title
         * Display title up to specific amount of characters
         * @var title WordPress default website title
         */
        $title = esc_html__(get_bloginfo('title', 'scipio'));
        if (!empty($title)) { ?>
          <div class="site-header__inner--desc__title">
            <?php echo $title = (strlen($title) > 50) ? substr($title, 0, 50) . '...' : $title; ?>
          </div>
        <?php }

        /**
         *  Tagline
         * 
         * If its not empty display the site tagline
         * Display tagline up to specific amount of characters
         * @var tagline WordPress default website description
         */
        $tagline = esc_html__(get_bloginfo('description', 'scipio'));
        if (!empty($tagline)) { ?>
          <div class="site-header__inner--desc__tag">
            <?php echo $tagline = (strlen($tagline) > 50) ? substr($tagline, 0, 50) . '...' : $tagline; ?>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php } ?>

  <!-- Social Links -->
  <div class="site-header__inner--social">

  </div>
</div>
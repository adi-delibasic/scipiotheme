<?php

/**
 * Navigation logo and tagline component
 *
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */
?>



<div class="site-header__inner--logo flex justify-around items-center h-40">

  <?php
  /**
   * Backward compactibility check 
   * 
   * If custom logo is not displayed
   * Title and tagline align to center
   */
  ?>
  <div class="site-header__inner--logo h-full flex justify-center gap-x-4 items-center">
    <?php
    if (function_exists('the_custom_logo') && has_custom_logo()) { ?>
      <!-- Display custom logo -->

      <?php the_custom_logo()  ?>

      <div class="site-header__inner--desc text-gray-900 text-left">
      <?php } else { ?>
        <div class="site-header__inner--desc text-gray-900 text-center">
        <?php }


      /**
       * Title
       * 
       * If its not empty display the site title
       * Display title up to specific amount of characters
       * @var title WordPress default website title
       */
      $title = esc_html__(get_bloginfo('title', 'scipio'));
      if (!empty($title)) { ?>
          <div class="site-header__inner--desc__title font-bold text-5xl ?>">
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
          <div class="site-header__inner--desc__tag text-xl">
            <?php echo $tagline = (strlen($tagline) > 50) ? substr($tagline, 0, 50) . '...' : $tagline; ?>
          </div>
        <?php } ?>
        </div>

      </div>


  </div>
</div>
<?php

/**
 * WordPress Customizer Template
 * "Left Aligned Header"
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 * 
 */

?>
<div class="site-header__inner relative mx-auto flex justify-around items-center h-nav bg-blue-900">
  <!-- Navigation Links -->
  <div class="site-header__inner--links">
    <?php get_template_part('template-parts/components/header/header', 'links') ?>
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

</div>
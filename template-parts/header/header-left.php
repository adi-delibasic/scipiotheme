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

<div class="site-header__logo">

  <?php if (!empty(has_custom_logo()) || !empty(get_bloginfo('title')) || !empty(get_bloginfo('description'))) {
    /**
     * Display logo and site tagline
     * @source WordPress customizer
     */
    get_template_part('template-parts/components/header/header', 'logo');
  }
  ?>
</div>
<div class="site-header__inner relative mx-auto flex justify-around items-center h-nav bg-transparent border-t-2 border-b-2 border-gray-300">
  <!-- Navigation Links -->
  <div class="site-header__inner--links">
    <?php get_template_part('template-parts/components/header/header', 'links') ?>
  </div>



</div>
<?php

/**
 * Default Header Layout
 * "Right Aligned Header"
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 * 
 */


?>
<?php if (!empty(has_custom_logo()) || !empty(get_bloginfo('title')) || !empty(get_bloginfo('description'))) :

  /**
   *If logo or tagline exists
   *display the element 
   * 
   */
?>
  <!-- Display logo element -->
  <div class="site-header__logo w-full flex justify-between items-center h-40 max-w-7xl mx-auto">
    <?php
    /**
     * Display logo and site tagline
     * @source WordPress customizer
     */
    ?>
    <div class="text-xl order-2">
      <!-- Social links -->
      <?php get_template_part('template-parts/components/header/header', 'socials') ?>
    </div>

    <?php get_template_part('template-parts/components/header/header', 'logo'); ?>


    <!-- Nav socials -->



  </div>

<?php endif; //End logo element 
?>




<!-- Navigation bar -->
<div class="site-header__inner relative mx-auto flex justify-between items-center max-w-7xl h-nav bg-transparent border-t-2 border-b-2 border-gray-300">
  <!-- Nav links -->
  <div class="site-header__inner--links order-2">
    <?php get_template_part('template-parts/components/header/header', 'links') ?>
  </div>
  <!-- Nav search -->
  <div class="site-header__inner--links">
    <?php get_template_part('template-parts/components/header/header', 'search') ?>
  </div>
</div>
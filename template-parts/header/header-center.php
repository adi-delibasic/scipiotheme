<?php

/**
 * Default Header Layout
 * "Center Aligned Header"
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
  <div class="site-header__logo mx-auto max-w-7xl h-40">
    <?php
    /**
     * Display logo and site tagline
     * @source WordPress customizer
     */
    get_template_part('template-parts/components/header/header', 'logo');
    ?>
  </div>

<?php endif; //End logo element 
?>




<!-- Navigation bar -->
<div class="site-header__inner relative mx-auto flex justify-around items-center max-w-7xl h-nav bg-transparent border-t-2 border-b-2 border-gray-300">
  <!-- Nav socials -->
  <div class="site-header__inner--socials flex justify-center items-center mx-auto text-xl w-1/3">
    <?php get_template_part('template-parts/components/header/header', 'socials') ?>
  </div>
  <!-- Nav links -->
  <div class="site-header__inner--links w-3/4">
    <?php get_template_part('template-parts/components/header/header', 'links') ?>
  </div>
  <!-- Nav search -->
  <div class="site-header__inner--search w-1/3 mx-auto">
    <?php get_template_part('template-parts/components/header/header', 'search') ?>
  </div>
</div>
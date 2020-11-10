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
   * Social media links
   * @param array
   * @source customizer social links settings 
   */
  $social_links = array(
    'fb' => esc_url(get_theme_mod('facebook-settings')),
    'insta' => esc_url(get_theme_mod('instagram-settings')),
    'twitter' => esc_url(get_theme_mod('twitter-settings')),
    'yt' => esc_url(get_theme_mod('youtube-settings')),
    'li' => esc_url(get_theme_mod('linkedin-settings')),
  )
  ?>

  <?php
  /**
   * Count the values in $social_links array ()
   * 
   * If there is no inputs
   * don't display the element
   * 
   */


  if (count(array_filter($social_links)) > 0) { ?>

    <div class="site-header__inner--socials flex justif-center items-center gap-x-4 text-xl">

      <!-- Facebook -->
      <?php if (!empty($social_links['fb'])) : ?>
        <a href="<?php echo $social_links['fb'] ?>"> <i class="fab fa-facebook-f"></i></a>
      <?php endif; ?>

      <!-- Instagram -->
      <?php if (!empty($social_links['insta'])) : ?>
        <a href="<?php echo $social_links['insta'] ?>"><i class="fab fa-instagram"></i></a>
      <?php endif; ?>

      <!-- Twitter -->
      <?php if (!empty($social_links['twitter'])) : ?>
        <a href="<?php echo $social_links['twitter'] ?>"><i class="fab fa-twitter"></i></a>
      <?php endif; ?>

      <!-- Youtube -->
      <?php if (!empty($social_links['yt'])) : ?>
        <a href="<?php echo $social_links['yt'] ?>"><i class="fab fa-youtube"></i></a>
      <?php endif; ?>

      <!-- LinkedIn -->
      <?php if (!empty($social_links['li'])) : ?>
        <a href="<?php echo $social_links['li'] ?>"><i class="fab fa-linkedin"></i></a>
      <?php endif; ?>

    </div>



  <?php } ?>




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

      <?php the_custom_logo() ?>

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
          <div class="site-header__inner--desc__tag  text-xl">
            <?php echo $tagline = (strlen($tagline) > 50) ? substr($tagline, 0, 50) . '...' : $tagline; ?>
          </div>
        <?php } ?>
        </div>

      </div>
      <!-- Header Search -->
      <div class="site-header__inner--search">
        <label for="search" class="mr-2 border-2 border-gray-900 px-4 py-1 cursor-pointer">Search</label>
        <input type="text" name="search" class="py-1 border-2 border-gray-900">
      </div>

  </div>
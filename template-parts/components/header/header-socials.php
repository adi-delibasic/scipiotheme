<?php

/**
 * Header social links template part
 *
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 * 
 */




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

  <div class="site-header__inner--socials flex justify-center items-center gap-x-6 ">

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
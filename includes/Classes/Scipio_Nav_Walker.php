<?php

/**
 * Collection of walker classes
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */

namespace SCIPIO\Classes;

use Walker_Nav_Menu;

class Scipio_Nav_Walker extends Walker_Nav_Menu {

  /**
   * Starts the list before the elements are added.
   *
   * Adds classes to the unordered list sub-menus.
   *
   * @param object Data object
   * @param array List of elements to continue traversing (passed by reference).
   * @param int Max depth to traverse.
   * @param int Depth of current element.
   * @param array An array of arguments.
   * @param string Used to append additional content (passed by reference).
   * 
   * 
   * This class is not instantiated with singleton trait, it extends WordPress Walker_Nav_Menu
   */


  public function start_lvl(&$output, $depth = 0, $args = \null) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent <ul class=\"dropdown-menu h-0 overflow-hidden md:overflow-visible md:h-full \">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = \null, $id = 0) {

    /**
     * @var $item contains classes added from dashboard
     */

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attr = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    /**
     * Merge classes without overriding
     */
    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
    $classes[] = 'menu-item-' . $item->ID;
    // Add full height to li elements
    $classes[] = 'h-full';

    /**
     * Check if li is sub element of the sub element
     */

    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-submenu';
    }

    /**
     * join() all classes with an empty space
     * apply_filter() to every single class
     * array-filter() loops through all the specified elements
     * and applies filter to every single element
     */

    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id > 0) ? 'id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names . $li_attr . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    /**
     * Add styling to every a tag in the mobile menu
     */
    $attributes .= 'class="dropdown-toggle h-full flex justify-between items-center px-10 py-2 md:px-0 md:py-0"';
    /**
     * Add class if the element has submenu
     */
    $attributes .= ($args->walker->has_children) ? 'class="dropdown-toggle"' : '';


    /**
     * Creating <a> tag
     */

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link->after;

    /**
     * Add arrow on submenu element parent
     */
    $item_output .= ($depth >= 0 && $args->walker->has_children) ? ' <span class="dropdown-icon md:hidden"><i class="fas fa-plus"></i></span></a>' : '</a>';
    $item_output .= $args->after;

    /**
     * Merge everything for output
     */

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}

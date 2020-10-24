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

class Scipio_Walker extends Walker_Nav_Menu {

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
   */


  public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
    $id_field = $this->db_fields['id'];
    // Add li class
    $element->classes[] = '';
    if (!empty($children_elements[$element->$id_field])) {
      // Additional HTML
      $element->title .= '<span class="caret down-caret">&#x25BC;</span>';
    }
    Walker_Nav_Menu::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
  }
}

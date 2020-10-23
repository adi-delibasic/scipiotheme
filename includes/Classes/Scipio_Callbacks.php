<?php

/**
 * Class for additional actions and filters
 * 
 * @package WordPress
 * @subpackage Scipio
 * @since Scipio 1.0.0
 */

namespace SCIPIO\Classes;

use SCIPIO\Traits\Scipio_Singleton;

class Scipio_Callbacks {
  use Scipio_Singleton;

  protected function __construct() {
    $this->scipio_callbacks();
  }


  protected function scipio_callbacks() {
    //Filters
    add_filter('script_loader_tag', array($this, 'js_defer_tags'));
  }

  public function js_defer_tags($tag) {
    $scripts_to_defer = array('main.js');

    // add the defer tags to scripts_to_defer array
    foreach ($scripts_to_defer as $current_script) {
      if (true == strpos($tag, $current_script))
        return str_replace(' src', ' defer="defer" src', $tag);
    }
    return $tag;
  }
}

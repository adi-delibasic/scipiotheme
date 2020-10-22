<?php

/**
 * Theme Singleton Trait
 * 
 * Singleton is used to restrict the instantiation of a class to a single object.
 * If class is instantiated, singleton will use reference of that class rather then instantiating again 
 * 
 * @package Scipio
 * @subpackage WordPress
 * @since 1.0.0
 * 
 * 
 */

namespace SCIPIO\Traits;

trait Scipio_Singleton {

  //The singleton method
  final public static function get_instance() {
    /**
     * Creates static array $instance to hold the instances of called classes.
     * @return instance of the called class that can be used
     */

    //Array to hold an instance of the class
    static $instance = array();

    //Store called class in variable
    $called_class = get_called_class();

    /**
     * If an instance of a class is not set,
     * create an instance of a class and store that class in $instance
     * @return name of the class
     */
    if (!isset($instance[$called_class])) {
      $instance[$called_class] = new $called_class();

      do_action(sprintf('scipio_singleton_init%s', $called_class));
    }

    return $instance[$called_class];
  }
}

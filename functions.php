<?php

/**
 * Theme Functions 
 * 
 * @package Scipio
 * @subpackage WordPress
 * @since Scipio 1.0.0
 */

use SCIPIO\Classes\Scipio_Bootstrap;

require_once('assets/vendor/autoload.php');
require_once('includes/helpers/scipio_paths.php');
require_once('includes/Classes/Scipio_Nav_Walker.php');

//Init the theme boostrap class
Scipio_Bootstrap::get_instance();

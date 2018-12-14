<?php
/**
 * Plugin Name: Basic Container Block
 * Plugin URI: https://github.com/carneyplusco/basic-container-block/
 * Description: A basic container block for Gutenberg
 * Author: Carney Dev Team
 * Author URI: https://carney.co/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';

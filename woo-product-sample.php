<?php

/**
 * Plugin Name: Woo Product Sample
 * Plugin URI: #
 * Description: Display Sample button on front-end where product sample is enabled
 * Version: 1.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Ketan Patel
 * Author URI: #
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI: #
 * Text Domain: wc-product-sample
 * Domain Path: /languages
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WOO_PRODUCT_SAMPLE_PATH', plugin_dir_path( __FILE__ ) );
define( 'WOO_PRODUCT_SAMPLE_URL', plugins_url( '/', __FILE__ ) );

Class WooProductSample {

	/**
     * Constructor class
     *
     * @access public
     * @return void
     */
	public function __construct() {
		add_action( 'woocommerce_init', array( $this, 'load_class_files' ) );
	}

	public function load_class_files() {
		require_once WOO_PRODUCT_SAMPLE_PATH . 'includes/class-admin.php';
		require_once WOO_PRODUCT_SAMPLE_PATH . 'includes/class-front.php';
	}

}

new WooProductSample();
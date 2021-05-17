<?php
/*
Plugin Name: BII FAQ
Plugin URI: https://github.com/mustcoder/bii-faq
Description: Add super FAQ block to your WP page
Version: 1.0.0
Author: BII Studednts
Author URI: https://github.com/mustcoder
Text Domain: bii-faq
Domain Path: /lang
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( ! class_exists('BIIFAQ') ) :

class BIIFAQ {

    /** @var string The plugin version number. */
	var $version = '5.9.5';
	
	/** @var array The plugin settings array. */
	var $settings = array();
	
	/** @var array The plugin data array. */
	var $data = array();
	
	/** @var array Storage for class instances. */
	var $instances = array();
	
	/**
	 * __construct
	 *
	 * A dummy constructor to ensure ACF is only setup once.
	 *
	 * @date	23/06/12
	 * @since	5.0.0
	 *
	 * @param	void
	 * @return	void
	 */	
	function __construct() {
		// Do nothing.
	}
	
	/**
	 * initialize
	 *
	 * Sets up the ACF plugin.
	 *
	 * @date	28/09/13
	 * @since	5.0.0
	 *
	 * @param	void
	 * @return	void
	 */
	function initialize() {}
}
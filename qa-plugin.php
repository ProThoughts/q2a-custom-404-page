<?php

/*
	Plugin Name: Custom 404 Page
	Plugin URI: http://www.ProThoughts.com/
	Plugin Description: Customize 404 page message
	Plugin Version: 1.0
	Plugin Date: 2014-07-25
	Plugin Author: ProThoughts
	Plugin Author URI: http://www.ProThoughts.com/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.6.2
	Plugin Update Check URI:
*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

qa_register_plugin_layer('qa-custom-404-page-layer.php', 'Custom 404 Page');
qa_register_plugin_module('module', 'qa-custom-404-page-options.php', 'qa_custom_404_page', 'Custom 404 Page Options');
	
?>
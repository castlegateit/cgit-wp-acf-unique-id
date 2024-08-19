<?php

/**
 * Plugin Name:  Castlegate IT WP ACF Unique ID
 * Plugin URI:   https://github.com/castlegateit/cgit-wp-acf-unique-id
 * Description:  Unique ID field type for Advanced Custom Fields.
 * Version:      1.1.0
 * Requires PHP: 8.2
 * Author:       Castlegate IT
 * Author URI:   https://www.castlegateit.co.uk/
 * License:      MIT
 * Update URI:   https://github.com/castlegateit/cgit-wp-acf-unique-id
 */

use Castlegate\AcfUniqueId\Plugin;

if (!defined('ABSPATH')) {
    wp_die('Access denied');
}

define('CGIT_WP_ACF_UNIQUE_ID_VERSION', '1.1.0');
define('CGIT_WP_ACF_UNIQUE_ID_PLUGIN_FILE', __FILE__);
define('CGIT_WP_ACF_UNIQUE_ID_PLUGIN_DIR', __DIR__);

require_once __DIR__ . '/vendor/autoload.php';

Plugin::init();

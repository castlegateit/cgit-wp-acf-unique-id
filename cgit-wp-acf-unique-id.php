<?php

/*

Plugin Name: Castlegate IT WP ACF Unique ID
Plugin URI: https://github.com/castlegateit/cgit-wp-acf-unique-id
Description: Unique ID field type for Advanced Custom Fields
Version: 1.0.0
Author: Castlegate IT
Author URI: https://www.castlegateit.co.uk/
Network: true

Copyright (c) 2021 Castlegate IT. All rights reserved.

*/

use Castlegate\AcfUniqueId\AcfUniqueId;

if (!defined('ABSPATH')) {
    wp_die('Access denied');
}

add_action('acf/include_field_types', function () {
    require_once __DIR__ . '/classes/AcfUniqueId.php';

    AcfUniqueId::register();
});

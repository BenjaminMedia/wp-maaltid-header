<?php

/**
 * Stylista Blogger Navigation
 *
 *
 * Plugin Name:       Måltid's Header
 * Plugin URI:
 * Description:       A plugin to include the <a href="http://maaltid.dk">maaltid.dk</a>'s Header.
 * Version:           0.1
 * Author:            Frederik Rabøl — Bonnier Interactive
 * Author URI:        http://bonnierpublications.com
 */

require_once plugin_dir_path( __FILE__ ) . 'maaltidHeader.php';

$navigation = new maaltidHeader();
$navigation->run();


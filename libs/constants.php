<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 3:18 PM
 */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_HOST_USERNAME', 'root');
define('DB_HOST_PASSWORD', '');
define('DB_DATABASE', 'bookstore');

define('SITE_NAME', 'Bookstore');

// define database tables
define('TABLE_PAGES', DB_PREFIX . 'pages');
define('USERS', DB_PREFIX . 'users');
define('TABLE_TAGLINE', DB_PREFIX . 'tagline');


define('D_TEMPLATE', 'template');
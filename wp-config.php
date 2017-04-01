<?php

$table_prefix  = 'wp_';

define('WP_DEBUG', true);

define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('MYSQL_SSL_CA', '/etc/aws-ca.pem');
define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);

$_SERVER['HTTPS']='on';
$protocol = 'https';
if ($_ENV['WP_ENV'] == 'development') {
	$protocol = 'http';
	$_SERVER['HTTPS']='off';
}

define('WP_SITEURL', $protocol . '://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', $protocol . $_SERVER['HTTP_HOST']);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'ensure-env-vars.php');
require_once(ABSPATH . 'email-settings.php');
require_once(ABSPATH . 'wp-settings.php');

<?php

$vars = array(
	'DB_HOST',
	'DB_NAME',
	'DB_USER',
	'DB_PASSWORD',
	'SENDGRID_API_KEY',
	'SENDGRID_FROM_NAME',
	'SENDGRID_FROM_EMAIL'
);

foreach ($vars as $var) {
	if (!isset($_ENV[$var])) {
		throw new Exception('The env var ' . $var . ' was not found!');
	}
}

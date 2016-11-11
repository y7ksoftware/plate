<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return [

	'*' => [
		'server' => 'localhost',
		'tablePrefix' => 'craft',

		'user' => getenv('DB_USER'),
		'password' => getenv('DB_PASSWORD'),
		'database' => getenv('DB_NAME'),
	],


];

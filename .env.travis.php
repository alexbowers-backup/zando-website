<?php
	return array(
		'debug' => true,
		'secret_key' => '12345678912345678912345678912312', ## Change to your own 32 digit key. running and copying php artisan key:generate will give you a random key
		'mysql-host' => 'localhost',
		'mysql-db' => 'zando', # zando for travis. Change to be your local version.
		'mysql-user' => 'root', # root for travis. Change to be your local version
		'mysql-pass' => '', # blank for travis. Change to be your local version
		'mysql-prefix' => ''
	);

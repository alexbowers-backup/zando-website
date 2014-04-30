zando-website
=============

The website for Zando | Android Learning

[![Build Status](https://travis-ci.org/alexbowers/zando-website.svg?branch=master)](https://travis-ci.org/alexbowers/zando-website)


## .env.local.php and .env.php

```php
<?php
	return array(
		'debug' => false,
		'secret_key' => '',
		'mysql-host' => 'localhost',
		'mysql-db' => 'db-name',
		'mysql-user' => 'user',
		'mysql-pass' => 'password',
		'mysql-prefix' => ''
	);
?>
```

## Using Vagrant / Identical setup to me

Install vagrant on your computer. Details on how to do this are here:

http://docs.vagrantup.com/v2/installation/index.html



## Setup :: IMPORTANT ::

##### Step 1
Create yourself a ```.env.local.php``` and a ```.env.php``` file in the root directory of your application. And set all of the information to be relevant to you.

:: debug - in local make this be true
:: Secret Key - run php artisan key:generate and copy it into the local file, run again and copy into the .env.php file. These should be different so that local and server data is not compatible for security reasons (if somebody gains access to your local copy, server isn't compromised)
:: mysql-host - Probably will stay localhost, but whatever your SQL server host is, use that.
:: mysql-user - MySQL username
:: mysql-pass - MySQL password
:: mysql-prefix - MySQL database and table prefixes

##### Step 2 :: IMPORTANT ::

Go to /bootstrap/start.php and change the value for the detectEnvironment
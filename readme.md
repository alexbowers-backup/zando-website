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

Once that is done run ```vagrant up```. You should now have a fully functional server that you can access locally from ```192.168.33.21```. To change this, *BEFORE* you run vagrant up, change the ```Vagrantfile``` value for the IP address. I recommend you keep it something unused elsewhere.

## Setup :: IMPORTANT ::

## Prerequisite

You need to first install laravel, and its dependencies. This is easy, assuming you have composer installed. If not. Do it. It's worth it.

Simply run ```composer install```.

##### Step 1
Create yourself a ```.env.local.php``` and a ```.env.php``` file in the root directory of your application. And set all of the information to be relevant to you.

	- debug - in local make this be true
	- Secret Key - run php artisan key:generate and copy it into the local file, run again and copy into the .env.php file. These should be different so that local and server data is not compatible for security reasons (if somebody gains access to your local copy, server isn't compromised)
	- mysql-host - Probably will stay localhost, but whatever your SQL server host is, use that.
	- mysql-user - MySQL username
	- mysql-pass - MySQL password
	- mysql-prefix - MySQL database and table prefixes

##### Step 2 :: IMPORTANT ::

Go to /bootstrap/start.php and change the value for the detectEnvironment

##### Step 3

To setup your databases you need to run the following commands

```
php artisan migrate --package=cartalyst/sentry
php artisan migrate
php artisan config:publish cartalyst/sentry
```

##### CONTRIBUTING

Feel free to contribute, but please first refer to the following docs:

- Adding new feature
	- If you wish to add a new feature. That's great. But please, don't waste your time on it, since it may not get added. Instead, create an issue with it tagged as ```proposal``` and we can discuss the entire feature first. Also, before submitting any code, in your propsal you should also submit your behat feature tests so we can see exactly what you are prepared to make, and other users can also contribute features that way too.

- Fixing a bug
	- If it is a bug that has an issue about it already, make a comment starting with ```ATTEMPTING``` so that if anybody else thinks they can fix it, they can just Ctrl + F to see if anybody else is trying to fix. 
	- Once the bug fix has been made, push all your commits up and send in a pull request. Remember to check travis. It HAS to pass all tests.

- Submitting a pull request without tests
	- Don't. It simply won't get merged in.

I'm new to the whole open source community, and so if you feel that there is a way I can improve, don't feel afraid. I want to learn as much as I want to teach. Simply leave an issue tagged ```advice``` and I shall get around to reading them periodically.

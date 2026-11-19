<?php

// Parent Directory
define('PARENT_DIR', 'php/php5');

// App Root Directory
define('APP_ROOT', dirname(dirname(__FILE__)));

// URL Root
define('URL_ROOT', 'http://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/' . PARENT_DIR);

// Site Name
define('SITE_NAME', 'PHP MVC Practice 1');

// App Version
define('APP_VERSION', '1.0.0');

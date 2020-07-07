<?php

// Define app path constants
define('PATH_APP','../app/');
define('PATH_COMPONENTS', PATH_APP.'components/');
define('PATH_CONFIG', PATH_APP.'config/');
define('PATH_PAGES', PATH_APP.'pages/');
define('PATH_TEMPLATES', PATH_APP.'templates/');
define('PATH_FILES_PRIVATE', PATH_APP.'files/');
define('PATH_CACHE_PRIVATE', PATH_FILES_PRIVATE.'cache/');
define('PATH_UPLOADS_PRIVATE', PATH_FILES_PRIVATE.'uploads/');

// Define core path constants
define('PATH_CORE','../core/');
define('PATH_LIB', PATH_CORE.'lib/');

// Define public path for files
define('PATH_FILES_PUBLIC','files/');
define('PATH_CACHE_PUBLIC', PATH_FILES_PUBLIC.'cache/');
define('PATH_UPLOADS_PUBLIC', PATH_FILES_PUBLIC.'uploads/');

return [
    'database' => [
        'host' => 'localhost',
        'port' => '3306',
        'user' => 'root',
        'pass' => 'root',
        'name' => 'php_framework'
    ],
    'general' => [
        'default_lang' => 'es',
        'supported_lang' => ['es','en'],
    ],
];
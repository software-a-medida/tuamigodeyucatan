<?php
defined('_EXEC') or die;

/**
* Definimos las extenciones de los ficheros.
*/
define('ADMINISTRATOR',             'administrator');
define('CLASS_PHP',                 '.class.php');
define('CONTROLLER_PHP',            '_controller');
define('MODEL_PHP',                 '_model');

/**
* Definimos los directorios de la plataforma.
*/
define('PATH_CONFIGURATION',        PATH_ROOT . '/configuration.php');
define('PATH_CORE',                 PATH_ROOT . '/core/');
define('PATH_INCLUDES',             PATH_ROOT . '/includes/');
define('PATH_LANGUAGE',             PATH_ROOT . '/languages/');
define('PATH_LAYOUTS',              PATH_ROOT . '/layouts/');
define('PATH_MY_LIBRARIES',         PATH_ROOT . '/libraries/');
define('PATH_LIBRARIES',            PATH_MY_LIBRARIES . 'valkyrie/');
define('PATH_UPLOADS',              PATH_ROOT . '/uploads/');

/**
* Definimos los directorios comunes para vistas html
*/
define('PATH_ASSETS',               PATH_ROOT . '/assets/');
define('PATH_CSS',                  PATH_ASSETS . '/css/');
define('PATH_FONTS',                PATH_ASSETS . '/fonts/');
define('PATH_IMAGES',               PATH_ASSETS . '/images/');
define('PATH_JS',                   PATH_ASSETS . '/js/');
define('PATH_PLUGINS',              PATH_ROOT . '/plugins/');

/**
* Definimos los subdirectorios
*/
define('PATH_CONTROLLERS',          PATH_CORE . 'controllers/');
define('PATH_MODELS',               PATH_CORE . 'models/');

/**
* Definimos los directorios del administrador
*/
define('PATH_ADMINISTRATOR',                PATH_ROOT . '/' . ADMINISTRATOR);
define('PATH_ADMINISTRATOR_CORE',           PATH_ADMINISTRATOR . '/core/');
define('PATH_ADMINISTRATOR_INCLUDES',       PATH_ADMINISTRATOR . '/includes/');
define('PATH_ADMINISTRATOR_LANGUAGE',       PATH_ADMINISTRATOR . '/languages/');
define('PATH_ADMINISTRATOR_LAYOUTS',        PATH_ADMINISTRATOR . '/layouts/');
define('PATH_ADMINISTRATOR_MY_LIBRARIES',   PATH_ADMINISTRATOR . '/libraries/');
define('PATH_ADMINISTRATOR_LIBRARIES',      PATH_ADMINISTRATOR_MY_LIBRARIES . 'valkyrie/');

/**
* Definimos los directorios comunes del administrador para vistas html
*/
define('PATH_ADMINISTRATOR_ASSETS',         PATH_ADMINISTRATOR . '/css/');
define('PATH_ADMINISTRATOR_CSS',            PATH_ADMINISTRATOR_ASSETS . '/css/');
define('PATH_ADMINISTRATOR_FONTS',          PATH_ADMINISTRATOR_ASSETS . '/fonts/');
define('PATH_ADMINISTRATOR_IMAGES',         PATH_ADMINISTRATOR_ASSETS . '/images/');
define('PATH_ADMINISTRATOR_JS',             PATH_ADMINISTRATOR_ASSETS . '/js/');
define('PATH_ADMINISTRATOR_PLUGINS',        PATH_ADMINISTRATOR . '/plugins/');

/**
* Definimos los subdirectorios del administrador
*/
define('PATH_ADMINISTRATOR_CONTROLLERS',    PATH_ADMINISTRATOR_CORE . 'controllers/');
define('PATH_ADMINISTRATOR_MODELS',         PATH_ADMINISTRATOR_CORE . 'models/');

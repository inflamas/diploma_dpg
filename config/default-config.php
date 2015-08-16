<?php

$connOptions = array(
    'driver'   => 'pdo_mysql',
    'host' => 'localhost',
    'user'     => 'root',
    'password' => 'archenemy',
    'dbname'   => 'db_travel',
    'charset' => 'utf8',
    'driverOptions' => array(1002 => 'SET NAMES utf8')
);

$appOptions = array(
    'debug_mode' => true, 
    'entity_dir' => './src/Entities'
);


//  definen constantes que se puede ser usadas en el codigo.. independiente de la estructura del proyecto.....

define('BASE_PATH', '/diploma_david_pena_galvis/');
define('VIEW_PATH', BASE_PATH.'template/');
define('INCLUDE_PATH', $_SERVER['DOCUMENT_ROOT'].VIEW_PATH);
define('INCLUDE_ADMIN_PATH', $_SERVER['DOCUMENT_ROOT'] . BASE_PATH . '/admin/templates/' );
define('CSS_PATH', BASE_PATH.'css/'); 
//define('JS_PATH', VIEW_PATH.'js/'); // Wert der Konstante: 'tpl/js/'
define('IMG_PATH', BASE_PATH.'img/'); 

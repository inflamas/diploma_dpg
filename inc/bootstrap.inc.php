<?php

require_once __DIR__ . '/../config/default-config.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Helpers\DBHelper; // esta clase hay que crearla uno mimo en el ordner de classes

$proxyDir = null;
$cache = null;
$isSimpleMode = false;

$config = Setup::createAnnotationMetadataConfiguration(
        array($appOptions['entity_dir']), 
        $appOptions['debug_mode'],
        $proxyDir,
        $cache,
        $isSimpleMode
);

$em = EntityManager::create($connOptions, $config);
DBHelper::setEntityManager($em); 



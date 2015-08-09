<?php

require_once './inc/bootstrap.inc.php';

use Doctrine\ORM\Tools\SchemaTool;

// Arriba esta la clase definida, ahora se procede a crearla.

$st = new SchemaTool($em);
$metadata = $em->getMetadataFactory()->getAllMetadata();

// crea las tabellenn que han sido definidas

try {
    $st->updateSchema($metadata);
    echo 'OK';
    
} catch (Exception $e) {
    echo 'Nicht OK';
}


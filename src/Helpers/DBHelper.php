<?php

namespace Helpers;

class DBHelper {

    private static $entityManager;

    public static function getEntityManager() {
        return self::$entityManager;
    }

    public static function setEntityManager($entityManager) {
        self::$entityManager = $entityManager;
    }
}

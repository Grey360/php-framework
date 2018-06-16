<?php

namespace Root\System;

class Database {
    private static $db = null;

    private function __construct() { }

    public static function getDB(
        $driver="mysql",
        $host="localhost:3306",
        $dbname="frameworkphp",
        $user="root", $password="root") {
        if(is_null(self::$db)) {
            self::$db = new \PDO("$driver:host=$host;dbname=$dbname", $user, $password);
        }
        return self::$db;
    }
}
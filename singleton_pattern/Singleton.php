<?php

class Singleton
{
    private static $uniqueInstance;

    private function __construct() {}

    public static function getInstance()
    {
        if (self::$uniqueInstance === null) {
            self::$uniqueInstance = new Singleton();
        }

        return self::$uniqueInstance;
    }

    public function __clone()
    {
        throw New BadMethodCallException('You cannot clone that class');
    }
}

$singleton = Singleton::getInstance();
$singleton2 = clone $singleton;
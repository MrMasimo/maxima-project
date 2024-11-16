<?php

namespace Classes;

use Exception;

/**
 * Класс для создания подключения к базе данных - паттерн Singleton
 */
final class DBConnection
{   
    private static $instance = null;
    /**
     * Подключение к базе данных и возврат экземпляра объекта \PDO
     * @return \PDO
     * @throws \Exception
     */
    private function connect()
    {
    }

    protected function __construct()
    {
    }

    /**
     * возврат экземпляра объекта DBConnection
     * тип @return
     */
    private static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @throws Exception
     */
    public static function get()
    {
        return self::getInstance()->connect();
    }


    protected function __clone()
    {
        throw new Exception("Cannot clone singleton");
    }

    protected function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

}
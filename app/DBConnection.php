<?php

namespace App;

use Exception;
use PDO;

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
        $params = parse_ini_file(__DIR__ . '/../config/database.ini');
        if(!$params){
            throw new Exception('Error reading config database file');
        }
        $connStr = sprintf('pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s', 
            $params['host'],
            $params['port'],
            $params['dbname'],
            $params['user'],
            $params['password'],
        );
        $conn = new PDO($connStr);
        return $conn;
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
    public static function get(): PDO
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
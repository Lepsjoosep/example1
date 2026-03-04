<?php

class Database
{
    private static $instance = null;
    private static $connectionCount = 0;
    private $connection;

    private function __construct()
    {
        self::$connectionCount++;
        $this->connection = "Connected to database";
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public static function getConnectionCount()
    {
        return self::$connectionCount;
    }

    public function query($sql)
    {
        return "Executing: " . $sql;
    }

}

$db1 = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();

echo Database::getConnectionCount();
echo $db1->query("SELECT * FROM users");
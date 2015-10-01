<?php

namespace NewCart\Core;


class Database
{
    private static $inst = [];

    /**
     * @var \PDO
     */
    private $db = null;

    private function __construct(\PDO $pdoInstance)
    {
        $this->db = $pdoInstance;
    }

    public static function getInstance($instanceName = 'default')
    {
        if (!isset(self::$inst[$instanceName])) {
            throw new \Exception('Instance with that name was not set');
        }

        return self::$inst[$instanceName];
    }

    public static function setInstance(
        $instanceName,
        $driver,
        $user,
        $pass,
        $dbName,
        $host = null
    ){
        $driver = \NewCart\Core\Drivers\DriverFactory::create($driver, $user, $pass, $dbName, $host);

        $pdo = new \PDO($driver->getDsn(), $user, $pass);

        self::$inst[$instanceName] = new self($pdo);
    }

    /**
     * @param string $statement
     * @param array $driverOptions
     * @return \NewCart\Core\Statement
     */
    public function prepare($statement, array $driverOptions = [])
    {
        $statement = $this->db->prepare($statement, $driverOptions);

        return new \NewCart\Core\Statement($statement);
    }

    public function query($query)
    {
        $this->db->query($query);
    }

    public function lastId($name = null)
    {
        return $this->db->lastInsertId($name);
    }
}
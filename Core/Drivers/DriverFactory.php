<?php

namespace NewCart\Core\Drivers;


class DriverFactory
{
    const DRIVER_MYSQL = 'mysql';

    /**
     * @param string $driver
     * @param string $user
     * @param string $pass
     * @param string $dbName
     * @param string $host
     * @return MySQLDriver
     * @throws \Exception
     */
    public static function create($driver, $user, $pass, $dbName, $host)
    {
        switch ($driver) {
            case self::DRIVER_MYSQL:
                return new MySqlDriver($user, $pass, $dbName, $host);
                break;
            default:
                throw new \Exception('Driver does not exist');
        }
//        if (self::DRIVER == $driver) {
//            return new MySQLDriver($user, $pass, $dbName, $host);
//        }

    }
}
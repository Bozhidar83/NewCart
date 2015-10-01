<?php

namespace NewCart\Core\Drivers;


class MySqlDriver extends DriverAbstract {

    /**
     * @return string
     */
    public function getDsn()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;

        return $dsn;
    }
}
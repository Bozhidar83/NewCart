<?php

namespace NewCart\Core;


class Statement
{
    /**
     * @var \PDOStatement
     */
    private $stmt = null;

    public function __construct(\PDOStatement $statement){
        $this->stmt = $statement;
    }

    /**
     * @param int $fetchStyle
     * @return mixed
     */
    public function fetch($fetchStyle = \PDO::FETCH_ASSOC){
        return $this->stmt->fetch($fetchStyle);
    }

    /**
     * @param int $fetchStyle
     * @return array
     */
    public function fetchAll($fetchStyle = \PDO::FETCH_ASSOC){
        return $this->stmt->fetchAll($fetchStyle);
    }

    /**
     * @param $parameter
     * @param $variable
     * @param int $dataType
     * @param null $length
     * @param null $driverOptions
     * @return bool
     */
    public function bindParam($parameter, &$variable, $dataType = \PDO::PARAM_STR, $length = null, $driverOptions = null){
        return $this->stmt->bindParam($parameter, $variable, $dataType, $length, $driverOptions);
    }

    /**
     * @return int
     */
    public function rowCount(){
        return $this->stmt->rowCount();
    }

    /**
     * @param array $params
     * @return bool
     */
    public function execute(array $params = null){
        return $this->stmt->execute($params);
    }
}
<?php

namespace NewCart\Models;


class HomeModel
{

    public function getTopProducts()
    {
        $db = \NewCart\Core\Database::getInstance('app');

        $result = $db->prepare("
            SELECT
                id, productName, productPrice, discount, quantity
            FROM
                products
            WHERE soldQuantity > 0
            LIMIT 5;
        ");
        //echo 1 . '<br/>';
        $result->execute([]);
        if ($result->rowCount() <= 0) {
            throw new \Exception('No results');
        }
        //echo 2 . '<br/>';
        return $result->fetchAll();
    }
}
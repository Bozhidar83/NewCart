<?php

namespace NewCart\Controllers;


abstract class Controller {

    //protected $db = Database::getInstance('app');

    public function isLogged()
    {
        return isset($_SESSION['id']);
    }

//    public function db()
//    {
//        return \NewCart\Core\Database::getInstance('app');
//    }
}
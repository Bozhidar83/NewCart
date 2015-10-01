<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'Autoloader.php';
\NewCart\Autoloader::init();

$uri = $_SERVER['REQUEST_URI'];
$self = $_SERVER['PHP_SELF'];

$directories = str_replace(basename($self), '', $self);
$requestString = str_replace($directories, '', $uri);

$requestParams = explode("/", $requestString);

$controller = array_shift($requestParams);
$action = array_shift($requestParams);

//require_once 'NewCart/Application.php';

\NewCart\Core\Database::setInstance(
    \NewCart\Config\DatabaseConfig::DB_INSTANCE,
    \NewCart\Config\DatabaseConfig::DB_DRIVER,
    \NewCart\Config\DatabaseConfig::DB_USER,
    \NewCart\Config\DatabaseConfig::DB_PASS,
    \NewCart\Config\DatabaseConfig::DB_NAME,
    \NewCart\Config\DatabaseConfig::DB_HOST
);

$app = new \NewCart\Application($controller, $action, $requestParams);
$app->start();

//function loadTemplate($templateName, $data = null){
//    require_once 'templates/' . $templateName . '.php';
//}
<?php

namespace NewCart;


class Application
{
    private $controllerName;
    private $actionName;
    private $requestParams = [];

    private $controller;

    const CONTROLLERS_NAMESPACE = 'NewCart\\Controllers\\';
    const CONTROLLERS_SUFFIX = 'Controller';

    public function __construct($controllerName, $actionName, $requestParams = [])
    {
        $this->controllerName = ucfirst($controllerName ? $controllerName : 'home');
        $this->actionName = $actionName ? $actionName : 'index';
        $this->requestParams = $requestParams;
    }

    public function start()
    {
        $this->initController();
        //var_dump($this->controller);

        \NewCart\View::$controllerName = $this->controllerName ? $this->controllerName : 'home';
        \NewCart\View::$actionName = $this->actionName ? $this->actionName : 'index';
        //echo 1 . '<br/>';

        //var_dump($this->actionName);

        call_user_func_array(
            [
                $this->controller,
                $this->actionName
            ],
            $this->requestParams
        );
        //echo 2 . '<br/>';
    }

    private function initController()
    {
        $controllerName =
            self::CONTROLLERS_NAMESPACE
            . $this->controllerName
            . self::CONTROLLERS_SUFFIX;
        //var_dump($controllerName);

        $this->controller = new $controllerName();
        //var_dump($this->controller);
    }

//    /**
//     * @return bool
//     */
//    public function isLogged(){
//        return isset($_SESSION['id']);
//    }
//
//    /**
//     * @param $username
//     * @return bool
//     */
//    public function userExists($username){
//        $result = $this->db->prepare("
//            SELECT id FROM users WHERE username = ?
//        ");
//        $result->execute([$username]);
//
//        return $result->rowCount() > 0;
//    }
//
//    /**
//     * @param $email
//     * @return bool
//     */
//    public function emailExists($email)
//    {
//        $result = $this->db->prepare("
//            SELECT id FROM users WHERE email = ?
//        ");
//        $result->execute([$email]);
//
//        return $result->rowCount() > 0;
//    }
//
//    /**
//     * @param $username
//     * @param $password
//     * @param $email
//     * @param $firstName
//     * @param $lastName
//     * @return bool
//     * @throws \Exception
//     */
//    public function register($username, $password, $email, $firstName, $lastName){
//        if ($this->userExists($username) || $this->emailExists($email)){
//            throw new \Exception('User with that username or email already exists');
//        }
//
//        $result = $this->db->prepare("
//            INSERT INTO users (username, password, email, firstName, lastName, roleId)
//            VALUES (?, ?, ?, ?, ?, ?)
//        ");
//
//        $result->execute(
//            [
//                $username,
//                password_hash($password, PASSWORD_DEFAULT),
//                $email,
//                $firstName,
//                $lastName,
//                $roleId = UserConfig::DEFAULT_USER_ROLE_ID
//            ]
//        );
//
//        if ($result->rowCount() > 0){
//            $userId = $this->db->lastId();
////            $this->db->query("
////                INSERT INTO user_buildings(user_id, building_id, level_id)
////                 SELECT $userId, id, 0 FROM buildings"
////            );
//
//            return true;
//        }
//
//        throw new \Exception('Cannot register user');
//    }
}
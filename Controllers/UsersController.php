<?php

namespace NewCart\Controllers;


class UsersController extends Controller {

    public function login()
    {
        $viewModel = new \NewCart\ViewModels\LoginInformation();
        echo 5 . '<br/>';
        if (isset($_POST['username'], $_POST['password'])) {
            try {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                var_dump($user);
                var_dump($pass);

                echo 3 . '<br/>';
                $this->initLogin($user, $pass);

            } catch (\Exception $e) {
                $viewModel->error = $e->getMessage();
                return new \NewCart\View($viewModel);
            }
        }
        var_dump(true);
        var_dump($viewModel);
        return new \NewCart\View($viewModel);
    }

    private function initLogin($user, $pass)
    {
        echo 1111 . '<br/>';
        $userModel = new \NewCart\Models\User();

        $userId = $userModel->login($user, $pass);
        var_dump($userId);
        $_SESSION['id'] = $userId;
        var_dump($_SESSION['id']);
        echo 11 . '<br/>';
        header("Location: profile");
        echo 2 . '<br/>';
    }

    public function register()
    {
        $viewModel = new \NewCart\ViewModels\RegisterInformation();
        //var_dump($viewModel->success);

        //var_dump(isset($_POST['username'], $_POST['password'], $_POST['email']));
        if (isset($_POST['username'], $_POST['password'], $_POST['email'])) {
            //echo 1 . '<br/>';
            //var_dump("Vutre v if-a");
            try {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $email = $_POST['email'];
                $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
                $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;

                //var_dump("Predi user modela");
                $userModel = new \NewCart\Models\User();
                //var_dump($userModel);
                //var_dump("Sled user modela");
                //$successfullRegistration = $userModel->register($user, $pass, $email, $firstName, $lastName);
                //var_dump($successfullRegistration == true);
                //var_dump("Sled $successfullRegistration");
                //var_dump("7-ti red v try {}");
                //$userModel->register($user, $pass, $email, $firstName, $lastName);
                //var_dump("8-ti red v try {}");
                //echo 1 . '<br/>';
                //var_dump($userModel);
                //$viewModel->success = true;
                //var_dump($viewModel);
                //return new \NewCart\View($viewModel);
                if ($userModel->register($user, $pass, $email, $firstName, $lastName)) {
                    $viewModel->success = true;
                    //var_dump($viewModel);
                    //return new \NewCart\View($viewModel);
                }

                //$this->initLogin($user, $pass);
            } catch (\Exception $e) {
                $viewModel->error = $e->getMessage();
                //var_dump($viewModel->error);
                return new \NewCart\View($viewModel);
            }
        }
        //var_dump($viewModel);
        return new \NewCart\View($viewModel);
    }

    public function profile()
    {
        echo 10 . '<br/>';
        if (!$this->isLogged()) {
            header("Location: login");
        }

        $userModel = new \NewCart\Models\User();
        $userInfo = $userModel->getInfo($_SESSION['id']);
        var_dump($userInfo);

        $userViewModel = new \NewCart\ViewModels\UserViewModel(
            $userInfo['username'],
            $userInfo['password'],
            $userInfo['email'],
            $userInfo['id'],
            $userInfo['firstName'],
            $userInfo['lastName']
        );

//        if (isset($_POST['edit'])) {
//            if ($_POST['password'] != $_POST['confirm'] || empty($_POST['password'])) {
//                $userViewModel->error = 1;
//                return new View($userViewModel);
//            }
//
//            if ($userModel->edit(
//                $_POST['username'],
//                $_POST['password'],
//                $_SESSION['id']
//            )) {
//                $userViewModel->success = 1;
//                $userViewModel->setUsername($_POST['username']);
//                $userViewModel->setPass($_POST['password']);
//
//                return new View($userViewModel);
//            }
//
//            $userViewModel->error = 1;
//            return new View($userViewModel);
//        }

        return new \NewCart\View($userViewModel);
    }
}
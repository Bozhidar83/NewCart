<?php
require_once 'index.php';

if (isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    try {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        $app->register($username, $password, $email, $firstName, $lastName);
        //$app->login($user, $pass);
        //header("Location: profile.php");
        //exit;
        echo 'You successfully registered!';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

loadTemplate('register');
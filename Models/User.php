<?php

namespace NewCart\Models;


class User
{
    public function register($username, $password, $email, $firstName, $lastName)
    {
        $db = \NewCart\Core\Database::getInstance('app');
        //echo 1 . '<br/>';
        //var_dump($db);
        //var_dump("1-ti red v User/register");
        if ($this->exists($username)) {
            throw new \Exception("Client with that username already exists.");
        }
        //echo 2 . '<br/>';
        //var_dump($this->exists($username));
        //var_dump("2-ti red v User/register");
        $result = $db->prepare("
            INSERT INTO users (username, password, email, firstName, lastName)
            VALUES (?, ?, ?, ?, ?);
        ");
        //var_dump("3-ti red v User/register");
        //var_dump($username);
        //var_dump($password);
        //var_dump($email);
        //var_dump($firstName);
        //var_dump($lastName);
        $result->execute(
            [
                $username,
                password_hash($password, PASSWORD_BCRYPT),
                $email,
                $firstName,
                $lastName
            ]
        );
       // var_dump("4-ti red v User/register");
        //var_dump($result);
        //var_dump($result->rowCount());

        if ($result->rowCount() > 0) {
            //var_dump("5-ti red v if result->rowCount");
            //$userId = $db->lastId();

//            $db->query("
//                INSERT INTO user_buildings (user_id, building_id, level_id)
//                SELECT $userId, id, 0 FROM buildings
//            ");
            //echo 1 . '<br/>';
            //var_dump($result->rowCount());
            return true;
        }

        throw new \Exception('Cannot register user');
    }

    public function exists($username)
    {
        $db = \NewCart\Core\Database::getInstance('app');

        $result = $db->prepare("SELECT id FROM users WHERE username = ?");
        $result->execute([ $username ]);

        return $result->rowCount() > 0;
    }

    public function login($username, $password)
    {
        echo 111 . '<br/>';
        $db = \NewCart\Core\Database::getInstance('app');

        $result = $db->prepare("
            SELECT
                id, username, password, email, firstName, lastName, roleId
            FROM
                users
            WHERE username = ?
        ");

        $result->execute([$username]);

        if ($result->rowCount() <= 0) {
            throw new \Exception('Invalid username');
        }

        $userRow = $result->fetch();

        if (password_verify($password, $userRow['password'])) {
            return $userRow['id'];
        }

        throw new \Exception('Invalid credentials');
    }

    public function getInfo($id)
    {
        $db = \NewCart\Core\Database::getInstance('app');

        $result = $db->prepare("
            SELECT
                id, username, password, email, firstName, lastName, roleId
            FROM
                users
            WHERE id = ?
        ");

        $result->execute([$id]);

        return $result->fetch();
    }

    public function edit($user, $pass, $email, $firstName, $lastName, $id)
    {
        $db = \NewCart\Core\Database::getInstance('app');

        $result = $db->prepare("
            UPDATE users
            SET password = ?, username = ?, email = ?, firstName = ?, lastName = ?
            WHERE id = ?");
        $result->execute([
            $pass,
            $user,
            $email,
            $firstName,
            $lastName,
            $id
        ]);

        return $result->rowCount() > 0;
    }
}
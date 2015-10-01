<?php

namespace NewCart\ViewModels;



class UserViewModel
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $roleId;
    private $firstName;
    private $lastName;

    public function __construct(
        $username,
        $password,
        $email,
        $roleId = \NewCart\Config\UserConfig::DEFAULT_USER_ROLE_ID,
        $id = null,
        $firstName = null,
        $lastName = null
    )
    {
        $this->setUsername($username)
            ->setPassword($password)
            ->setEmail($email)
            ->setId($id)
            ->setFirstName($firstName)
            ->setLastName($lastName);

    }

    /**
     * @return $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password
     * @return $this;
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return $roleId
     */
    public function getRole()
    {
        return $this->roleId;
    }

    /**
     * @param \NewCart\Config\UserConfig $roleId
     * @internal param mixed $role
     */
    public function setRole(\NewCart\Config\UserConfig $roleId)
    {
        $this->roleId = $roleId;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


}
<?php
namespace App\Data\User;
class UserDTO
{
    private $id;
    private $username;
    private $password;


    public static function create(
        string $username, string $password, $id = null
    )
    {
        return (new UserDTO())
            ->setUsername($username)
            ->setPassword($password)
            ->setId($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): UserDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): UserDTO
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): UserDTO
    {
        $this->password = $password;
        return $this;
    }

}
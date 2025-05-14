<?php
namespace App\Data\User;
class UserDTO
{
    private $id;
    private $username;
    private $password;
    private $role_id;


    public static function create(
        string $username, string $password, int $role_id, $id = null
    )
    {
        return (new UserDTO())
            ->setUsername($username)
            ->setPassword($password)
            ->setRoleId($role_id)
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

    public function setRoleId(int $role_id): UserDTO
    {
        $this->role_id = $role_id;  // Записваме role_id в свойството role
        return $this;
    }

    public function getRoleId(): ?int
    {
        return $this->role_id;  // Връщаме стойността на role
    }


}
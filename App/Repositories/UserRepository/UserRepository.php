<?php

namespace App\Repositories\UserRepository;

use App\Data\User\UserDTO;
use Database\DatabaseInterface;

class UserRepository implements UserRepositoryInterface
{

    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function insert(UserDTO $userDTO): bool
    {
        $this->db->query(
            "INSERT INTO 
                        user(username, password) 
                    VALUES(?, ?)"
        )
            ->execute([
            $userDTO->getUsername(),
            $userDTO->getPassword(),
        ]);
        return true;
    }

    public function update(int $id, UserDTO $userDTO): bool
    {
        $this->db->query(
            "UPDATE 
                        user 
                    SET
                        username = ?,
                        password = ?,
                    WHERE 
                        user_id = ?
                        "
        )
            ->execute([
            $userDTO->getUsername(),
            $userDTO->getPassword(),
            $id
        ]);
        return true;
    }

    public function delete(int $id): bool
    {
        $this->db->query(
            "DELETE FROM user WHERE user_id = ?"
        )
            ->execute([$id]);

        return true;
    }

    public function findOneByUsername(string $username): ?UserDTO
    {
        return $this->db->query(
            "SELECT
                        user_id AS id,
                        username,
                        password
                    FROM user
                    WHERE username = ?"
        )
            ->execute([$username])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function findOneById(int $id): ?UserDTO
    {
        return $this->db->query(
            "SELECT
                        user_id AS id,
                        username,
                        password
                    FROM user 
                    WHERE user_id = ?"
        )
            ->execute([$id])
            ->fetch(UserDTO::class)
            ->current();
    }
}
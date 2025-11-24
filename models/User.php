<?php

class User extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT u.*
        FROM `users` as u
        ORDER BY u.id DESC;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

<?php

class Comment extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT c.*, u.username user_name ,p.name prd_name
        FROM `comments` as c
        JOIN users as u
        ON c.user_id = u.id
        JOIN products as p
        ON c.product_id = p.id
        ORDER BY c.id DESC;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

<?php

class Category extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT c.*
        FROM `categories` as c
        ORDER BY c.id DESC;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

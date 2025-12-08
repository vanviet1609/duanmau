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

    public function insert($data)
    {
        $sql = "INSERT INTO `categories` (`id`, `name`, `description`) 
        VALUES 
        (NULL,
        '" . $data['name']          . "',
        '" . $data['description']   . "'
        );";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM categories WHERE `categories`.`id` = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function find($id)
    {
        $sql = "SELECT * 
        FROM `categories`
        WHERE id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($data,$id){
        $sql = "UPDATE `categories` 
        SET 
        `name` = '".$data['name']."',
        `description` = '".$data['description']."'
        WHERE `categories`.`id` = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}

<?php

class Product extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT p.*, c.name cat_name 
        FROM `products` as p 
        JOIN categories as c 
        ON p.category_id = c.id 
        ORDER BY p.id DESC;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE `products`.`id` = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function find($id)
    {
        $sql = "SELECT * 
        FROM `products`
        WHERE id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `img`) 
        VALUES 
        (NULL, 
        '" . $data['category_id']   . "',
        '" . $data['name']          . "',
        '" . $data['description']   . "',
        '" . $data['price']         . "', 
        '" . $data['quantity']      . "', 
        '" . $data['image']         . "');";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}

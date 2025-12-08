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
    
    public function top4Lastest(){
        $sql = "SELECT * 
        FROM `products`
        ORDER BY ID DESC LIMIT 4";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function topView($number){
        $sql = "SELECT * 
        FROM `products`
        ORDER BY view_count DESC LIMIT $number";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateView($view_count,$id){
        $sql = "UPDATE `products` 
        SET `view_count` = $view_count 
        WHERE `products`.`id` = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function update($data,$id){
        $sql = "UPDATE `products` 
        SET 
        `category_id` = '".$data['category_id']."',
        `name` = '".$data['name']."',
        `description` = '".$data['description']."',
        `price` = '".$data['price']."',
        `quantity` = '".$data['quantity']."',
        `img` = '".$data['image']."'
        WHERE `products`.`id` = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function findByCate($id){
        $sql = "SELECT * 
        FROM `products`
        WHERE category_id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function search($key){
        $sql = "SELECT * FROM `products` WHERE `name` LIKE '%".$key."%'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getOtherProduct($cate,$id)
    {
        $sql = "SELECT * 
        FROM `products`
        WHERE category_id = $cate
        AND id != $id
        LIMIT 4";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

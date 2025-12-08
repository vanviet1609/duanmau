<?php

class Banner extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT *
        FROM `banners`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($data){
        $sql = "UPDATE `banners` 
        SET 
        `banner1` = '".$data['banner1']."',
        `banner2` = '".$data['banner2']."',
        `banner3` = '".$data['banner3']."'
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
}

<?php

class Search extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT *
        FROM `search`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insert($key)
    {
        $sql = "INSERT INTO `search` (`id`, `content`) 
        VALUES 
        (NULL,
        '" . $key . "'
        );";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function getMostSearch($number)
    {
        $sql = "SELECT content, COUNT(*) AS total
                FROM search
                GROUP BY content
                HAVING COUNT(*) > 1
                ORDER BY total DESC
                LIMIT $number;
                ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

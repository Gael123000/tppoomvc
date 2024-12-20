<?php

class Project
{
    public static function all()
    {
        $db = Database::getInstance()->getPdo();
        $stmt = $db->query("SELECT * FROM projects ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id){

    }

    public static function create($name, $description){
        $db = Database::getInstance()->getPdo();
        $stmt = $db->prepare("INSERT INTO projects (name, description, created_at) VALUES(:name, :description, NOW())");
        $stmt->execute([
            ':name' => $name,
            ':description' => $description,
        ]);

        return $db->lastInsertId();
    }

}
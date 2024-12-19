<?php

class Task
{
    public static function all()
    {
        $db = Database::getInstance()->getPdo();
        $stmt = $db->query("SELECT * FROM tasks ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($title, $description)
    {
        $db = Database::getInstance()->getPdo();
        $stmt = $db->prepare("INSERT INTO tasks (title, description, created_at) VALUES (:title, :description, NOW())");
        $stmt->execute([
            ':title' => $title,
            ':description' => $description,
        ]);

        return $db->lastInsertId();

    }

//    public static function createDescription($description)
//    {
//        $db = Database::getInstance()->getPdo();
//        $stmt = $db->prepare("INSERT INTO tasks (title, created_at) VALUES (:title, NOW())");
//        $stmt->execute([
//            ':title' => $description,
//        ]);
//
//        return $db->lastInsertId();
//
//    }

    public static function markAsCompleted($id)
    {
        $db = Database::getInstance()->getPdo();
        $stmt = $db->prepare("UPDATE tasks SET is_completed=1 WHERE id = :id");
        $stmt->execute([
            ':id' => $id,
        ]);
    }
    public static function delete($id)
    {
        $db = Database::getInstance()->getPdo();
        $stmt = $db->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->execute([
            ':id' => $id,
        ]);
    }
}

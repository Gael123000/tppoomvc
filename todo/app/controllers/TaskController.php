<?php
class TaskController
{
    public function index()
    {
        $tasks = Task::all();
        include __DIR__ . '/../views/tasks/index.php';
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $description = $_POST['description'] ?? '';

            if (!empty($title) && !empty($description)) {
                Task::create($title, $description);
                header('Location: /');
                exit;
            } else {
                $error = 'Titre et description obligatoires';
            }
        }
        include __DIR__ . '/../views/tasks/create.php';
    }
    public function markAsCompleted($id)
    {
     Task::markAsCompleted($id);
     header('Location: /');
     exit;
     }
    public function delete($id)
    {
        Task::delete($id);
        header('Location: /');
        exit;
    }
}

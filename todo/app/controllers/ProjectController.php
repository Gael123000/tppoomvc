<?php

class ProjectController{

    public function index(){
        $projects = Project::all();
        include __DIR__ . "/../views/projects/index.php";
    }
    public function show($id){

    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';

            if (!empty($name) && !empty($description)){
                Project::create($name, $description);
                header("Location: /project");
            } else {
                $error = 'Titre et description obligatoires';
            }

        }
        include __DIR__ . "/../views/projects/create.php";
    }

}
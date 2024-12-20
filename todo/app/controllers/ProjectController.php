<?php

class ProjectController{

    public function index(){
        $projects = Project::all();
        include __DIR__ . "/../views/projects/index.php";
    }

}
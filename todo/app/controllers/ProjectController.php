<?php

class ProjectController{

    public function index(){
        $projects = Project::all();
        include ("../views/projects/index.php");
    }

}
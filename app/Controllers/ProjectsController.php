<?php
namespace App\Controllers;

use App\Models\Project;

class ProjectsController
{
    public function index()
    {
        $project = new Project();
        $projects = $project->getAllProjects();
        require_once APP_ROOT . '/views/works.php';
    }
}
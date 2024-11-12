<?php
namespace App\Controllers;

use App\Models\Skill;

class SkillsController
{
    public function index()
    {
        $skill = new Skill();
        $skills = $skill->getAllSkills();
        require_once APP_ROOT . '/views/skills.php';
    }
}
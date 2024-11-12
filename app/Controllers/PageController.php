<?php
namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class PageController
{
    public function homeAction(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/home.php';
    }

    public function contactAction(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/contact.php';
    }

    public function aboutAction()
    {
        require_once APP_ROOT . '/views/about.php';
    }

    public function blogsAction()
    {
        require_once APP_ROOT . '/views/blogs.php';
    }

    public function skillsAction()
    {
        require_once APP_ROOT . '/views/skills.php';
    }

    public function projectsAction()
    {
        require_once APP_ROOT . '/views/projects.php';
    }

    public function projectAction()
    {
        require_once APP_ROOT . '/views/project.php';
    }

    public function worksAction()
    {
        require_once APP_ROOT . '/views/works.php';
    }

    public function loginAction()
    {
        require_once APP_ROOT . '/views/admin/login.php';
    }

    public function adminDashboardAction()
    {
        require_once APP_ROOT . '/views/admin/index.php';
    }

    public function manageAboutAction()
    {
        require_once APP_ROOT . '/views/admin/manage_about.php';
    }

    public function manageProjectsAction()
    {
        require_once APP_ROOT . '/views/admin/manage_projects.php';
    }

    public function manageSkillsAction()
    {
        require_once APP_ROOT . '/views/admin/manage_skills.php';
    }

    public function logoutAction()
    {
        require_once APP_ROOT . '/views/admin/logout.php';
    }
}
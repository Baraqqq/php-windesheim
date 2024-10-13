<?php 

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
    public function homeAction(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/home.php';
    }

    // Contact page action
    public function contactAction(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/contact.php';
    }

    // Second homepage action
    public function secondHomeAction()
    {
        require_once APP_ROOT . '/views/second_home.php';
    }

    // About Me page action
    public function aboutMeAction()
    {
        require_once APP_ROOT . '/views/about-me.php';
    }

    // Blogs page action
    public function blogsAction()
    {
        require_once APP_ROOT . '/views/blogs.php';
    }

    // Works page action
    public function worksAction()
    {
        require_once APP_ROOT . '/views/works.php';
    }
    public function loginAction()
    {
        require_once APP_ROOT . '/views/login.php';
    }
}
?>
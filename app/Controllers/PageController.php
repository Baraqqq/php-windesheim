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
}
?>
<?php 

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
    public function indexAction(RouteCollection $routes)
    {
        $routeToProfile = $routes->get('profile')->getPath();
        $routeToProfileForm = $routes->get('profile_form')->getPath();
  
        require_once APP_ROOT . '/views/home.php';
    }
}
?>
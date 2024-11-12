<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\Controllers\PageController;
use App\Controllers\AboutController;
use App\Controllers\SkillsController;
use App\Controllers\ProjectsController;
use App\Controllers\BlogsController;

$routes = new RouteCollection();

$routes->add('home', new Route('/', [
    '_controller' => [PageController::class, 'homeAction']
]));

$routes->add('contact', new Route('/contact', [
    '_controller' => [PageController::class, 'contactAction']
]));

$routes->add('about', new Route('/about', [
    '_controller' => [PageController::class, 'aboutAction']
]));

$routes->add('blogs', new Route('/blogs', [
    '_controller' => [BlogsController::class, 'index']
]));

$routes->add('skills', new Route('/skills', [
    '_controller' => [SkillsController::class, 'index']
]));

$routes->add('projects', new Route('/projects', [
    '_controller' => [PageController::class, 'projectsAction']
]));

$routes->add('project', new Route('/project', [
    '_controller' => [PageController::class, 'projectAction']
]));

$routes->add('works', new Route('/works', [
    '_controller' => [ProjectsController::class, 'index']
]));

$routes->add('login', new Route('/admin/login', [
    '_controller' => [PageController::class, 'loginAction']
]));

$routes->add('admin_dashboard', new Route('/admin', [
    '_controller' => [PageController::class, 'adminDashboardAction']
]));

$routes->add('manage_about', new Route('/admin/manage_about', [
    '_controller' => [PageController::class, 'manageAboutAction']
]));

$routes->add('manage_projects', new Route('/admin/manage_projects', [
    '_controller' => [PageController::class, 'manageProjectsAction']
]));

$routes->add('manage_skills', new Route('/admin/manage_skills', [
    '_controller' => [PageController::class, 'manageSkillsAction']
]));

$routes->add('logout', new Route('/admin/logout', [
    '_controller' => [PageController::class, 'logoutAction']
]));
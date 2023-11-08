<?php


use App\Controllers\WaliController;
use App\Controllers\LoginController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->setAutoRoute(true);
$routes->get('/', 'LoginController::index');
$routes->get('/beranda',[Home::class, 'index']);
$routes->get('/wali',[WaliController::class,'index']);
$routes->get('/beranda/(:num)', [[Home::class, 'home'],'$1']);
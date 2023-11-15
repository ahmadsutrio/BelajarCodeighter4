<?php


use App\Controllers\Home;
use App\Controllers\WaliController;
use App\Controllers\LoginController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);
$routes->get('/', 'LoginController::index');
$routes->get('/beranda',[Home::class, 'index']);
$routes->get('/rekapitulasi',[Home::class, 'rekap']);
$routes->get('/wali', 'WaliController::index', ['as' => 'wali']);


$routes->get('/beranda/(:num)', [[Home::class, 'home'],'$1']);
$routes->post('/add', [WaliController::class, 'addBukuHubung']);
$routes->post('/edit', [WaliController::class, 'editBukuHubung']);
$routes->post('/delete/(:num)', [[WaliController::class, 'deleteBukuHubung'],'$1']);


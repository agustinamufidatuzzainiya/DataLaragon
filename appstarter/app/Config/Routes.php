<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('home/simpanmhs', 'Home::simpanmhs');
$routes->get('home/viewmhs', 'Home::viewmhs');

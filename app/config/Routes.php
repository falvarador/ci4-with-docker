<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/bulma', 'Home::bulma');
$routes->get('/db', 'Home::db');

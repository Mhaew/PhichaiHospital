<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact', 'Home::contact');

//ITA
$routes->get('/ita64', 'Home::ita64');
$routes->get('/ita65', 'Home::ita65');
$routes->get('/ita66', 'Home::ita66');
$routes->get('/ita67', 'Home::ita67');
<<<<<<< HEAD
$routes->get('/ita68', 'Home::ita68');

//PDF
$routes->get('pdf', 'Pdf::pdf');
=======
$routes->get('/ita68', 'Home::ita68');
>>>>>>> 5fada889801cce5c3402b8f1611247b197b2ad7a

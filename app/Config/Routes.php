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
$routes->get('/ita68', 'Home::ita68');

//PDF
$routes->get('pdf', 'Pdf::pdf');

//News
$routes->get('/news', 'Home::news');

//History
$routes->get('/history', 'Home::history');
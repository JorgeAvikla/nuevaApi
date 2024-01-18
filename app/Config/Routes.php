<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group("api", function ($routes) {

    $routes->post("register", "User::register");
    $routes->post("login", "User::login");
    $routes->get("profile", "User::details");
});
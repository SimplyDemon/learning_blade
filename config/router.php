<?php

$routerContainer = new \Aura\Router\RouterContainer();
$router = $routerContainer->getMap();

$router->get('home', ROUTE_PATH, \NtSchool\Action\HomeAction::class);
$router->get('contact', ROUTE_PATH . 'contact', \NtSchool\Action\ContactUsAction::class);
$router->get('blog', ROUTE_PATH . 'blog', \NtSchool\Action\BlogAction::class);
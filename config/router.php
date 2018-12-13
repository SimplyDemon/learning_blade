<?php

$routerContainer = new \Aura\Router\RouterContainer();
$router = $routerContainer->getMap();

$router->get('home', '/', \NtSchool\Action\HomeAction::class);
$router->get('contact', '/contact', \NtSchool\Action\ContactUsAction::class);
$router->get('blog', '/blog', \NtSchool\Action\BlogAction::class);
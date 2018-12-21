<?php

$routerContainer = new \Aura\Router\RouterContainer();
$router          = $routerContainer->getMap();

$router->get( 'home', '/', \NtSchool\Action\HomeAction::class );
$router->get( 'contact', '/contact', \NtSchool\Action\ContactUsAction::class );
$router->get( 'blog', '/blog', \NtSchool\Action\BlogAction::class );
$router->get( 'register.get', '/register', \NtSchool\Action\RegisterAction::class );
$router->post( 'register.post', '/register', \NtSchool\Action\RegisterAction::class );
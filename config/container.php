<?php

/** @var $renderer \Illuminate\View\Factory */

use Aura\Di\ContainerBuilder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$builder = new ContainerBuilder();
$container = $builder->newInstance();

$container->set('logger', function (){
	// create a log channel
	$log = new Katzgrau\KLogger\Logger(__DIR__ . '/../resources/logs');

	$logger = new \NtSchool\KatzgrauLogger($log);

	return $logger;
});

//$container->set('logger', function (){
//	// create a log channel
//	$log = new Logger('name');
//	$log->pushHandler(new StreamHandler(__DIR__ . '/../resources/logs/main.log'));
//
//	$logger = new \NtSchool\MonologLogger($log);
//
//	return $logger;
//});

$container->set(\NtSchool\Action\HomeAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\HomeAction($renderer, $container->get('logger'));
});

$container->set(\NtSchool\Action\ContactUsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ContactUsAction($renderer);
});

$container->set(\NtSchool\Action\BlogAction::class, function () use ($renderer) {
    return new \NtSchool\Action\BlogAction($renderer);
});
<?php

/** @var $renderer \Illuminate\View\Factory */

use Aura\Di\ContainerBuilder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$builder = new ContainerBuilder();
$container = $builder->newInstance();

$container->set('logger', function (){
	//	$log = new Monolog\Logger('name');
//	$log->pushHandler(new StreamHandler(__DIR__ . '/../resources/logs/main.log'));
	$logger = new \NtSchool\Notifier\Adapter\VKNotifierAdapter(env('vkApiKey'), env('vkUserID'));

	return $logger;
});

$container->set('validator', function () use ($capsule) {
	$filesystem = new Illuminate\Filesystem\Filesystem();
	$loader = new Illuminate\Translation\FileLoader($filesystem, dirname(dirname(__FILE__)) . '/resources/lang');
	$loader->addNamespace('lang', dirname(dirname(__FILE__)) . '/resources/lang');
	$loader->load($lang = 'ru', $group = 'validation', $namespace = 'lang');

	$factory = new Illuminate\Translation\Translator($loader, 'ru');
	$validator = new Illuminate\Validation\Factory($factory);

	$databasePresenceVerifier = new \Illuminate\Validation\DatabasePresenceVerifier($capsule->getDatabaseManager());
	$validator->setPresenceVerifier($databasePresenceVerifier);

	return $validator;
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

$container->set(\NtSchool\Action\RegisterAction::class, function () use ($renderer, $container ) {
    return new \NtSchool\Action\RegisterAction($renderer, $container->get('validator'));
});
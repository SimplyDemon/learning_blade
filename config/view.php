<?php

$engineResolver = new \Illuminate\View\Engines\EngineResolver();

$fileSystem = new \Illuminate\Filesystem\Filesystem();
$fileViewFinder = new \Illuminate\View\FileViewFinder(
    $fileSystem, [RESORCES_PATH . 'views']
);

$compiler = new \Illuminate\View\Compilers\BladeCompiler($fileSystem, RESORCES_PATH . 'cache');

$engineResolver->register('blade', function () use ($compiler) {
    return new \Illuminate\View\Engines\CompilerEngine($compiler);
});

$container = new \Illuminate\Container\Container();
$dispatcher = new \Illuminate\Events\Dispatcher($container);

$renderer = new \Illuminate\View\Factory(
    $engineResolver,
    $fileViewFinder,
    $dispatcher
);
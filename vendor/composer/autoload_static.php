<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39063dc7798a5a94a2e414c5e7ddb0c7
{
    public static $classMap = array (
        'ComposerAutoloaderInit39063dc7798a5a94a2e414c5e7ddb0c7' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit39063dc7798a5a94a2e414c5e7ddb0c7' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/databases/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/databases/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Route' => __DIR__ . '/../..' . '/core/Route.php',
        'controllers\\TodoControllers' => __DIR__ . '/../..' . '/controllers/TodoController.php',
        'core\\App' => __DIR__ . '/../..' . '/core/App.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit39063dc7798a5a94a2e414c5e7ddb0c7::$classMap;

        }, null, ClassLoader::class);
    }
}

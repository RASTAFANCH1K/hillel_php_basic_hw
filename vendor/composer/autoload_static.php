<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47a05088ba19b2d17c930d36f7582737
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
            'Components\\' => 11,
            'Common\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
        'Common\\' => 
        array (
            0 => __DIR__ . '/../..' . '/common',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\AbstractController' => __DIR__ . '/../..' . '/app/Controllers/AbstractController.php',
        'App\\Controllers\\Admin\\Admin' => __DIR__ . '/../..' . '/app/Controllers/Admin/Admin.php',
        'App\\Controllers\\Home\\About' => __DIR__ . '/../..' . '/app/Controllers/Home/About.php',
        'App\\Controllers\\Home\\Gallery' => __DIR__ . '/../..' . '/app/Controllers/Home/Gallery.php',
        'App\\Controllers\\Home\\Index' => __DIR__ . '/../..' . '/app/Controllers/Home/Index.php',
        'App\\Controllers\\Home\\SelectSandbox' => __DIR__ . '/../..' . '/app/Controllers/Home/SelectSandbox.php',
        'App\\Controllers\\Page404' => __DIR__ . '/../..' . '/app/Controllers/Page404.php',
        'App\\Models\\About' => __DIR__ . '/../..' . '/app/Models/About.php',
        'App\\Models\\AbstractModel' => __DIR__ . '/../..' . '/app/Models/AbstractModel.php',
        'App\\Models\\Admin' => __DIR__ . '/../..' . '/app/Models/Admin.php',
        'App\\Models\\Gallery' => __DIR__ . '/../..' . '/app/Models/Gallery.php',
        'App\\Models\\Index' => __DIR__ . '/../..' . '/app/Models/Index.php',
        'App\\Models\\Page404' => __DIR__ . '/../..' . '/app/Models/Page404.php',
        'App\\Models\\SelectSandbox' => __DIR__ . '/../..' . '/app/Models/SelectSandbox.php',
        'Common\\Database\\Connector' => __DIR__ . '/../..' . '/common/Database/Connector.php',
        'Common\\Database\\Select' => __DIR__ . '/../..' . '/common/Database/Select.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Core\\View' => __DIR__ . '/../..' . '/core/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47a05088ba19b2d17c930d36f7582737::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47a05088ba19b2d17c930d36f7582737::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47a05088ba19b2d17c930d36f7582737::$classMap;

        }, null, ClassLoader::class);
    }
}

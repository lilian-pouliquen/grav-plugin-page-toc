<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88b09b7fda3e99f2e22346b58205e375
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Knp\\Menu\\' => 9,
        ),
        'G' => 
        array (
            'Grav\\Plugin\\PageToc\\' => 20,
        ),
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Knp\\Menu\\' => 
        array (
            0 => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu',
        ),
        'Grav\\Plugin\\PageToc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\PageTOCPlugin' => __DIR__ . '/../..' . '/page-toc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88b09b7fda3e99f2e22346b58205e375::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88b09b7fda3e99f2e22346b58205e375::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88b09b7fda3e99f2e22346b58205e375::$classMap;

        }, null, ClassLoader::class);
    }
}

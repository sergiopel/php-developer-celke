<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbabd13ea62df7ef5716aedbdb555a205
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbabd13ea62df7ef5716aedbdb555a205::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbabd13ea62df7ef5716aedbdb555a205::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbabd13ea62df7ef5716aedbdb555a205::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9924143c50f79b691a0022742414b52
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9924143c50f79b691a0022742414b52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9924143c50f79b691a0022742414b52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9924143c50f79b691a0022742414b52::$classMap;

        }, null, ClassLoader::class);
    }
}

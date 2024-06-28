<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9f9338381eac5efce3c69d0cda43168
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHP\\MYSQL\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHP\\MYSQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita9f9338381eac5efce3c69d0cda43168::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9f9338381eac5efce3c69d0cda43168::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita9f9338381eac5efce3c69d0cda43168::$classMap;

        }, null, ClassLoader::class);
    }
}

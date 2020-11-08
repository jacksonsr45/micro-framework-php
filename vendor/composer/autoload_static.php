<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdaf041d6b7970d0ba2805d28ce32764d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MicroFramework\\' => 15,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MicroFramework\\' => 
        array (
            0 => __DIR__ . '/..' . '/MicroFramework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdaf041d6b7970d0ba2805d28ce32764d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdaf041d6b7970d0ba2805d28ce32764d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa116b1061dcd312fee69b9c2ee1c1ce
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ramont\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ramont\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa116b1061dcd312fee69b9c2ee1c1ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa116b1061dcd312fee69b9c2ee1c1ce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

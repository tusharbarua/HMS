<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52cf77d26e9a6bdd35895d7e79805ca9
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
            0 => __DIR__ . '/../..' . '/views/SIRIUS',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52cf77d26e9a6bdd35895d7e79805ca9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52cf77d26e9a6bdd35895d7e79805ca9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
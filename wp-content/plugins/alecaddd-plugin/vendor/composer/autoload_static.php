<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25f501e80205a6451aee5224c7d5ac14
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25f501e80205a6451aee5224c7d5ac14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25f501e80205a6451aee5224c7d5ac14::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

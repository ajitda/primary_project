<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit850a6d547a09049e931a93ce00851f5b
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
            0 => __DIR__ . '/../..' . '/src/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit850a6d547a09049e931a93ce00851f5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit850a6d547a09049e931a93ce00851f5b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

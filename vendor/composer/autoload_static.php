<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05b4119e96b3b1a33a0567f45ba46264
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'C' => 
        array (
            'Curl' => 
            array (
                0 => __DIR__ . '/..' . '/curl/curl/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05b4119e96b3b1a33a0567f45ba46264::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05b4119e96b3b1a33a0567f45ba46264::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit05b4119e96b3b1a33a0567f45ba46264::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
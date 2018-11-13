<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e7b952c4543f7eadd244feac770bcc7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MathPHP\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MathPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/markrogoyski/math-php/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'ChrisKonnertz\\StringCalc' => 
            array (
                0 => __DIR__ . '/..' . '/chriskonnertz/string-calc/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e7b952c4543f7eadd244feac770bcc7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e7b952c4543f7eadd244feac770bcc7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8e7b952c4543f7eadd244feac770bcc7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
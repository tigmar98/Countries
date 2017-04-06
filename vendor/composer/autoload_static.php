<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit743e896ca7c59937c042d3a657a9d107
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SameerShelavale\\PhpCountriesArray\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SameerShelavale\\PhpCountriesArray\\' => 
        array (
            0 => __DIR__ . '/..' . '/sameer-shelavale/php-countries-array/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SameerShelavale\\PhpCountriesArray\\' => 
            array (
                0 => __DIR__ . '/..' . '/sameer-shelavale/php-countries-array/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit743e896ca7c59937c042d3a657a9d107::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit743e896ca7c59937c042d3a657a9d107::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit743e896ca7c59937c042d3a657a9d107::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

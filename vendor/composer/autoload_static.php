<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d5ab4081c0b7ec255302f84725fd069
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'H' => 
        array (
            'Hisune\\EchartsPHP\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Hisune\\EchartsPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/hisune/echarts-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d5ab4081c0b7ec255302f84725fd069::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d5ab4081c0b7ec255302f84725fd069::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d5ab4081c0b7ec255302f84725fd069::$classMap;

        }, null, ClassLoader::class);
    }
}
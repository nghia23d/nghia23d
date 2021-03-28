<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6305d85a4371a1306646faefcf8b892b
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'nghia23d\\cms\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'nghia23d\\cms\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6305d85a4371a1306646faefcf8b892b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6305d85a4371a1306646faefcf8b892b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6305d85a4371a1306646faefcf8b892b::$classMap;

        }, null, ClassLoader::class);
    }
}

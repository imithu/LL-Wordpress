<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc78c89ae35e851af65e29f24f5f0786d
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LL\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/LL',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc78c89ae35e851af65e29f24f5f0786d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc78c89ae35e851af65e29f24f5f0786d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc78c89ae35e851af65e29f24f5f0786d::$classMap;

        }, null, ClassLoader::class);
    }
}

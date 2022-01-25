<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48e8cb00db1fea873836869ea0c7c732
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SheetDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SheetDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/sheetdb/sheetdb-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48e8cb00db1fea873836869ea0c7c732::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48e8cb00db1fea873836869ea0c7c732::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48e8cb00db1fea873836869ea0c7c732::$classMap;

        }, null, ClassLoader::class);
    }
}

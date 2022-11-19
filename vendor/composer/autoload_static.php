<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf33fb6a1e58fb645f19ace04399b3075
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sample\\Sample\\' => 14,
        ),
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sample\\Sample\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf33fb6a1e58fb645f19ace04399b3075::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf33fb6a1e58fb645f19ace04399b3075::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf33fb6a1e58fb645f19ace04399b3075::$classMap;

        }, null, ClassLoader::class);
    }
}
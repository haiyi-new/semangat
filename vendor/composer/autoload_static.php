<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd483e3edfd1b12dc48883b9a634c7fbc
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Teknohaiyi\\Semangat\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Teknohaiyi\\Semangat\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd483e3edfd1b12dc48883b9a634c7fbc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd483e3edfd1b12dc48883b9a634c7fbc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd483e3edfd1b12dc48883b9a634c7fbc::$classMap;

        }, null, ClassLoader::class);
    }
}

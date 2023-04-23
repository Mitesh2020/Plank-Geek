<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e35ff3eccdf2c5b8c453ac9a53af9d0
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hybridauth\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hybridauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e35ff3eccdf2c5b8c453ac9a53af9d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e35ff3eccdf2c5b8c453ac9a53af9d0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e35ff3eccdf2c5b8c453ac9a53af9d0::$classMap;

        }, null, ClassLoader::class);
    }
}

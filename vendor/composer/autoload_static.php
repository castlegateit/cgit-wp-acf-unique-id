<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita62cd245b1fc5c2858e62ae1c9cb27cd
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Castlegate\\AcfUniqueId\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Castlegate\\AcfUniqueId\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita62cd245b1fc5c2858e62ae1c9cb27cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita62cd245b1fc5c2858e62ae1c9cb27cd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita62cd245b1fc5c2858e62ae1c9cb27cd::$classMap;

        }, null, ClassLoader::class);
    }
}

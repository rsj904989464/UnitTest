<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a61388421e06467f7b63df0c83de3b4
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rsj\\UnitTest\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rsj\\UnitTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a61388421e06467f7b63df0c83de3b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a61388421e06467f7b63df0c83de3b4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

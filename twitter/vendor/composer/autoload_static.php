<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3c59c3e654477d5ef01c5a33005c512
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3c59c3e654477d5ef01c5a33005c512::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3c59c3e654477d5ef01c5a33005c512::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0a7cb2c83089ec2acc68e7627bf56a1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0a7cb2c83089ec2acc68e7627bf56a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0a7cb2c83089ec2acc68e7627bf56a1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
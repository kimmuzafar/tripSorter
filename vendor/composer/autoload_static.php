<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf65f8dddc8db23de243be6cdba47277a
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IsdPro\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IsdPro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf65f8dddc8db23de243be6cdba47277a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf65f8dddc8db23de243be6cdba47277a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

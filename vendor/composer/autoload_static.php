<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit743c065d3a35bcda8b26acf5e615f7ef
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit743c065d3a35bcda8b26acf5e615f7ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit743c065d3a35bcda8b26acf5e615f7ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit743c065d3a35bcda8b26acf5e615f7ef::$classMap;

        }, null, ClassLoader::class);
    }
}

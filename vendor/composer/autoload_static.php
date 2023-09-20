<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0ee2b6f7f9d8bc21ad35a953f626eb8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite0ee2b6f7f9d8bc21ad35a953f626eb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0ee2b6f7f9d8bc21ad35a953f626eb8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0ee2b6f7f9d8bc21ad35a953f626eb8::$classMap;

        }, null, ClassLoader::class);
    }
}

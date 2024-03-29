<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75c0a3bdc673cdd57fa1dd3b813c5091
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit75c0a3bdc673cdd57fa1dd3b813c5091::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75c0a3bdc673cdd57fa1dd3b813c5091::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75c0a3bdc673cdd57fa1dd3b813c5091::$classMap;

        }, null, ClassLoader::class);
    }
}

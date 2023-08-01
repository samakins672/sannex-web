<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3af30cee6daa15d21c83e5fad34ce788
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3af30cee6daa15d21c83e5fad34ce788::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3af30cee6daa15d21c83e5fad34ce788::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3af30cee6daa15d21c83e5fad34ce788::$classMap;

        }, null, ClassLoader::class);
    }
}

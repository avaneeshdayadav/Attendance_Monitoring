<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa832a14cd0186a6014b61e75e968625
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa832a14cd0186a6014b61e75e968625::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa832a14cd0186a6014b61e75e968625::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

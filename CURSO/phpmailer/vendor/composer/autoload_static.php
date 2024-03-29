<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5aacde84d76ffcfea12a8a5de4be4ab
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite5aacde84d76ffcfea12a8a5de4be4ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5aacde84d76ffcfea12a8a5de4be4ab::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

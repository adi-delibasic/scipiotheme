<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bfdbef436801aa58789c10aecba6e78
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SCIPIO\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SCIPIO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../includes',
        ),
    );

    public static $classMap = array (
        'SCIPIO\\Classes\\Scipio_Assets' => __DIR__ . '/../..' . '/../includes/Classes/Scipio_Assets.php',
        'SCIPIO\\Classes\\Scipio_Bootstrap' => __DIR__ . '/../..' . '/../includes/Classes/Scipio_Bootstrap.php',
        'SCIPIO\\Classes\\Scipio_Callbacks' => __DIR__ . '/../..' . '/../includes/Classes/Scipio_Callbacks.php',
        'SCIPIO\\Classes\\Scipio_Menus' => __DIR__ . '/../..' . '/../includes/Classes/Scipio_Menus.php',
        'SCIPIO\\Classes\\Scipio_Nav_Walker' => __DIR__ . '/../..' . '/../includes/Classes/Scipio_Nav_Walker.php',
        'SCIPIO\\Traits\\Scipio_Singleton' => __DIR__ . '/../..' . '/../includes/Traits/Scipio_Singleton.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bfdbef436801aa58789c10aecba6e78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bfdbef436801aa58789c10aecba6e78::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bfdbef436801aa58789c10aecba6e78::$classMap;

        }, null, ClassLoader::class);
    }
}

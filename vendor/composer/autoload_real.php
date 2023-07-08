<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4bc8ef666f9cc94a21220952fbeff11f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit4bc8ef666f9cc94a21220952fbeff11f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4bc8ef666f9cc94a21220952fbeff11f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4bc8ef666f9cc94a21220952fbeff11f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

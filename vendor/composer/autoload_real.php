<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite0ee2b6f7f9d8bc21ad35a953f626eb8
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

        spl_autoload_register(array('ComposerAutoloaderInite0ee2b6f7f9d8bc21ad35a953f626eb8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite0ee2b6f7f9d8bc21ad35a953f626eb8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite0ee2b6f7f9d8bc21ad35a953f626eb8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

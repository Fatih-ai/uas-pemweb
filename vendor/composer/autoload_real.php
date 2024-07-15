<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit675ac4d1fac587e5c169a07ce1464214
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

        spl_autoload_register(array('ComposerAutoloaderInit675ac4d1fac587e5c169a07ce1464214', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit675ac4d1fac587e5c169a07ce1464214', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit675ac4d1fac587e5c169a07ce1464214::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

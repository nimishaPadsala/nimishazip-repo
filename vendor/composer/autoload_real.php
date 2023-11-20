<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc111f26c0a6d3f4b331694bae8cc3eed
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

        spl_autoload_register(array('ComposerAutoloaderInitc111f26c0a6d3f4b331694bae8cc3eed', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc111f26c0a6d3f4b331694bae8cc3eed', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc111f26c0a6d3f4b331694bae8cc3eed::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

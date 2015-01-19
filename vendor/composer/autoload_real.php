<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit101de55a482035b9aca8bdcc747ee129
=======
class ComposerAutoloaderInit9316af812ff2ea9472e6712497018253
>>>>>>> FETCH_HEAD
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit101de55a482035b9aca8bdcc747ee129', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit101de55a482035b9aca8bdcc747ee129', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit9316af812ff2ea9472e6712497018253', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit9316af812ff2ea9472e6712497018253', 'loadClassLoader'));
>>>>>>> FETCH_HEAD

        $includePaths = require __DIR__ . '/include_paths.php';
        array_push($includePaths, get_include_path());
        set_include_path(join(PATH_SEPARATOR, $includePaths));

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
<<<<<<< HEAD
            composerRequire101de55a482035b9aca8bdcc747ee129($file);
=======
            composerRequire9316af812ff2ea9472e6712497018253($file);
>>>>>>> FETCH_HEAD
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire101de55a482035b9aca8bdcc747ee129($file)
=======
function composerRequire9316af812ff2ea9472e6712497018253($file)
>>>>>>> FETCH_HEAD
{
    require $file;
}

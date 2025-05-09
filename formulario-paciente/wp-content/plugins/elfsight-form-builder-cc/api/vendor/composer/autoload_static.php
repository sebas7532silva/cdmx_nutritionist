<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc40cd1d42b2db117bb3847238124970d
{
    public static $classMap = array (
        'ElfsightFormBuilderApi\\Core\\Api' => __DIR__ . '/..' . '/elfsight/Api.php',
        'ElfsightFormBuilderApi\\Core\\Cache' => __DIR__ . '/..' . '/elfsight/Cache.php',
        'ElfsightFormBuilderApi\\Core\\Debug' => __DIR__ . '/..' . '/elfsight/Debug.php',
        'ElfsightFormBuilderApi\\Core\\Helper' => __DIR__ . '/..' . '/elfsight/Helper.php',
        'ElfsightFormBuilderApi\\Core\\Options' => __DIR__ . '/..' . '/elfsight/Options.php',
        'ElfsightFormBuilderApi\\Core\\Throttle' => __DIR__ . '/..' . '/elfsight/Throttle.php',
        'ElfsightFormBuilderApi\\Core\\Url' => __DIR__ . '/..' . '/elfsight/Url.php',
        'ElfsightFormBuilderApi\\Core\\User' => __DIR__ . '/..' . '/elfsight/User.php',
        'ElfsightFormBuilderApi\\Debug' => __DIR__ . '/../..' . '/api-debug.php',
        'ElfsightFormBuilderApi\\Options' => __DIR__ . '/../..' . '/api-options.php',
        'ElfsightFormBuilderApi\\Records' => __DIR__ . '/../..' . '/api-records.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc40cd1d42b2db117bb3847238124970d::$classMap;

        }, null, ClassLoader::class);
    }
}

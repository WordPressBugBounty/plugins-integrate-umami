<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit828fbc8624ea7525fcff4212dc081e75
{
    public static $classMap = array (
        'Ancozockt\\Umami\\DashboardWidget' => __DIR__ . '/../..' . '/inc/class-dashboard-widget.php',
        'Ancozockt\\Umami\\Manager' => __DIR__ . '/../..' . '/inc/class-manager.php',
        'Ancozockt\\Umami\\Options' => __DIR__ . '/../..' . '/inc/class-options.php',
        'Ancozockt\\Umami\\Settings' => __DIR__ . '/../..' . '/inc/class-settings.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit828fbc8624ea7525fcff4212dc081e75::$classMap;

        }, null, ClassLoader::class);
    }
}
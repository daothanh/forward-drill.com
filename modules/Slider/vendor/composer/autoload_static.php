<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78565b3260e4d1b6a9311e342eb1b257
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Slider\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Slider\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\Slider\\Database\\Seeders\\SliderDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/SliderDatabaseSeeder.php',
        'Modules\\Slider\\Entities\\Slider' => __DIR__ . '/../..' . '/Entities/Slider.php',
        'Modules\\Slider\\Entities\\SliderItem' => __DIR__ . '/../..' . '/Entities/SliderItem.php',
        'Modules\\Slider\\Entities\\SliderItemTranslation' => __DIR__ . '/../..' . '/Entities/SliderItemTranslation.php',
        'Modules\\Slider\\Events\\SliderItemWasCreated' => __DIR__ . '/../..' . '/Events/SliderItemWasCreated.php',
        'Modules\\Slider\\Events\\SliderItemWasDeleting' => __DIR__ . '/../..' . '/Events/SliderItemWasDeleting.php',
        'Modules\\Slider\\Events\\SliderItemWasUpdated' => __DIR__ . '/../..' . '/Events/SliderItemWasUpdated.php',
        'Modules\\Slider\\Http\\Controllers\\Admin\\SliderController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/SliderController.php',
        'Modules\\Slider\\Http\\Controllers\\Admin\\SliderItemController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/SliderItemController.php',
        'Modules\\Slider\\Http\\Controllers\\Api\\SliderController' => __DIR__ . '/../..' . '/Http/Controllers/Api/SliderController.php',
        'Modules\\Slider\\Http\\Controllers\\Api\\SliderItemController' => __DIR__ . '/../..' . '/Http/Controllers/Api/SliderItemController.php',
        'Modules\\Slider\\Http\\Controllers\\SliderController' => __DIR__ . '/../..' . '/Http/Controllers/SliderController.php',
        'Modules\\Slider\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/Providers/RouteServiceProvider.php',
        'Modules\\Slider\\Providers\\SliderServiceProvider' => __DIR__ . '/../..' . '/Providers/SliderServiceProvider.php',
        'Modules\\Slider\\Repositories\\Cache\\CacheSliderItemRepository' => __DIR__ . '/../..' . '/Repositories/Cache/CacheSliderItemRepository.php',
        'Modules\\Slider\\Repositories\\Cache\\CacheSliderRepository' => __DIR__ . '/../..' . '/Repositories/Cache/CacheSliderRepository.php',
        'Modules\\Slider\\Repositories\\Eloquent\\EloquentSliderItemRepository' => __DIR__ . '/../..' . '/Repositories/Eloquent/EloquentSliderItemRepository.php',
        'Modules\\Slider\\Repositories\\Eloquent\\EloquentSliderRepository' => __DIR__ . '/../..' . '/Repositories/Eloquent/EloquentSliderRepository.php',
        'Modules\\Slider\\Repositories\\SliderItemRepository' => __DIR__ . '/../..' . '/Repositories/SliderItemRepository.php',
        'Modules\\Slider\\Repositories\\SliderRepository' => __DIR__ . '/../..' . '/Repositories/SliderRepository.php',
        'Modules\\Slider\\Sidebar\\MenuSidebarExtender' => __DIR__ . '/../..' . '/Sidebar/MenuSidebarExtender.php',
        'Modules\\Slider\\Support\\Facades\\Slider' => __DIR__ . '/../..' . '/Support/Facades/Slider.php',
        'Modules\\Slider\\Support\\Slider' => __DIR__ . '/../..' . '/Support/Slider.php',
        'Modules\\Slider\\Transformers\\FullSliderItemTransformer' => __DIR__ . '/../..' . '/Transformers/FullSliderItemTransformer.php',
        'Modules\\Slider\\Transformers\\FullSliderTransformer' => __DIR__ . '/../..' . '/Transformers/FullSliderTransformer.php',
        'Modules\\Slider\\Transformers\\SliderItemTransformer' => __DIR__ . '/../..' . '/Transformers/SliderItemTransformer.php',
        'Modules\\Slider\\Transformers\\SliderTransformer' => __DIR__ . '/../..' . '/Transformers/SliderTransformer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78565b3260e4d1b6a9311e342eb1b257::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78565b3260e4d1b6a9311e342eb1b257::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78565b3260e4d1b6a9311e342eb1b257::$classMap;

        }, null, ClassLoader::class);
    }
}
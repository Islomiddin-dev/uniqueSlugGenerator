<?php

namespace IslomiddinDev\UniqueSlugGenerator;

use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $files = [];
        if (file_exists(app_path('Helpers'))) {
            $files[__DIR__ . '/Helpers/Slug.php'] = app_path('Helpers/Slug.php');
        }

        if (file_exists(app_path('Providers/HelperServiceProvider.php'))) {
            echo 'HelperServiceProvider already exists. Please add this code to its register method.' . PHP_EOL;
            echo 'foreach (glob(app_path(\'Helpers\') . \'/*.php\') as $file) {' . PHP_EOL;
            echo '    require_once $file;' . PHP_EOL;
            echo '}' . PHP_EOL;
        } else {
            $files[__DIR__ . '/HelperServiceProvider.php'] = app_path('Providers/HelperServiceProvider.php');
        }

        $this->publishes($files, 'unique-slug-generator');
    }
}

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
        } else {
            $files[__DIR__ . '/Helpers'] = app_path('Helpers');
        }

        if (file_exists(app_path('Providers/HelperServiceProvider.php'))) {
            echo "\033[31m";
            echo 'HelperServiceProvider already exists. Please add this code to its register method.' . PHP_EOL;
            echo 'foreach (glob(app_path(\'Helpers\') . \'/*.php\') as $file) {' . PHP_EOL;
            echo '    require_once $file;' . PHP_EOL;
            echo '}' . PHP_EOL;
        } else {
            $files[__DIR__ . '/HelperServiceProvider.php'] = app_path('Providers/HelperServiceProvider.php');
        }

        $this->publishes($files, 'unique-slug-generator');

        echo "\033[32m";
        echo 'UniqueSlugGenerator has been installed successfully.' . PHP_EOL;
        echo 'Please add this provider to the list of providers in your config/app.php file.' . PHP_EOL;
        echo 'App\Providers\HelperServiceProvider::class,' . PHP_EOL;
    }
}

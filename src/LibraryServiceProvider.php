<?php

namespace IslomiddinDev\UniqueSlugGenerator;

use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->call(
            'php artisan vendor:publish --provider="IslomiddinDev\UniqueSlugGenerator\LibraryServiceProvider"'
        );

        $this->publishes([
            __DIR__ . '/Helpers' => app_path('Helpers'),
            __DIR__ . '/HelperServiceProvider.php' => app_path('Providers/HelperServiceProvider.php'),
        ]);
    }
}

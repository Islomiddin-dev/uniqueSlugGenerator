<?php

namespace IslomiddinDev\UniqueSlugGenerator;

use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Helpers' => app_path('Helpers'),
            __DIR__ . '/HelperServiceProvider.php' => app_path('Providers/HelperServiceProvider.php'),
        ], 'unique-slug-generator');
    }
}

<?php

namespace IslomiddinDev\UniqueSlugGenerator;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        foreach (glob(app_path('Helpers') . '/*.php') as $file) {
            require_once $file;
        }
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Helpers' => app_path('Helpers'),
        ]);
    }
}

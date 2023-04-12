<?php

namespace IslomiddinDev\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        foreach (glob(__DIR__ . 'Helpers' . '/*.php') as $file) {
            require_once $file;
        }
    }
}

<?php

namespace IslomiddinDev\UniqueSlugGenerator;

use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        echo "\033[32m";
        echo "Package islomiddin-dev/unique-slug-generator is successfully installed" . PHP_EOL;
        echo "Please add this provider to the list of providers in your config/app.php file." . PHP_EOL;
        echo "App\Providers\HelperServiceProvider::class," . PHP_EOL;
    }
}

<?php

namespace IslomiddinDev\UniqueSlugGenerator;

use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $message = "\033[32m Package islomiddin-dev/unique-slug-generator is successfully installed" . PHP_EOL . "Please add this provider to the list of providers in your config/app.php file." . PHP_EOL . "App\Providers\HelperServiceProvider::class,";
        info($message);
    }
}

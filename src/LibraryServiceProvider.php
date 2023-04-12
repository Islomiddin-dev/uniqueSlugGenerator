<?php

namespace IslomiddinDev\UniqueSlugGenerator;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Console\Output\ConsoleOutput;

class LibraryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // INFO background color blue and text color white
        $message = "\033[44;37m Package islomiddin-dev/unique-slug-generator is successfully installed" . PHP_EOL . "Please add this provider to the list of providers in your config/app.php file." . PHP_EOL . "App\Providers\HelperServiceProvider::class,";
        $console = new ConsoleOutput();
        $console->writeln($message);
    }
}

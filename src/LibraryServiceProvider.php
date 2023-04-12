<?php

namespace IslomiddinDev\UniqueSlugGenerator;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Console\Output\ConsoleOutput;

class LibraryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $message = PHP_EOL ."   \033[44;37m INFO \033[0m";
        $message .= "Package islomiddin-dev/unique-slug-generator is successfully installed" . PHP_EOL;
        $message .= PHP_EOL ."  \033[44;37m INFO \033[0m";
        $message .= "Please add this provider to the list of providers in your config/app.php file. ";
        $message  .= "\033[32m";
        $message  .= "App\Providers\HelperServiceProvider::class,";
        $message  .= "\033[0m";
        $console = new ConsoleOutput();
        $console->writeln($message);
    }
}

<?php

namespace App\Providers;

use App\PHPUnitListener;
use Exception;
use PHPUnit\Event\Facade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(Facade $facade): void
    {
        $facade->registerSubscriber(new PHPUnitListener);
    }
}
